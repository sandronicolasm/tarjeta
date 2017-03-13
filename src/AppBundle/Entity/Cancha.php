<?php

namespace AppBundle\Entity;

/**
 * Cancha
 */
class Cancha
{
    /**
     * @var integer
     */
    private $idCanch;

    /**
     * @var string
     */
    private $nameCanch;

    /**
     * @var boolean
     */
    private $cubi;

    /**
     * @var integer
     */
    private $precCanch;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var \AppBundle\Entity\Capacidad
     */
    private $idCapa;

    /**
     * @var \AppBundle\Entity\Complejo
     */
    private $idComp;

    /**
     * @var \AppBundle\Entity\Tcancha
     */
    private $idTipo;


    /**
     * Get idCanch
     *
     * @return integer
     */
    public function getIdCanch()
    {
        return $this->idCanch;
    }

    /**
     * Set nameCanch
     *
     * @param string $nameCanch
     *
     * @return Cancha
     */
    public function setNameCanch($nameCanch)
    {
        $this->nameCanch = $nameCanch;

        return $this;
    }

    /**
     * Get nameCanch
     *
     * @return string
     */
    public function getNameCanch()
    {
        return $this->nameCanch;
    }

    /**
     * Set cubi
     *
     * @param boolean $cubi
     *
     * @return Cancha
     */
    public function setCubi($cubi)
    {
        $this->cubi = $cubi;

        return $this;
    }

    /**
     * Get cubi
     *
     * @return boolean
     */
    public function getCubi()
    {
        return $this->cubi;
    }

    /**
     * Set precCanch
     *
     * @param integer $precCanch
     *
     * @return Cancha
     */
    public function setPrecCanch($precCanch)
    {
        $this->precCanch = $precCanch;

        return $this;
    }

    /**
     * Get precCanch
     *
     * @return integer
     */
    public function getPrecCanch()
    {
        return $this->precCanch;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Cancha
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set idCapa
     *
     * @param \AppBundle\Entity\Capacidad $idCapa
     *
     * @return Cancha
     */
    public function setIdCapa(\AppBundle\Entity\Capacidad $idCapa = null)
    {
        $this->idCapa = $idCapa;

        return $this;
    }

    /**
     * Get idCapa
     *
     * @return \AppBundle\Entity\Capacidad
     */
    public function getIdCapa()
    {
        return $this->idCapa;
    }

    /**
     * Set idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     *
     * @return Cancha
     */
    public function setIdComp(\AppBundle\Entity\Complejo $idComp = null)
    {
        $this->idComp = $idComp;

        return $this;
    }

    /**
     * Get idComp
     *
     * @return \AppBundle\Entity\Complejo
     */
    public function getIdComp()
    {
        return $this->idComp;
    }

    /**
     * Set idTipo
     *
     * @param \AppBundle\Entity\Tcancha $idTipo
     *
     * @return Cancha
     */
    public function setIdTipo(\AppBundle\Entity\Tcancha $idTipo = null)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get idTipo
     *
     * @return \AppBundle\Entity\Tcancha
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    public function __toString()
    {
        return (string) $this->getNameCanch();
        // TODO: Implement __toString() method.
    }
}
