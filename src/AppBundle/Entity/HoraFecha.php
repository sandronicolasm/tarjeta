<?php

namespace AppBundle\Entity;

/**
 * HoraFecha
 */
class HoraFecha
{
    /**
     * @var integer
     */
    private $idHofe;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Hora
     */
    private $idHora;


    /**
     * Get idHofe
     *
     * @return integer
     */
    public function getIdHofe()
    {
        return $this->idHofe;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return HoraFecha
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
     * Set idHora
     *
     * @param \AppBundle\Entity\Hora $idHora
     *
     * @return HoraFecha
     */
    public function setIdHora(\AppBundle\Entity\Hora $idHora = null)
    {
        $this->idHora = $idHora;

        return $this;
    }

    /**
     * Get idHora
     *
     * @return \AppBundle\Entity\Hora
     */
    public function getIdHora()
    {
        return $this->idHora;
    }
}
