<?php

function fatorial($num): float {
    $final = 1;
    for($i=$num; $i > 0; $i--) {
        $final *= $i;
    }
    return $final;
}

if(isset($_POST['fatorial'])) {
    $fatorial = fatorial($_POST['fatorial']);
    $num = $_POST['fatorial'];
    if($num == null){
        $num = 0;
    }
    header("location: ../ex12.php?r=$fatorial&f=$num");
}

?>