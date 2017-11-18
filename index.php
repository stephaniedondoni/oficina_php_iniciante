
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php
            $a = 1;
            $b = 3;
            /*
            $frutas = array("maça", "laranja","morango");
            foreach($frutas as $fruta){
              echo "A fruta é $fruta <br>";
            }
            */
      
            $comidas = array("purê", "salada", "macarrão");      
            foreach($comidas as $comida){
              echo $comida."<br>";              
            }
      
            array_push($comidas, "sopa de cebola");
            foreach($comidas as $comida){
              echo $comida."<br>";              
            }
      
            array_pop($comidas);      
            foreach($comidas as $comida){            
            echo $comida."<br>";
            }
            /*
            $cores = ["vermelho", "azul"];
            echo $cores[0];
             /*
            $pessoa = ["nome" => "Ana", "idade" => 23];
            echo $pessoa["idade"];
             /*
            $numeros = [1, 2, 3];
            array_push($numeros, 4);
            echo $numeros[3];
      
            /*
            function soma($a, $b){
              $r = $a + $b;
              return $r;
            }
            $n1 = 7;
            $n2 = 8;
            $rF = soma ($n1, $n2);
            echo $rF;
      
            /*
            function soma($a, $b){
              $resultado = $a + $b;
              return $resultado;              
            }
      
            $numero1 = 23;
            $numero2 = 20;
          
            $resultadoFuncao = soma($numero1, $numero2);
            echo $resultadoFuncao;
      
      
      
      
            /*
            $nome = "Felipe";
            switch ($nome){
              case "Ana":
                echo "Olá Ana";
                break;
              case "Pedro":
                echo "Olá Pedro";
                break;
              default:
                echo "Não sei quem é você";
            }
      
      /*
            $i =1;
            while($i < 10){
             
             /* $resultado = $i%2;
              if($resultado==0):
             */  /*
              if($i%2 ==0):
              echo "O número é par: {$i} <br> ";   //pode usar {}  ou nada   Ex.    {$i}  $i
              else:
              echo "O número é impar: {$i} <br> ";
              endif;    
              
               $i = $i + 1;
               
            }
      
      /*
            
      /*
      
            $i = 1;
            while($i < 10){
              $i = $i + 1;
              echo $i."<br>";
            }
            
      
      
            //Quando usa : endif  = elseif        - Quando usa {} = else if
            if($a > $b):
              echo "A é maior que B";
            elseif($a < $b):
              echo "A é menor que B";
            elseif($a == $b):
              echo "A é igual a B";
            else:
              echo "A é diferente de B";
            endif; 
      
      
      /*
      
            
            $soma = $a + $b;
            $subtracao = $a - $b;
            $divisao = $a / $b;
            $multiplicacao = $a * $b;
            $modulo = $a % $b;
            echo "Resultado da Soma: {$soma}<br> Resultado da Subtração: {$subtracao} <br> Resultado da Divisão: {$divisao}";  //com {}
            echo "<br> Resultado da Multiplicação: ".$multiplicacao."<br> Resultado do Módulo: ".$modulo; //com concatenação
            
          // ver esta função .sprintf. print_r('Resultado da Soma: {} Resultado da Subtração: {}'.format($soma, $subtracao));
            */
           
            
        ?>

    </body>
</html>