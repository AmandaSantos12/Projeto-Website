<?php

    if(isset($_POST['campo_categoria'])){

        $categoria = $_POST['campo_categoria'];

        $fabricante = $_POST['campo_fabricante'];

        $modelo = $_POST['campo_modelo'];

        $tela = $_POST['campo_tela'];

        $processador = $_POST['campo_processador'];

        $ram = $_POST['campo_ram'];

        $hd = $_POST['campo_hd'];

        $preco = $_POST['campo_preco'];

        $sql = "INSERT INTO produtos(categoria,fabricante,modelo,tela,processador,memoria_ram,hd,preco)VALUES('$categoria','$fabricante','$modelo','$tela','$processador','$ram','$hd','$preco')";

        include "conexao.php";

        if (mysqli_query($con, $sql)) {
       
        echo "ok";
       
        }else{
       
        echo "Erro: " . $sql . "<br>" . mysqli_error($con);
       
        }
       
        mysqli_close($con);
       
       
       
        }else{
       
        echo "erro";
       
        }
?>