<?php

namespace AppBundle\Entity;

/**
 * Reserva
 */
class Reserva
{
    /**
     * @var integer
     */
    private $idRese;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var \DateTime
     */
    private $fecha_reserva;

    /**
     * @var \AppBundle\Entity\Cancha
     */
    private $idCanch;

    /**
     * @var \AppBundle\Entity\Hora
     */
    private $idHora;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $idUsua;


    /**
     * Get idRese
     *
     * @return integer
     */
    public function getIdRese()
    {
        return $this->idRese;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Reserva
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
     * Set idCanch
     *
     * @param \AppBundle\Entity\Cancha $idCanch
     *
     * @return Reserva
     */
    public function setIdCanch(\AppBundle\Entity\Cancha $idCanch = null)
    {
        $this->idCanch = $idCanch;

        return $this;
    }

    /**
     * Get idCanch
     *
     * @return \AppBundle\Entity\Cancha
     */
    public function getIdCanch()
    {
        return $this->idCanch;
    }

    /**
     * Set idHora
     *
     * @param \AppBundle\Entity\Hora $idHora
     *
     * @return Reserva
     */
    public function setIdHofe(\AppBundle\Entity\Hora $idHora = null)
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

    /**
     * Set idUsua
     *
     * @param \AppBundle\Entity\FosUser $idUsua
     *
     * @return Reserva
     */
    public function setIdUsua(\AppBundle\Entity\FosUser $idUsua = null)
    {
        $this->idUsua = $idUsua;

        return $this;
    }

    /**
     * Get idUsua
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdUsua()
    {
        return $this->idUsua;
    }

    /**
     * Set fecha_reserva
     *
     * @param \Date $fecha_reserva
     *
     * @return Reserva
     */
    public function setFechaReserva($fecha_reserva)
    {
        $this->fecha_reserva = $fecha_reserva;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \Date
     */
    public function getFechaReserva()
    {
        return $this->fecha_reserva;
    }


}
