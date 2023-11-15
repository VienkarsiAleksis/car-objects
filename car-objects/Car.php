<?php
include "tire.php";
include "electricMotor.php";
include "ICEngine.php";

class Car{
    private $tires = [];
    private $propulsionSystem = [];
    
    function __construct(public $color,
                         public $brand,
                         public $releaseYear, 
                         public $mileage,
                         $tireSize,
                         $tirePressure,
                         $type
                         ){
        for($i = 0; $i < 4; $i++){
            $this->tires[] = new Tire($tirePressure, $tireSize);
        }
        if($type == "Electric"){
            $this->propulsionSystem[] = new ElectricMotor(780, "electric", 0.9);
        }else if($type == "Hybrid"){
            $this->propulsionSystem[] = new ElectricMotor(4, "electric", 0.9);
            $this->propulsionSystem[] = new ICEngine(180, "patrol", 0.9);
        }else{
            $this->propulsionSystem[] = new ICEngine(34232, "dizel", 0.9);
        }
    }
    function makeNoise(){

    }
    function move(){

    }
}

?>