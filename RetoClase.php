<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
$productos = array(
    array('Item', 'Elemento', 'Cantidad', 'Valor', 'Subtotal'),
    array(1, 'Computador', 3, 2300000),
    array(2, 'Silla', 4, 1500000),
    array(3, 'Mesa', 2, 500000),
    array(4, 'Escritorio', 1, 1900000),
    array(5, 'Maletín', 5, 73000)
);
$Total = 0;
echo '<table class="table">';
echo '<tr>';
for($i = 0; $i < 1; $i++) {
    for($j = 0; $j < 5; $j++) {
        echo '<th>'.$productos[$i][$j].'</th>';
    }
}
echo '</tr>';

for($i = 1; $i < 6; $i++) {
    echo '<tr>';
    for($j = 0; $j < 5; $j++) {
        if ($j === 3){
        $Subtotal = intval($productos[$i][$j]) * intval($productos[$i][$j-1]);
        $Total += $Subtotal;
            echo '<td> $'.number_format($productos[$i][$j],0,',','.').'</td>';
            continue;
        }
        echo isset($productos[$i][$j])  ? '<td>'.$productos[$i][$j].'</td>' : '<td> $'.number_format($Subtotal,0,',','.');
    }
    echo '</tr>';
}

echo '<tr><td colspan="3" class="Behind"></td><td>Total a pagar</td><td> $'.number_format($Total,0,'.','.').'</td></tr>';

echo '</table>';

