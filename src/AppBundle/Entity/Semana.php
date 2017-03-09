<?php

namespace AppBundle\Entity;

/**
 * Semana
 */
class Semana
{
    /**
     * @var integer
     */
    private $idDia;

    /**
     * @var string
     */
    private $nomDia;


    /**
     * Get idDia
     *
     * @return integer
     */
    public function getIdDia()
    {
        return $this->idDia;
    }

    /**
     * Set nomDia
     *
     * @param string $nomDia
     *
     * @return Semana
     */
    public function setNomDia($nomDia)
    {
        $this->nomDia = $nomDia;

        return $this;
    }

    /**
     * Get nomDia
     *
     * @return string
     */
    public function getNomDia()
    {
        return $this->nomDia;
    }
}

