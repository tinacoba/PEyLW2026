<?php

$vehículos=array(); 

echo "Ingrese la cantidad de vehiculos alquilados: ";
$cantidad=fgets(STDIN);

for($i=0; $i<$cantidad; $i++){
   echo"Ingrese: modelo, marca, dias que el auto fue alquilado, precio dia, precio total";
   $modelo=fgets(STDIN);
   $marca=fgets(STDIN);
   $dias=fgets(STDIN);
   $PrecioDia=fgets(STDIN);

   $total=(dias*PrecioDia);

}