<?php

# Declaração de tipo de retorno
function soma(int ...$valores):string {

    return array_sum($valores);
    
}

var_dump(soma(2, 2));
echo '<br>';

echo soma(25, 33);
echo '<br>';

echo soma(1.5, 3.2);
echo '<br>';

?>
