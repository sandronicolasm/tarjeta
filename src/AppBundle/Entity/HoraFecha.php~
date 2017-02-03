<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HoraFecha
 *
 * @ORM\Table(name="hora_fecha")
 * @ORM\Entity
 */
class HoraFecha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hofe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHofe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Hora
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hora", referencedColumnName="id_hora")
     * })
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
