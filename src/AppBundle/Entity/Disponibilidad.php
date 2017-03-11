<?php

namespace AppBundle\Entity;

/**
 * Disponibilidad
 */
class Disponibilidad
{
    /**
     * @var integer
     */
    private $idDisp;

    /**
     * @var integer
     */
    private $idDia;

    /**
     * @var integer
     */
    private $idApertura;

    /**
     * @var integer
     */
    private $idCierre;

    /**
     * @var integer
     */
    private $idComp;


    /**
     * Get idDisp
     *
     * @return integer
     */
    public function getIdDisp()
    {
        return $this->idDisp;
    }

    /**
     * Set idDia
     *
     * @param integer $idDia
     *
     * @return Disponibilidad
     */
    public function setIdDia($idDia)
    {
        $this->idDia = $idDia;

        return $this;
    }

    /**
     * Get idDia
     *
     * @return integer
     */
    public function getIdDia()
    {
        return $this->idDia;
    }

    /**
     * Set idApertura
     *
     * @param integer $idApertura
     *
     * @return Disponibilidad
     */
    public function setIdApertura($idApertura)
    {
        $this->idApertura = $idApertura;

        return $this;
    }

    /**
     * Get idApertura
     *
     * @return integer
     */
    public function getIdApertura()
    {
        return $this->idApertura;
    }

    /**
     * Set idCierre
     *
     * @param integer $idCierre
     *
     * @return Disponibilidad
     */
    public function setIdCierre($idCierre)
    {
        $this->idCierre = $idCierre;

        return $this;
    }

    /**
     * Get idCierre
     *
     * @return integer
     */
    public function getIdCierre()
    {
        return $this->idCierre;
    }

    /**
     * Set idComp
     *
     * @param integer $idComp
     *
     * @return Disponibilidad
     */
    public function setIdComp($idComp)
    {
        $this->idComp = $idComp;

        return $this;
    }

    /**
     * Get idComp
     *
     * @return integer
     */
    public function getIdComp()
    {
        return $this->idComp;
    }
}
