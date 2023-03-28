<?php

use User as GlobalUser;

class User{

    public function __construct()
    {
        echo "created object";
    }
    
    public function __destruct()
    {
        echo "<br>Deleted object";
        
    }
}

$user = new User();

for ($i=0; $i <= 200; $i++) { 
    echo $i."<br>";
}

