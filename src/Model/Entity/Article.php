<?php

namespace Bosqu\ProjetPageAdministration\Model\Entity;

class Article
{

    private ?int $id;
    private ?string $registration;
    private ?string $name;
    private ?int $user;
    private ?int $category;

    /**
     * Subject constructor.
     * @param int|null $id
     * @param string|null $registration
     * @param string|null $name
     * @param int|null $user
     * @param int|null $category
     */
    public function __construct(int $id = null, string $registration = null, string $name = null, int $user = null, int $category = null)
    {
        $this->id = $id;
        $this->registration = $registration;
        $this->name = $name;
        $this->user = $user;
        $this->category = $category;
    }

    /**
     * Get id of Subject
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get registration date of Subject
     * @return string|null
     */
    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    /**
     * Set registration date of Subject
     * @param string|null $registration
     * @return Article
     */
    public function setRegistration(?string $registration): Article
    {
        $this->registration = $registration;
        return $this;
    }

    /**
     * Get user_fk of Subject
     * @return int|null
     */
    public function getUser(): ?int
    {
        return $this->user;
    }

    /**
     * Set user_fk of Subject
     * @param false|int|null $user
     */
    public function setUser($user): Article
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get category_fk of Subject
     * @return int|null
     */
    public function getCategory(): ?int
    {
        return $this->category;
    }

    /**
     * Set category_fk of Subject
     * @param false|int|null $category
     */
    public function setCategory($category): Article
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get name of Subject
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name of Subject
     * @param string|null $name
     * @return Article
     */
    public function setName(?string $name): Article
    {
        $this->name = $name;
        return $this;
    }
}