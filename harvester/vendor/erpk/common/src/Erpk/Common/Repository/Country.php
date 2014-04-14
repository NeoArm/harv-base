<?php
namespace Erpk\Common\Repository;

use Doctrine\ORM\EntityRepository;

class Country extends EntityRepository
{
    public function findOneByName($name)
    {
        return $this->findOneBy(array('name' => $name));
    }
    
    public function fetchByCode($code)
    {
        return $this->findOneBy(array('code' => $code));
    }
}
