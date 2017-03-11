<?php

namespace AppBundle\Entity;

/**
 * Foto
 */
class Foto
{
    /**
     * @var integer
     */
    private $idFoto;

    /**
     * @var string
     */
    private $imagename;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var \AppBundle\Entity\Campeonato
     */
    private $idCamp;

    /**
     * @var \AppBundle\Entity\Complejo
     */
    private $idComp;


    /**
     * Get idFoto
     *
     * @return integer
     */
    public function getIdFoto()
    {
        return $this->idFoto;
    }

    /**
     * Set imagename
     *
     * @param string $imagename
     *
     * @return Foto
     */
    public function setImagename($imagename)
    {
        $this->imagename = $imagename;

        return $this;
    }

    /**
     * Get imagename
     *
     * @return string
     */
    public function getImagename()
    {
        return $this->imagename;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Foto
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Foto
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
     * Set idCamp
     *
     * @param \AppBundle\Entity\Campeonato $idCamp
     *
     * @return Foto
     */
    public function setIdCamp(\AppBundle\Entity\Campeonato $idCamp = null)
    {
        $this->idCamp = $idCamp;

        return $this;
    }

    /**
     * Get idCamp
     *
     * @return \AppBundle\Entity\Campeonato
     */
    public function getIdCamp()
    {
        return $this->idCamp;
    }

    /**
     * Set idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     *
     * @return Foto
     */
    public function setIdComp(\AppBundle\Entity\Complejo $idComp = null)
    {
        $this->idComp = $idComp;

        return $this;
    }

    /**
     * Get idComp
     *
     * @return \AppBundle\Entity\Complejo
     */
    public function getIdComp()
    {
        return $this->idComp;
    }
}
