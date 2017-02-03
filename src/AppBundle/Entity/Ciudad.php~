<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad")
 * @ORM\Entity
 */
class Ciudad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ciud", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiud;

    /**
     * @var string
     *
     * @ORM\Column(name="name_ciud", type="string", length=255, nullable=false)
     */
    private $nameCiud;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    private $code;

    /**
     * @var \AppBundle\Entity\Provincia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prov", referencedColumnName="id_prov")
     * })
     */
    private $idProv;



    /**
     * Get idCiud
     *
     * @return integer
     */
    public function getIdCiud()
    {
        return $this->idCiud;
    }

    /**
     * Set nameCiud
     *
     * @param string $nameCiud
     *
     * @return Ciudad
     */
    public function setNameCiud($nameCiud)
    {
        $this->nameCiud = $nameCiud;
    
        return $this;
    }

    /**
     * Get nameCiud
     *
     * @return string
     */
    public function getNameCiud()
    {
        return $this->nameCiud;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return Ciudad
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set idProv
     *
     * @param \AppBundle\Entity\Provincia $idProv
     *
     * @return Ciudad
     */
    public function setIdProv(\AppBundle\Entity\Provincia $idProv = null)
    {
        $this->idProv = $idProv;
    
        return $this;
    }

    /**
     * Get idProv
     *
     * @return \AppBundle\Entity\Provincia
     */
    public function getIdProv()
    {
        return $this->idProv;
    }
}
