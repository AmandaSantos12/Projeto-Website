$(document).ready(function () {
    $("#conteudo").on('submit','#frmProduto', function (e) {
      e.preventDefault();
       var formulario = $(this).serialize();
       $.ajax({
       type: "post",
       url: "ins_produto.php",
       data: formulario,
       dataType: "text",
       success: function (response) {
   
        if(response == "ok"){
   
$('#frmProduto').each (function(){
       this.reset();
       });
       alert("Produto inserido com sucesso!");
       }else{
       alert(response);
        }
       }
    });
});
 
$('#conteudo').on('click','#btn_bscProdutos',function(e){
        e.preventDefault();
        $.ajax({
             type: "post",
             url: "busca_produto.php",
             data: "buscar",
             dataType: "text",
             success: function (response) {
                 $('#tblProdutos').html(response);
             }
         });
    });

    $('#conteudo').on('focus','#cmpCat',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "categoria_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpCat').html(response);
            }
        });
    });

    $('#conteudo').change('focus','#cmpFab',function(e){
      e.preventDefault();
        $.ajax({
            type: "post",
            url: "fabricante_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpFab' ).html(response);
            }
        });
    });
});




$(document).ready(function () {
            $("#conteudo").on('submit','#frmVenda', function (e) {
              e.preventDefault();
               var formulario = $(this).serialize();
               $.ajax({
               type: "post",
               url: "ins_venda.php",
               data: formulario,
               dataType: "text",
               success: function (response) {
           
                if(response == "ok"){
           
            $('#frmVenda').each (function(){
               this.reset();
               });
           
            alert("Venda inserida com sucesso!");
               }else{
               alert(response);
               }
               }
               });
               });
              });

$(document).ready(function () {
$("#conteudo").on('click','#btn_bscVendas', function (e) {
    e.preventDefault();
        $.ajax({
        type: "post",
        url: "busca_venda.php",
        data: "busca",
        dataType: "text",
            success: function (response) {
                 $('#tblVendas').html(response);
            }
        });
    });
});

