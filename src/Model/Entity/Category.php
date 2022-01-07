<?php

namespace Bosqu\ProjetPageAdministration\Model\Entity;

class Category
{

    private ?int $id;
    private ?string $category;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $category
     */
    public function __construct(int $id = null, string $category = null)
    {
        $this->id = $id;
        $this->category = $category;
    }

    /**
     * Get id of Category
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get name date of Category
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Set name date of Category
     * @param string|null $category
     * @return Category
     */
    public function setCategory(?string $category): Category
    {
        $this->category = $category;
        return $this;
    }
}