<?php

namespace Bosqu\ProjetPageAdministration\Model\Entity;

class User
{

    private ?int $id;
    private ?string $registration;
    private ?string $username;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $registration
     * @param string|null $username
     */
    public function __construct(int $id = null, string $registration = null, string $username = null)
    {
        $this->id = $id;
        $this->registration = $registration;
        $this->username = $username;
    }

    /**
     * Get id of User
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get registration date of User
     * @return string|null
     */
    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    /**
     * Set registration date of User
     * @param string|null $registration
     * @return User
     */
    public function setRegistration(?string $registration): User
    {
        $this->registration = $registration;
        return $this;
    }

    /**
     * Get username of User
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set username of User
     * @param string|null $username
     * @return User
     */
    public function setUsername(?string $username): User
    {
        $this->username = $username;
        return $this;
    }

}