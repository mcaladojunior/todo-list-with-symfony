<?php

namespace App\Entity;

class Thing
{

    private $id;
    private $name;
    private $description;
    private $created_at;
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Thing
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Thing
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Thing
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return Thing
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     * @return Thing
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}