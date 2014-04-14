<?php
namespace Erpk\Common\Repository;

use Doctrine\ORM\EntityRepository;

class Region extends EntityRepository
{
    public function findOneByName($name)
    {
        return $this->findOneBy(array('name' => $name));
    }
}
