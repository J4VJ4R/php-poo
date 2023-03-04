<?php


/**
 * Class People is the main class this program, onlty to learning about herency
 */
class People{
    public $name;
    public $age;
    public $eight;
    public $genre;



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
     * Get the value of eight
     */ 
    public function getEight()
    {
        return $this->eight;
    }

    /**
     * Set the value of eight
     *
     * @return  self
     */ 
    public function setEight($eight)
    {
        $this->eight = $eight;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Function to show the method talk with return
     *
     * @return some text
     */
    public function talk(){
        return "Is tolking";
    }


    /**
     * Function walk to show some text
     *
     * @return some text
     */
    public function walk(){
        return "Is walking";
    }


}


/**
 * Class to create an informaticMan object with inheritance from People
 */
class InformaticMan extends People{
    public $action;
    public $programming;
    public $doOfimatic;


    /**
     * Function startAction when it shows some text
     *
     * @return $action
     */
    public function startAction(){
        global $action;
        $this->action = "Fixing computer";

        return $action;
    } 

    /**
     * Function languages where show cuantity languages know
     *
     * @return $programming
     */
    public function languages(){
        global $programming;
        $this->programming = "PHP, PYTHON, JS";

        return $programming;
    }
}

/**
 * Class Designer: to show new designer object with inheritance form People and InformaticMan
 * 
 */
class Designer extends InformaticMan{
    public $projectToDesign;

    /**
     * Function startPoject to show action when start a project
     *
     * @return $projectTodesign
     */
    public function starProject(){
        global $projectToDesign;
        $this->projectToDesign = "Startting proyect to design";

        return $projectToDesign;
    }
}
