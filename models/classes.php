<?php

// Create class Actor
class Actor
{
    // Class properties
    public $name;
    public $lastname;
    public $year_of_birth;

    // Class Constructor
    function __construct($name, $lastname, $year_of_birth)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->year_of_birth = $year_of_birth;
    }

    // Class Methods
    public function getName()
    {
        return $this->name . ' ' . $this->lastname;
    }

    public function getAge()
    {
        return (2023 - $this->year_of_birth);
    }
}

// Create class Movie
class Movie
{
    // Class properties
    public $name;
    public $genre;
    public $vote;
    public $actor;
    public $id;

    // Class Constructor
    function __construct($name, $genre, $vote, $actor, $id)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->actor = $actor;
        $this->id = $id;
    }

    // Class methods
    public function getId()
    {
        return $this->id;
    }
}
