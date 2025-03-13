
//Nota esquecida
<?php
   $a = 80;
   $b = 50;
   
   $m = ($a + $b)/2;
   
   echo $m;
 ?>

-----------------------------------------------------------------
-----------------------------------------------------------------
//Altura mínima
<?php 
 $altura_carlitos = 100;
 $n_brinquedos = 6;
 $altura_brinquedos = [200, 90, 100, 123, 120, 169];
 $pode_ir_no_brinquedo = 0;
 
 for($i = 0; $i < $n_brinquedos; $i++){
     if($altura_carlitos >= $altura_brinquedos[$i]){
         $pode_ir_no_brinquedo++;
     }
 }
 
 echo $pode_ir_no_brinquedo;
 ?>

-----------------------------------------------------------------
-----------------------------------------------------------------

//Guardando enfeites
<?php
 $entrada = "3
 1 15 37
 42 8 25
 77 2 1";
$linhas = explode("\n", trim($entrada));
 
 $n = intval(array_shift($linhas)); 
 $confianças = []; // Matriz de confiança
 
 foreach ($linhas as $linha) {
     $confianças[] = array_map('intval', explode(" ", trim($linha)));
 }
 
 $enfeites = range(1, $n);
 
 usort($enfeites, function ($a, $b) use ($confianças) {
     return max($confianças[$b - 1]) <=> max($confianças[$a - 1]);
 });
 
 echo "Ordem final dos enfeites: " . implode(" ", $enfeites) . PHP_EOL;
 ?>
-----------------------------------------------------------------
-----------------------------------------------------------------

//Teleférico -2
<?php 
 $c = 10;
 $a = 25;
 
 $capacidade_real = $c - 1;
 
 $viagens = intval($a / $capacidade_real);
 
 if ($a % $capacidade_real != 0) { 
     $viagens++;
 }
 
 echo $viagens . PHP_EOL;
 ?>