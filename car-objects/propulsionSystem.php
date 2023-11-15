<?php

abstract class PropulsionSystem{

    function __construct(public $power,
                         public $fuelType,
                         protected $refficiency){}


    abstract public function work();
}

?>