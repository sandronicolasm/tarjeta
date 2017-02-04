<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcancha
 *
 * @ORM\Table(name="tcancha")
 * @ORM\Entity
 */
class Tcancha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="name_tipo", type="string", length=255, nullable=false)
     */
    private $nameTipo;



    /**
     * Get idTipo
     *
     * @return integer
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set nameTipo
     *
     * @param string $nameTipo
     *
     * @return Tcancha
     */
    public function setNameTipo($nameTipo)
    {
        $this->nameTipo = $nameTipo;
    
        return $this;
    }

    /**
     * Get nameTipo
     *
     * @return string
     */
    public function getNameTipo()
    {
        return $this->nameTipo;
    }

    public function __toString()
    {

        return (string)$this->nameTipo;
    }
}