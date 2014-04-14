<?php
namespace Erpk\Common\Entity;

/**
 * @Entity(repositoryClass="Erpk\Common\Repository\Industry")
 * @Table(name="industries")
 **/
class Industry
{
    /**
     * @Id @Column(type="integer")
     **/
    protected $id;
    
    /**
     * @Column(type="string")
     **/
    protected $name;
    
    /**
     * @Column(type="string")
     **/
    protected $code;
    
    public function toArray()
    {
        return array(
            'id'    =>  $this->getId(),
            'name'  =>  $this->getName(),
            'code'  =>  $this->getCode()
        );
    }
    
    public function setId($id)
    {
        $this->id = (int)$id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setCode($code)
    {
        $this->code = $code;
    }
    
    public function getCode()
    {
        return $this->code;
    }
}
