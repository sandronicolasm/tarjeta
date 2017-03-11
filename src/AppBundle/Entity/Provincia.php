<?php

namespace AppBundle\Entity;

/**
 * Provincia
 */
class Provincia
{
    /**
     * @var integer
     */
    private $idProv;

    /**
     * @var string
     */
    private $nameProv;


    /**
     * Get idProv
     *
     * @return integer
     */
    public function getIdProv()
    {
        return $this->idProv;
    }

    /**
     * Set nameProv
     *
     * @param string $nameProv
     *
     * @return Provincia
     */
    public function setNameProv($nameProv)
    {
        $this->nameProv = $nameProv;

        return $this;
    }

    /**
     * Get nameProv
     *
     * @return string
     */
    public function getNameProv()
    {
        return $this->nameProv;
    }
}
