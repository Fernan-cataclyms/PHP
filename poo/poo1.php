<?php
class Automovil {
    public $color;
    public $motor;
    public $marca;

    public function obtener_color()
    {
        return $this->color;
    }
}
//crear 3 objetos de tipo automovil
$auto1 = new Automovil();
$auto1 ->color= 'verde';
$auto1 ->motor->motor= 2.0;
$auto1-> marca = 'toyota';

$auto2= new automovil();
$auto2->color= 'gris';
$auto2-> motor=1.5;
$auto2->marca= 'Ford';

//agregar un tercer auto
?>
<h3>imprimir los colores de autos disponibles </h3>
<?php
echo "Primer auto: ".$auto1->obtener_color();
echo "<br> segundo auto: ".$auto2->obtener_color();
echo "<br>tercer auto:";
?>