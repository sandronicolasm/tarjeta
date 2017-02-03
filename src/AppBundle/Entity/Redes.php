<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Redes
 *
 * @ORM\Table(name="redes")
 * @ORM\Entity
 */
class Redes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rede", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRede;

    /**
     * @var string
     *
     * @ORM\Column(name="name_rede", type="string", length=255, nullable=false)
     */
    private $nameRede;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Complejo", mappedBy="idRede")
     */
    private $idComp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idComp = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idRede
     *
     * @return integer
     */
    public function getIdRede()
    {
        return $this->idRede;
    }

    /**
     * Set nameRede
     *
     * @param string $nameRede
     *
     * @return Redes
     */
    public function setNameRede($nameRede)
    {
        $this->nameRede = $nameRede;
    
        return $this;
    }

    /**
     * Get nameRede
     *
     * @return string
     */
    public function getNameRede()
    {
        return $this->nameRede;
    }

    /**
     * Add idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     *
     * @return Redes
     */
    public function addIdComp(\AppBundle\Entity\Complejo $idComp)
    {
        $this->idComp[] = $idComp;
    
        return $this;
    }

    /**
     * Remove idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     */
    public function removeIdComp(\AppBundle\Entity\Complejo $idComp)
    {
        $this->idComp->removeElement($idComp);
    }

    /**
     * Get idComp
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdComp()
    {
        return $this->idComp;
    }

    public function __toString()
    {

        return (string)$this->nameRede;
    }
}
