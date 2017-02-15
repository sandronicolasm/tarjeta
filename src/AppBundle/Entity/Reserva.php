<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="reserva")
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rese", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRese;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true)
     */
    private $timestamp;

    /**
     * @var \AppBundle\Entity\Cancha
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cancha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_canch", referencedColumnName="id_canch")
     * })
     */
    private $idCanch;

    /**
     * @var \AppBundle\Entity\HoraFecha
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\HoraFecha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hofe", referencedColumnName="id_hofe")
     * })
     */
    private $idHofe;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



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
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Reserva
     */
    public function setIdUsua(\AppBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Reserva
     */
    public function setIdUser(\AppBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }
}
