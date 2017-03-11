<?php

namespace AppBundle\Entity;

/**
 * Ciudad
 */
class Ciudad
{
    /**
     * @var integer
     */
    private $idCiud;

    /**
     * @var string
     */
    private $nameCiud;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var \AppBundle\Entity\Provincia
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
