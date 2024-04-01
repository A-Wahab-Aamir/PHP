<?php 



interface CarInterface{
    public function startengine();
    public function stopengine();
}

class Mehran implements CarInterface{
    public function startengine()
    {
        echo "Meran starts:<br> ";
    }
    public function stopengine()
    {
        echo "Meran starts:<br> ";
    }
}

class Cultus implements CarInterface{
    public function startengine()
    {
        echo "Cultus starts:<br> ";
    }
    public function stopengine()
    {
        echo "Cultus starts:<br> ";
    }
}
function DriveCar(CarInterface $car){
    $car->startengine();
    $car->stopengine();
}

$m=new Mehran;
$c=new Cultus;
DriveCar($c);



?>