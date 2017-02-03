<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity
 */
class Provincia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_prov", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProv;

    /**
     * @var string
     *
     * @ORM\Column(name="name_prov", type="string", length=255, nullable=false)
     */
    private $nameProv;



    /**
     * Get idProv
     *
     * @return integer
     */
    public function getIdProv()
    {
        return $this->idProv;
    }

    /**
     * Set nameProv
     *
     * @param string $nameProv
     *
     * @return Provincia
     */
    public function setNameProv($nameProv)
    {
        $this->nameProv = $nameProv;
    
        return $this;
    }

    /**
     * Get nameProv
     *
     * @return string
     */
    public function getNameProv()
    {
        return $this->nameProv;
    }
}
