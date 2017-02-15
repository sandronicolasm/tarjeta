<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campeonato
 *
 * @ORM\Table(name="campeonato")
 * @ORM\Entity
 */
class Campeonato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_camp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCamp;

    /**
     * @var string
     *
     * @ORM\Column(name="name_camp", type="string", length=255, nullable=false)
     */
    private $nameCamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fech_inic", type="date", nullable=true)
     */
    private $fechInic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fech_fina", type="date", nullable=true)
     */
    private $fechFina;

    /**
     * @var integer
     *
     * @ORM\Column(name="prec_insc", type="integer", nullable=true)
     */
    private $precInsc;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_camp", type="string", length=255, nullable=true)
     */
    private $descCamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true)
     */
    private $timestamp;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url_foto", type="string", length=255, nullable=false)
     */
    private $urlFoto;

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
     * Get idCamp
     *
     * @return integer
     */
    public function getIdCamp()
    {
        return $this->idCamp;
    }

    /**
     * Set nameCamp
     *
     * @param string $nameCamp
     *
     * @return Campeonato
     */
    public function setNameCamp($nameCamp)
    {
        $this->nameCamp = $nameCamp;
    
        return $this;
    }

    /**
     * Get nameCamp
     *
     * @return string
     */
    public function getNameCamp()
    {
        return $this->nameCamp;
    }

    /**
     * Set urlFoto
     *
     * @param string $urlFoto
     *
     * @return Campeonato
     */
    public function setUrlFoto($urlFoto)
    {
        $this->urlFoto = $urlFoto;
    
        return $this;
    }

    /**
     * Get urlFoto
     *
     * @return string
     */
    public function getUrlFoto()
    {
        return $this->urlFoto;
    }
    /**
     * Set fechInic
     *
     * @param \DateTime $fechInic
     *
     * @return Campeonato
     */
    public function setFechInic($fechInic)
    {
        $this->fechInic = $fechInic;
    
        return $this;
    }

    /**
     * Get fechInic
     *
     * @return \DateTime
     */
    public function getFechInic()
    {
        return $this->fechInic;
    }

    /**
     * Set fechFina
     *
     * @param \DateTime $fechFina
     *
     * @return Campeonato
     */
    public function setFechFina($fechFina)
    {
        $this->fechFina = $fechFina;
    
        return $this;
    }

    /**
     * Get fechFina
     *
     * @return \DateTime
     */
    public function getFechFina()
    {
        return $this->fechFina;
    }

    /**
     * Set precInsc
     *
     * @param integer $precInsc
     *
     * @return Campeonato
     */
    public function setPrecInsc($precInsc)
    {
        $this->precInsc = $precInsc;
    
        return $this;
    }

    /**
     * Get precInsc
     *
     * @return integer
     */
    public function getPrecInsc()
    {
        return $this->precInsc;
    }

    /**
     * Set descCamp
     *
     * @param string $descCamp
     *
     * @return Campeonato
     */
    public function setDescCamp($descCamp)
    {
        $this->descCamp = $descCamp;
    
        return $this;
    }

    /**
     * Get descCamp
     *
     * @return string
     */
    public function getDescCamp()
    {
        return $this->descCamp;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Campeonato
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
     * Set idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     *
     * @return Campeonato
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
    
    
}
