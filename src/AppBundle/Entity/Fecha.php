<?php

namespace AppBundle\Entity;

/**
 * Fecha
 */
class Fecha
{
    /**
     * @var integer
     */
    private $idFech;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \DateTime
     */
    private $timestamp;


    /**
     * Get idFech
     *
     * @return integer
     */
    public function getIdFech()
    {
        return $this->idFech;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Fecha
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
}
