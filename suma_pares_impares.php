<html>
    <body>
            <?php
            $num=rand(1,100);
            $par=0;
            $impar=0;
            for ($c=0;$c<=$num;$c++){if (($c%2)==0){$par=$par+$c;}else{$impar=$impar+$c;}}
            echo "El numero aleatorio es: ",$num,"<br>";
            echo "La Suma de Pares es : ",$par,"<br>";
            echo "La suma de Impares es: ",$impar,"<br>";
            echo "La suma de Pares e Impares es: ",($par+$impar),"<br>";
            ?>
    </body>
</html>