<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capacidad
 *
 * @ORM\Table(name="capacidad")
 * @ORM\Entity
 */
class Capacidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_capa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="capa", type="integer", nullable=false)
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

        return (string)$this->capa;
    }
}
