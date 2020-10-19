<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">   
    <title>Loja</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>

</head>
<body>
        <div class="style1">
            <div class = "logo">
                <img src="loja.png" width="90" height="90">
            </div>

           <h1>LOJA</h1>
        </div>

        <div class="style2">

            <ul>

                <li><a href="index.php?p=pf">Cadastrar Produto</a></li><br>
                <li><a href="index.php?p=pv">Ver Produtos</a></li><br>
                <li><a href="index.php?p=rv">Realizar venda</a></li><br>
                <li><a href="index.php?p=vv">Ver vendas</a></li>

            </ul>

        </div>

        <div class="style3" id="conteudo">
         <img src="loja_online.png" width="90" height="90">
            <?php

                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];

                }else{
                    $pagina = '';
                }
                if($pagina == 'pf'){
                    include "produto_form.html";

                }elseif($pagina == 'pv'){
                    include "produto_ver.php";

                }elseif($pagina == 'rv'){
                    include "venda_form.php";

                }elseif($pagina == 'vv'){
                    include "venda_ver.php";

                }
            ?>
        </div>
    
        <div class="rodape">
		    <h4>Aplicação Web</h4>
	    </div>
</body>
</html>