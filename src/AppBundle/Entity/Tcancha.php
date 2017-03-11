<?php

namespace AppBundle\Entity;

/**
 * Tcancha
 */
class Tcancha
{
    /**
     * @var integer
     */
    private $idTipo;

    /**
     * @var string
     */
    private $nameTipo;


    /**
     * Get idTipo
     *
     * @return integer
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set nameTipo
     *
     * @param string $nameTipo
     *
     * @return Tcancha
     */
    public function setNameTipo($nameTipo)
    {
        $this->nameTipo = $nameTipo;

        return $this;
    }

    /**
     * Get nameTipo
     *
     * @return string
     */
    public function getNameTipo()
    {
        return $this->nameTipo;
    }
}
