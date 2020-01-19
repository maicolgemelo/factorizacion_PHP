<?php

    if(isset($_POST["calcular"])){

    $numero = $_POST["txtnumero1"];
    
              
       if($numero == ""){
           echo "debes diligenciar el campo.";
       exit;
       }

      function factorial($numero){
        $factorial = 1;
        $contador = 1;

        while($contador <= $numero){
            $factorial *= $contador;
            $contador++;
        }

        return $factorial;

    }

        for($indice =1;$indice<=$numero;$indice++){

        echo"Factorial de ". $indice ." es: ". factorial($indice) . "<br/>";
        }
    }
?>