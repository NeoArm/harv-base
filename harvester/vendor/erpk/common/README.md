Introduction
------------
It is bundle of useful eRepublik's utilities.
###Erpk\Common\DateTime
That class extends original PHP [DateTime](http://php.net/manual/en/class.datetime.php).
Examples:
####Create DateTime from eRepublik day
```php
<?php
use Erpk\Common\DateTime;
$dateTime = DateTime::createFromDay(1849);
echo 'Day 1849 is '.$dateTime->format('Y-m-d');
```
Output
```
Day 1849 is 2012-12-12
```
####Show current eRepublik day
```php
<?php
use Erpk\Common\DateTime;
$dateTime = new DateTime;
echo 'Today is '.$dateTime->getDay().' eRepublik\'s day';
```
Output (may differ)
```
Today is 1849 eRepublik's day
```

###Erpk\Common\EntityManager
```php
<?php
use Erpk\Common\EntityManager;
$em = new EntityManager;

// Search for country
$countries = $em->getRepository('Erpk\Common\Entity\Country');

$country = $countries->findOneByCode('AU');
echo $country->getId(); // returns "50"
echo $country->getName(); // returns "Australia"
echo $country->getCode(); // returns "AU"

// You can also search by ID or name
$country = $countries->findOneById(50);
$country = $countries->findOneByName('Australia');
```
