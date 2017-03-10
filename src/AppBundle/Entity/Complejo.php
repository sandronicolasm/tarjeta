<?php

namespace AppBundle\Entity;

/**
 * Complejo
 */
class Complejo
{
    /**
     * @var integer
     */
    private $idComp;

    /**
     * @var string
     */
    private $nameComp;

    /**
     * @var string
     */
    private $direComp;

    /**
     * @var integer
     */
    private $phonComp;

    /**
     * @var string
     */
    private $mailComp;

    /**
     * @var string
     */
    private $descripComp;

    /**
     * @var string
     */
    private $urlComp;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idRede;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idServ;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRede = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idServ = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set nameComp
     *
     * @param string $nameComp
     *
     * @return Complejo
     */
    public function setNameComp($nameComp)
    {
        $this->nameComp = $nameComp;

        return $this;
    }

    /**
     * Get nameComp
     *
     * @return string
     */
    public function getNameComp()
    {
        return $this->nameComp;
    }

    /**
     * Set direComp
     *
     * @param string $direComp
     *
     * @return Complejo
     */
    public function setDireComp($direComp)
    {
        $this->direComp = $direComp;

        return $this;
    }

    /**
     * Get direComp
     *
     * @return string
     */
    public function getDireComp()
    {
        return $this->direComp;
    }

    /**
     * Set phonComp
     *
     * @param integer $phonComp
     *
     * @return Complejo
     */
    public function setPhonComp($phonComp)
    {
        $this->phonComp = $phonComp;

        return $this;
    }

    /**
     * Get phonComp
     *
     * @return integer
     */
    public function getPhonComp()
    {
        return $this->phonComp;
    }

    /**
     * Set mailComp
     *
     * @param string $mailComp
     *
     * @return Complejo
     */
    public function setMailComp($mailComp)
    {
        $this->mailComp = $mailComp;

        return $this;
    }

    /**
     * Get mailComp
     *
     * @return string
     */
    public function getMailComp()
    {
        return $this->mailComp;
    }

    /**
     * Set descripComp
     *
     * @param string $descripComp
     *
     * @return Complejo
     */
    public function setDescripComp($descripComp)
    {
        $this->descripComp = $descripComp;

        return $this;
    }

    /**
     * Get descripComp
     *
     * @return string
     */
    public function getDescripComp()
    {
        return $this->descripComp;
    }

    /**
     * Set urlComp
     *
     * @param string $urlComp
     *
     * @return Complejo
     */
    public function setUrlComp($urlComp)
    {
        $this->urlComp = $urlComp;

        return $this;
    }

    /**
     * Get urlComp
     *
     * @return string
     */
    public function getUrlComp()
    {
        return $this->urlComp;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Complejo
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
     * Set idUser
     *
     * @param \AppBundle\Entity\FosUser $idUser
     *
     * @return Complejo
     */
    public function setIdUser(\AppBundle\Entity\FosUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Add idRede
     *
     * @param \AppBundle\Entity\Redes $idRede
     *
     * @return Complejo
     */
    public function addIdRede(\AppBundle\Entity\Redes $idRede)
    {
        $this->idRede[] = $idRede;

        return $this;
    }

    /**
     * Remove idRede
     *
     * @param \AppBundle\Entity\Redes $idRede
     */
    public function removeIdRede(\AppBundle\Entity\Redes $idRede)
    {
        $this->idRede->removeElement($idRede);
    }

    /**
     * Get idRede
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdRede()
    {
        return $this->idRede;
    }

    /**
     * Add idServ
     *
     * @param \AppBundle\Entity\Servicio $idServ
     *
     * @return Complejo
     */
    public function addIdServ(\AppBundle\Entity\Servicio $idServ)
    {
        $this->idServ[] = $idServ;

        return $this;
    }

    /**
     * Remove idServ
     *
     * @param \AppBundle\Entity\Servicio $idServ
     */
    public function removeIdServ(\AppBundle\Entity\Servicio $idServ)
    {
        $this->idServ->removeElement($idServ);
    }

    /**
     * Get idServ
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdServ()
    {
        return $this->idServ;
    }

    public function __toString()
    {
        return (string) $this->getNameComp();
        // TODO: Implement __toString() method.
    }
}

