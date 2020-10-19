<?php
    $sql = "SELECT * FROM produtos";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_produto']."</td>";
            $resposta .= "<td>".$lh['categoria']."</td>";
            $resposta .= "<td>".$lh['fabricante']."</td>";
            $resposta .= "<td>".$lh['tela']."</td>";
            $resposta .= "<td>".$lh['processador']."</td>";
            $resposta .= "<td>".$lh['memoria_ram']."</td>";
            $resposta .= "<td>".$lh['hd']."</td>";
            $resposta .= "<td>".$lh['preco']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
      }
?>
