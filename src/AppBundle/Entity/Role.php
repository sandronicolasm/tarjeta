<?php

namespace AppBundle\Entity;

/**
 * Role
 */
class Role
{
    /**
     * @var integer
     */
    private $idRole;

    /**
     * @var string
     */
    private $nameRole;


    /**
     * Get idRole
     *
     * @return integer
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set nameRole
     *
     * @param string $nameRole
     *
     * @return Role
     */
    public function setNameRole($nameRole)
    {
        $this->nameRole = $nameRole;

        return $this;
    }

    /**
     * Get nameRole
     *
     * @return string
     */
    public function getNameRole()
    {
        return $this->nameRole;
    }
}
