<?php

include "propulsionSystem.php";

class ICEngine extends PropulsionSystem{
    public $size;
    private $cylinderCount;

    function work(){
        echo "Brumm brumm";
    }
}

?>