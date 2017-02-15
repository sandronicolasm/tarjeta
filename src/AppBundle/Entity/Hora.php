<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hora
 *
 * @ORM\Table(name="hora")
 * @ORM\Entity
 */
class Hora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hora", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=true)
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
}
