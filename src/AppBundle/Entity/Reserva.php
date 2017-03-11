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
     * @var \AppBundle\Entity\Cancha
     */
    private $idCanch;

    /**
     * @var \AppBundle\Entity\HoraFecha
     */
    private $idHofe;

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
     * Set idHofe
     *
     * @param \AppBundle\Entity\HoraFecha $idHofe
     *
     * @return Reserva
     */
    public function setIdHofe(\AppBundle\Entity\HoraFecha $idHofe = null)
    {
        $this->idHofe = $idHofe;

        return $this;
    }

    /**
     * Get idHofe
     *
     * @return \AppBundle\Entity\HoraFecha
     */
    public function getIdHofe()
    {
        return $this->idHofe;
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
}
