<?php

class Configuration{
    public static $color;
    public static $newsletter;
    public static $entorno;

    

    /**
     * Get the value of color
     */ 
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        self::$color = $color;
    }

    /**
     * Get the value of newsletter
     */ 
    public  static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * Set the value of newsletter
     *
     * @return  self
     */ 
    public function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;

    }

    /**
     * Get the value of entorno
     */ 
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * Set the value of entorno
     *
     * @return  self
     */ 
    public function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}