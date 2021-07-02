<!DOCTYPE html>
<?php 

include_once 'funcao.php'; 

$num = isset($_POST['num']) ? $_POST['num'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$naipe = isset($_POST['naipe']) ? $_POST['naipe'] : 1;
$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
$cartas = sortear($num);
$cartasp = sortear($num);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cartas do Baralho</title>
</head>
<body>
  <form method="post">
  
  <label for="nome">Nome</label>
  <input type="text" name="nome" id="nome" required value="<?php echo $nome; ?>"><br>
  
  <label for="naipe">Naipe</label>
  <input type="radio" name="naipe" id="naipe" value="1" 
        <?php if ($naipe == 1) echo 'checked'; ?>>Ouro
  <input type="radio" name="naipe" id="naipe" value="2" 
        <?php if ($naipe == 2) echo 'checked'; ?>>Copas
  <input type="radio" name="naipe" id="naipe" value="3" 
        <?php if ($naipe == 3) echo 'checked'; ?>>Paus
  <input type="radio" name="naipe" id="naipe" value="4" 
        <?php if ($naipe == 4) echo 'checked'; ?>>Espadas<br>
  
  <label for="num">Cartas</label>
  <select name="num" id="num">
  <option value="2" <?php if ($num == 2) echo 'selected'; ?>>2</option>
  <option value="3" <?php if ($num == 3) echo 'selected'; ?>>3</option>
  <option value="4" <?php if ($num == 4) echo 'selected'; ?>>4</option>
  <option value="5" <?php if ($num == 5) echo 'selected'; ?>>5</option>
  <option value="6" <?php if ($num == 6) echo 'selected'; ?>>6</option>
  </select><br>
  
  <?php
    for ($x = 0; $x < $num; $x++){
      echo "<input type='hidden' name='h".($x+1)."' value='".$cartas[$x]."'>";
    }
    for ($i = 0; $i < $num; $i++){
      echo "<input type='hidden' name='p".($i+1)."' value='".$cartasp[$i]."'>";
    }
  ?>

  <button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
  <button type="submit"  name="acao" id="acao" value="jogar">Jogar</button>
  </form>  
<?php
    if ($acao == 'jogar'){
    
        $h1 = isset($_POST['h1']) ? $_POST['h1'] : 0;
        $h2 = isset($_POST['h2']) ? $_POST['h2'] : 0;
        $h3 = isset($_POST['h3']) ? $_POST['h3'] : 0;
        $h4 = isset($_POST['h4']) ? $_POST['h4'] : 0;
        $h5 = isset($_POST['h5']) ? $_POST['h5'] : 0;
        $h6 = isset($_POST['h6']) ? $_POST['h6'] : 0;
  
        if ($h1 != 0)
          echo "Carta 1: ".$h1."<br>";
        if ($h2 != 0)
          echo "Carta 2: ".$h2."<br>";
        if ($h3 != 0)
          echo "Carta 3: ".$h3."<br>";
        if ($h4 != 0)
          echo "Carta 4: ".$h4."<br>";
        if ($h5 != 0)
          echo "Carta 5: ".$h5."<br>";
        if ($h6 != 0)
          echo "Carta 6: ".$h6."<br>";

         echo "Total da sua Pontuação:<br>";
        somar($h1, $h2, $h3, $h4, $h5, $h6);
       
        echo " <br>Computador<br>";

        $p1 = isset($_POST['p1']) ? $_POST['p1'] : 0;
        $p2 = isset($_POST['p2']) ? $_POST['p2'] : 0;
        $p3 = isset($_POST['p3']) ? $_POST['p3'] : 0;
        $p4 = isset($_POST['p4']) ? $_POST['p4'] : 0;
        $p5 = isset($_POST['p5']) ? $_POST['p5'] : 0;
        $p6 = isset($_POST['p6']) ? $_POST['p6'] : 0;

      if ($p1 != 0)
        echo "Carta 1: ".$p1."<br>";
      if ($p2 != 0)
        echo "Carta 2: ".$p2."<br>";
      if ($p3 != 0)
        echo "Carta 3: ".$p3."<br>";
      if ($p4 != 0)
        echo "Carta 4: ".$p4."<br>";
      if ($p5 != 0)
        echo "Carta 5: ".$p5."<br>";
      if ($p6 != 0)
        echo "Carta 6: ".$p6."<br>";
        somarp($cartasp, $num, $p1, $p2, $p3, $p4, $p5, $p6);
        vencedor($totalP, $totalJ);
      

      } elseif ($acao == 'sortear'){
      mostrarCartas($cartas,$naipe);
    }

?>
</body>
</html>