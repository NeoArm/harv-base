<?php
namespace Erpk\Common\Tests;

use Erpk\Common\Tests\TestCase;

class CountryTest extends TestCase
{
    public function __construct()
    {
        $this->em = $this->getEntityManager();
        $this->repo = $this->em->getRepository('Erpk\Common\Entity\Country');
    }
    
    public function testFetchById()
    {
        $this->assertEquals($this->repo->find(1)->getName(), 'Romania');
        $this->assertEquals($this->repo->find(35)->getName(), 'Poland');
    }
    
    public function testFetchByCode()
    {
        $this->assertEquals($this->repo->findOneByCode('RO')->getName(), 'Romania');
        $this->assertEquals($this->repo->findOneByCode('PL')->getName(), 'Poland');
    }
    
    public function testFetchByName()
    {
        $this->assertEquals($this->repo->findOneByName('Romania')->getCode(), 'RO');
        $this->assertEquals($this->repo->findOneByName('Republic of Macedonia (FYROM)')->getCode(), 'MK');
    }
    
    public function testFetchNotFound()
    {
        $this->assertNull($this->repo->findOneByName('Loland'));
    }
    
    public function testFetchAll()
    {
        $result = $this->repo->findAll();
        $this->assertTrue(count($result) > 0);
    }
}
