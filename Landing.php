<?php
$Insumos = array ( 
    'RAM'=> array('Memoria Ram de 1 Giga', 'Memoria Ram de 2 Gigas', ' Memoria Ram de 3 Gigas'), 
    'Placa_de_Video'=> array ('Placa de Video de 1 Giga', 'Placa de Video de 2 Gigas', 'Placa de Video de 3 Gigas'),
    'Pendrive'=> array('Pendrive 4 Gigas','Pendrive 8 Gigas','Pendrive 16 Gigas'));
?>
    <h1> Insumos informáticos </h1>

<h2> Memoria Ram </h2>
<?php
foreach($Insumos ['RAM'] as $memoria): ?>
<li>
<?php   echo $memoria; ?>
</li>
<?php endforeach; ?>

<h2> Placa de Video </h2>
<?php
foreach($Insumos ['Placa_de_Video'] as $Placa): ?>
<li>
<?php   echo $Placa; ?>
</li>
<?php   endforeach; ?>

<h2> Pendrive </h2>
<?php
foreach ( $Insumos['Pendrive'] as $KeyDrive): ?>
<li>
<?php   echo $KeyDrive; ?>
<?php   endforeach; ?>

