<?php
interface Bird{
    public function makeSound();
} 
class Perkutut implements Bird{
    public function makeSound(){
        echo "kur kur";
    }
}
$burung=new Perkutut();
$burung->makesound();
?>