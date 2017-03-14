<?php

namespace AppBundle\Entity;

/**
 * Hora
 */
class Hora
{
    /**
     * @var integer
     */
    private $idHora;

    /**
     * @var \DateTime
     */
    private $hora;


    /**
     * Get idHora
     *
     * @return integer
     */
    public function getIdHora()
    {
        return $this->idHora;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    public function __toString()
    {
        return (string) $this->getHora();
        // TODO: Implement __toString() method.
    }
}
