<?php

    if(isset($_POST['campo_cliente'])){

        $cliente = $_POST['campo_cliente'];

        $telefone = $_POST['campo_telefone'];

        $cpf = $_POST['campo_cpf'];
        
        $endereco = $_POST['campo_endereco'];
        
        $funcionario = $_POST['campo_funcionario'];
        
        $produto = $_POST['campo_produto'];
        
        $modelo = $_POST['campo_modelo'];

        $venda = $_POST['campo_data'];

        $preco = $_POST['campo_preco'];

        $sql = "INSERT INTO vendas(cliente,telefone,cpf,endereco,funcionario,produto,modelo,data_venda,preco)VALUES('$cliente','$telefone','$cpf','$endereco','$funcionario','$produto','$modelo','$venda','$preco')";

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