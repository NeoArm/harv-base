<?php
require __DIR__.'/../vendor/autoload.php';
if (count($argv) !== 3) {
    die("\nusage: php ".basename(__FILE__)." <private api key> <public api key>\n\n");
}

$client = new Erpk\Api\Client;
$client->setPrivateKey($argv[1]);
$client->setPublicKey($argv[2]);

/**
 * Load countries
 */
$entityManager = new Erpk\Common\EntityManager();
$entityManager->createQuery('DELETE FROM Erpk\Common\Entity\Country')->getResult();

$countriesData = $client->call('countries', 'index');
$countriesData = $countriesData['countries']['country'];

$countriesIDs = array();
foreach ($countriesData as $countryData) {
    $country = new Erpk\Common\Entity\Country;
    $country->setId($countryData['id']);
    $country->setName($countryData['name']);
    $country->setCode($countryData['initials']);
    $entityManager->persist($country);
    $countriesIDs[] = $countryData['id'];
}
$entityManager->flush();

$countryRepository = $entityManager->getRepository('Erpk\Common\Entity\Country');
$entityManager->createQuery('DELETE FROM Erpk\Common\Entity\Region')->getResult();

foreach ($countriesIDs as $countryID) {
    $regionsData = $client->call('country', 'regions', array('countryId' => $countryID));
    $regionsData = $regionsData['regions']['region'];
    
    foreach ($regionsData as $regionData) {
        $region = new Erpk\Common\Entity\Region;
        $region->setId($regionData['id']);
        $region->setName($regionData['name']);
        $region->setPermalink($regionData['permalink']);
        $region->setZone($regionData['zone']);
        $originalOwnerCountry = $countryRepository->find($regionData['original_owner_country_id']);
        $region->setOriginalOwnerCountry($originalOwnerCountry);
        $entityManager->persist($region);
    }
}

$entityManager->flush();
