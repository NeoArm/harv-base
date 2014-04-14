<?php
namespace Erpk\Common\Entity;

/**
 * @Entity(repositoryClass="Erpk\Common\Repository\Region")
 * @Table(name="regions")
 **/
class Region
{
    /**
     * @Id
     * @Column(type="integer")
     **/
    protected $id;
    
    /**
     * @Column(type="string")
     **/
    protected $name;
    
    /**
     * @ManyToOne(targetEntity="Country")
     * @JoinColumn(name="original_owner_country_id", referencedColumnName="id")
     */
    protected $original_owner_country;
    
    /**
     * @Column(type="integer")
     **/
    protected $zone;
    
    /**
     * @Column(type="string")
     **/
    protected $permalink;
    
    public function toArray()
    {
        return array(
            'id'    => $this->getId(),
            'name'  => $this->getName(),
            'original_owner_country' => $this->getOriginalOwnerCountry(),
            'zone'  => $this->getZone()
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
    
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;
    }
    
    public function getPermalink()
    {
        return $this->permalink;
    }
    
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    
    public function getZone()
    {
        return $this->zone;
    }
    
    public function setOriginalOwnerCountry(Country $country)
    {
        $this->original_owner_country = $country;
    }
    
    public function getOriginalOwnerCountry()
    {
        return $this->original_owner_country;
    }
}
