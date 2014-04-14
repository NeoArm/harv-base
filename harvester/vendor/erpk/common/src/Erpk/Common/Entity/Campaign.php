<?php
namespace Erpk\Common\Entity;

/**
 * @Entity(repositoryClass="Erpk\Common\Repository\Campaign")
 * @Table(name="battles")
 **/
class Campaign
{
    /**
     * @Id @Column(type="integer")
     **/
    protected $id;
    
    /**
     * @ManyToOne(targetEntity="Country")
     **/
    protected $attacker;
    
    /**
     * @ManyToOne(targetEntity="Country")
     **/
    protected $defender;
    
    /**
     * @ManyToOne(targetEntity="Region")
     **/
    protected $region;
    
    /**
     * @Column(type="boolean")
     **/
    protected $is_resistance;
    
    public function toArray()
    {
        return array(
            'id'             => $this->getId(),
            'url'            => 'http://www.erepublik.com/en/military/battlefield/'.$this->getId(),
            'region'         => $this->getRegion(),
            'is_resistance'  => $this->isResistance(),
            'attacker'       => $this->getAttacker(),
            'defender'       => $this->getDefender()
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
    
    public function setAttacker($id)
    {
        $this->attacker = $id;
    }
    
    public function getAttacker()
    {
        return $this->attacker;
    }
    
    public function setDefender($id)
    {
        $this->defender = $id;
    }
    
    public function getDefender()
    {
        return $this->defender;
    }
    
    public function setRegion($region)
    {
        $this->region = $region;
    }
    
    public function getRegion()
    {
        return $this->region;
    }
    
    public function setResistance($res)
    {
        $this->is_resistance = (bool)$res;
    }
    
    public function isResistance()
    {
        return $this->is_resistance;
    }
}
