<?php

namespace AppBundle\Entity;

/**
 * Redes
 */
class Redes
{
    /**
     * @var integer
     */
    private $idRede;

    /**
     * @var string
     */
    private $nameRede;

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
}
