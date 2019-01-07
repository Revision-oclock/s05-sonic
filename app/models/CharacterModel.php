<?php

class Character extends CoreModel
{

    private $name;
    private $description;
    private $picture;
    private $typeId;

    public function setName($name)
    {
        return $this->$name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        return $this->$description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setPicture($picture)
    {
        return $this->$picture;
    }
    public function getPicture()
    {
        return $this->picture;
    }

    public function setType($typeId)
    {
        return $this->$typeId;
    }
    public function getType()
    {
        return $this->typeId;
    }

}