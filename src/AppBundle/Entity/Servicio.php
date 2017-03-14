<?php

namespace AppBundle\Entity;

/**
 * Servicio
 */
class Servicio
{
    /**
     * @var integer
     */
    private $idServ;

    /**
     * @var string
     */
    private $nameServ;

    /**
     * @var integer
     */
    private $precServ;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
     * Get idServ
     *
     * @return integer
     */
    public function getIdServ()
    {
        return $this->idServ;
    }

    /**
     * Set nameServ
     *
     * @param string $nameServ
     *
     * @return Servicio
     */
    public function setNameServ($nameServ)
    {
        $this->nameServ = $nameServ;

        return $this;
    }

    /**
     * Get nameServ
     *
     * @return string
     */
    public function getNameServ()
    {
        return $this->nameServ;
    }

    /**
     * Set precServ
     *
     * @param integer $precServ
     *
     * @return Servicio
     */
    public function setPrecServ($precServ)
    {
        $this->precServ = $precServ;

        return $this;
    }

    /**
     * Get precServ
     *
     * @return integer
     */
    public function getPrecServ()
    {
        return $this->precServ;
    }

    /**
     * Add idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     *
     * @return Servicio
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
        return (string) $this->getNameServ();
        // TODO: Implement __toString() method.
    }
}
