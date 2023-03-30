<?php

use User as GlobalUser;

class User{
    public $name;
    public $email;
    public function __construct()
    {
        echo "created object";
        $this->name = "Javier";
        $this->email = "javier@gmail.com";
    }
    
    public function __toString()
    {
        return "<br>Hola: {$this->name} estás registrado con el email {$this->email}";
    }
    public function __destruct()
    {
        echo "<br>Deleted object";
        
    }
}

$user = new User();
echo $user;
echo "<br>".$user->name;


