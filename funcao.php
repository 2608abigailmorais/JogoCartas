<?php 

function sortear($num){
    $cartas = array();
    for ($x = 0; $x < $num; $x++){
        $n = rand(1,13);
        // Verificar se o número já existe no array cartas
        // Como? Verificar se o valor n já existe dentro do array cartas
        $cartas[] = $n;
    }
    sort($cartas);
    return $cartas;   
}

function mostrarCartas($cartas,$naipe){
    if ($naipe == 1)
        echo "<h5>Ouro</h5>";
    elseif ($naipe == 2)
        echo "<h5>Copas</h5>";
    elseif ($naipe == 3)
        echo "<h5>Paus</h5>";
    elseif ($naipe == 4)
        echo "<h5>Espadas</h5>";
    echo "<table><tr>";
    foreach ($cartas as $c){
        echo "<td>".$c."</td><td></td>"; 
        
    if ($c == 1 && $naipe == 1){
        echo "<img src='img/1ouro.png' width='100'>";
    }
    if ($c == 2 && $naipe == 1){
        echo "<img src='img/2ouro.png' width='100'>";
    }
    if ($c == 3 && $naipe == 1){
        echo "<img src='img/3ouro.png' width='100'>";
    }
    if ($c == 4 && $naipe == 1){
        echo "<img src='img/4ouro.png' width='100'>";
    }
    if ($c == 5 && $naipe == 1){
        echo "<img src='img/5ouro.png' width='100'>";
    }
    if ($c == 6 && $naipe == 1){
        echo "<img src='img/6ouro.png' width='100'>";
    }
    if ($c == 7 && $naipe == 1){
        echo "<img src='img/7ouro.png' width='100'>";
    }
    if ($c == 8 && $naipe == 1){
        echo "<img src='img/8ouro.png' width='100'>";
    }
    if ($c == 9 && $naipe == 1){
        echo "<img src='img/9ouro.png' width='100'>";
    }
    if ($c == 10 && $naipe == 1){
        echo "<img src='img/10ouro.png' width='100'>";
    }
    if ($c == 11 && $naipe == 1){
        echo "<img src='img/11ouro.jpg' width='100'>";
    }
    if ($c == 12 && $naipe == 1){
        echo "<img src='img/12ouro.png' width='100'>";
    }
    if ($c == 13 && $naipe == 1){
        echo "<img src='img/13ouro.png' width='100'>";
    }
    

    if ($c == 1 && $naipe == 2){
        echo "<img src='img/1copas.png' width='100'>";
    }
    if ($c == 2 && $naipe == 2){
        echo "<img src='img/2copas.png' width='100'>";
    }
    if ($c == 3 && $naipe == 2){
        echo "<img src='img/3copas.png' width='100'>";
    }
    if ($c == 4 && $naipe == 2){
        echo "<img src='img/4copas.png' width='100'>";
    }
    if ($c == 5 && $naipe == 2){
        echo "<img src='img/5copas.png' width='100'>";
    }
    if ($c == 6 && $naipe == 2){
        echo "<img src='img/6copas.png' width='100'>";
    }
    if ($c == 7 && $naipe == 2){
        echo "<img src='img/7copas.png' width='100'>";
    }
    if ($c == 8 && $naipe == 2){
        echo "<img src='img/8copas.png' width='100'>";
    }
    if ($c == 9 && $naipe == 2){
        echo "<img src='img/9copas.png' width='100'>";
    }
    if ($c == 10 && $naipe == 2){
        echo "<img src='img/10copas.png' width='100'>";
    }
    if ($c == 11 && $naipe == 2){
        echo "<img src='img/11copas.png' width='100'>";
    }
    if ($c == 12 && $naipe == 2){
        echo "<img src='img/12copas.png' width='100'>";
    }
    if ($c == 13 && $naipe == 2){
        echo "<img src='img/13copas.png' width='100'>";
    }


    if ($c == 1 && $naipe == 3){
        echo "<img src='img/1paus.png' width='100'>";
    }
    if ($c == 2 && $naipe == 3){
        echo "<img src='img/2paus.png' width='100'>";
    }
    if ($c == 3 && $naipe == 3){
        echo "<img src='img/3paus.png' width='100'>";
    }
    if ($c == 4 && $naipe == 3){
        echo "<img src='img/4paus.png' width='100'>";
    }
    if ($c == 5 && $naipe == 3){
        echo "<img src='img/5paus.png' width='100'>";
    }
    if ($c == 6 && $naipe == 3){
        echo "<img src='img/6paus.png' width='100'>";
    }
    if ($c == 7 && $naipe == 3){
        echo "<img src='img/7paus.jpg' width='100'>";
    }
    if ($c == 8 && $naipe == 3){
        echo "<img src='img/8paus.jpg' width='100'>";
    }
    if ($c == 9 && $naipe == 3){
        echo "<img src='img/9paus.jpg' width='100'>";
    }
    if ($c == 10 && $naipe == 3){
        echo "<img src='img/10paus.jpg' width='100'>";
    }
    if ($c == 11 && $naipe == 3){
        echo "<img src='img/11paus.png' width='100'>";
    }
    if ($c == 12 && $naipe == 3){
        echo "<img src='img/12paus.png' width='100'>";
    }
    if ($c == 13 && $naipe == 3){
        echo "<img src='img/13paus.png' width='100'>";
    }

    if ($c == 1 && $naipe == 4){
        echo "<img src='img/1espadas.png' width='100'>";
    }
    if ($c == 2 && $naipe == 4){
        echo "<img src='img/2espadas.png' width='100'>";
    }
    if ($c == 3 && $naipe == 4){
        echo "<img src='img/3espadas.png' width='100'>";
    }
    if ($c == 4 && $naipe == 4){
        echo "<img src='img/4espadas.png' width='100'>";
    }
    if ($c == 5 && $naipe == 4){
        echo "<img src='img/5espadas.png' width='100'>";
    }
    if ($c == 6 && $naipe == 4){
        echo "<img src='img/6espadas.png' width='100'>";
    }
    if ($c == 7 && $naipe == 4){
        echo "<img src='img/7espadas.png' width='100'>";
    }
    if ($c == 8 && $naipe == 4){
        echo "<img src='img/8espadas.png' width='100'>";
    }
    if ($c == 9 && $naipe == 4){
        echo "<img src='img/9espadas.png' width='100'>";
    }
    if ($c == 10 && $naipe == 4){
        echo "<img src='img/10espadas.png' width='100'>";
    }
    if ($c == 11 && $naipe == 4){
        echo "<img src='img/11espadas.png' width='100'>";
    }
    if ($c == 12 && $naipe == 4){
        echo "<img src='img/12espadas.png' width='100'>";
    }
    if ($c == 13 && $naipe == 4){
        echo "<img src='img/13espadas.png' width='100'>";
    }

    }     
    echo "</tr></table>"; 
}

