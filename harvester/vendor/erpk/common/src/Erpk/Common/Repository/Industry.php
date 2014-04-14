<?php
namespace Erpk\Common\Repository;

use Doctrine\ORM\EntityRepository;

class Industry extends EntityRepository
{
    public function findOneById($id)
    {
        return $this->findOneBy(array('id' => $id));
    }
    
    public function findOneByName($name)
    {
        return $this->findOneBy(array('name' => $name));
    }
    
    public function findOneByCode($code)
    {
        return $this->findOneBy(array('code' => $code));
    }
}
