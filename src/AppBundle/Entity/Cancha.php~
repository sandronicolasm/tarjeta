<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cancha
 *
 * @ORM\Table(name="cancha")
 * @ORM\Entity
 */
class Cancha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_canch", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCanch;

    /**
     * @var string
     *
     * @ORM\Column(name="name_canch", type="string", length=255, nullable=true)
     */
    private $nameCanch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cubi", type="boolean", nullable=true)
     */
    private $cubi;

    /**
     * @var integer
     *
     * @ORM\Column(name="prec_canch", type="integer", nullable=true)
     */
    private $precCanch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true)
     */
    private $timestamp;

    /**
     * @var \AppBundle\Entity\Capacidad
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Capacidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_capa", referencedColumnName="id_capa")
     * })
     */
    private $idCapa;

    /**
     * @var \AppBundle\Entity\Complejo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Complejo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comp", referencedColumnName="id_comp")
     * })
     */
    private $idComp;

    /**
     * @var \AppBundle\Entity\Tcancha
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tcancha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo", referencedColumnName="id_tipo")
     * })
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
}
