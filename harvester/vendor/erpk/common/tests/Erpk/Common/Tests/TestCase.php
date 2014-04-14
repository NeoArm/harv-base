<?php
namespace Erpk\Common\Tests;

use Erpk\Common\EntityManager;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    protected $entityManager;

    public function getEntityManager()
    {
        if ($this->entityManager === null) {
            $this->entityManager = new EntityManager();
        }
        return $this->entityManager;
    }
}
