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


class Informatico extends People{
    public $especialidad;
    public $lenguajes;
    public $experiencia;


    public function __construct()
    {
        $this->especialidad = "Redes";
        $this->lenguajes = "HTML, PHP, JS, PYTHON";
        $this->experiencia = 21;
    }

    /**
     * Get the value of especialidad
     */ 
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set the value of especialidad
     *
     * @return  self
     */ 
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }


    public function getJob(){
        return "Im a fixcomputers";
    }
}

class Designer extends Informatico{
    public $experiencia;
    
    public function __construct()
    {
        parent::__construct();
        $this->experiencia = 10;
    }

    public function doWebsites(){
        echo "Im doing websites";
    }


    /**
     * Get the value of lenguajes
     */ 
    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    /**
     * Set the value of lenguajes
     *
     * @return  self
     */ 
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this;
    }
}