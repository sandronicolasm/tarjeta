<?php

namespace AppBundle\Entity;

/**
 * Capacidad
 */
class Capacidad
{
    /**
     * @var integer
     */
    private $idCapa;

    /**
     * @var integer
     */
    private $capa;


    /**
     * Get idCapa
     *
     * @return integer
     */
    public function getIdCapa()
    {
        return $this->idCapa;
    }

    /**
     * Set capa
     *
     * @param integer $capa
     *
     * @return Capacidad
     */
    public function setCapa($capa)
    {
        $this->capa = $capa;

        return $this;
    }

    /**
     * Get capa
     *
     * @return integer
     */
    public function getCapa()
    {
        return $this->capa;
    }

    public function __toString()
    {
        return (string) $this->getCapa();
        // TODO: Implement __toString() method.
    }
}
