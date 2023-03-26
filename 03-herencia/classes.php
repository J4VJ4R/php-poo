<?php
// Posibility to inerhitance different atributes

class People
{
    public $name;
    public $lastname;
    public $age;
    public $weith;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of weith
     */ 
    public function getWeith()
    {
        return $this->weith;
    }

    /**
     * Set the value of weith
     *
     * @return  self
     */ 
    public function setWeith($weith)
    {
        $this->weith = $weith;

        return $this;
    }

    public function isTalking(){
        return "is talking";
    }

    public function isWalking(){
        return "is walking";
    }
}