function somar($cartas, $num, $h1, $h2, $h3, $h4, $h5, $h6){
 if ($num == 2) {
    $totalJ = $h1 + $h2;
    echo "$totalJ";
}
    if ($num == 3) {
      $totalJ = $h1 + $h2 + $h3;
      echo "$totalJ";
}  
    if ($num == 4) {
      $totalJ = $h1 + $h2 + $h3 + $h4;
      echo "$totalJ";
}
  if ($num == 5) {
    $totalJ = $h1 + $h2 + $h3 + $h4 + $h5;
    echo "$totalJ";
}
  if ($num == 6) {
    $totalJ = $h1 + $h2 + $h3 + $h4 + $h5 + $h6;
    echo "$totalJ";
}
} 

function somarp($cartasp, $num, $p1, $p2, $p3, $p4, $p5, $p6){
 if ($num == 2) {
    $totalP = $p1 + $p2;
    echo "$totalP";
}
    if ($num == 3) {
      $totalP = $p1 + $p2 + $p3;
      echo "$totalP";
}  
    if ($num == 4) {
      $totalP = $p1 + $p2 + $p3 + $p4;
      echo "$totalP";
}
  if ($num == 5) {
    $totalP = $p1 + $p2 + $p3 + $p4 + $p5;
    echo "$totalP";
}
  if ($num == 6) {
    $totalP = $p1 + $p2 + $p3 + $p4 + $p5 + $p6;
    echo "$totalP";
}
}   return $totalP;
    return $totalJ;

    function($totalJ, $totalP){
    if ($totalP == $totalJ){
        echo "<h3>Empate</h3>";
 }
     if ($totalP > $totalJ) {
        echo "<h1>Computador Ganhou</h1>";
 }  
     if ($totalP < $totalJ){
     echo "<h2>Usuário xxxx Ganhou</h2>";
}
}
?>