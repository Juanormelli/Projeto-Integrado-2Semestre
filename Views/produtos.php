<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/P.I/public/styles/form.css">
    <link rel="stylesheet" href="/P.I/public/styles/tables.css">
    
    <?php include "header.php";
    
    ?>
    <title>Cadastro de produtos</title>
</head>
<body>
    <div class="page-landing">
        <div class="title-page">
            <h1 class="page-title">Cadastro de produtos</h1>
        </div>

        <form action="cadastrar-produtos.php" method="post">
            <div class="campos">
                <label for="">Codigo do produto</label>    
                <input class="input-block" type="text" name="cdg-produto" >
            </div>
            <div class="campos">
                <label for="">Nome do Produto</label>    
                <input class="input-block" type="text" name="nome-do-produto" >
            </div>
            <div class="campos">
                <label for="">Preço</label>    
                <input class="input-block-price" type="price" name="preço" >
            </div>
            <div class="campos">
                <label for="">Unidade</label>    
                <input class="input-block" type="text" name="unidade" >
            </div>
            
            <button class="filter-button"type="submit" name="btnAdcProduto"> Filtrar </button>
            

        </form>

        <table class="table-set">
        <tr class="table-header">
            
            <td>Codigo Produto</td>
            <td class="name">Nome Produto</td>
            <td>Preço</td>
            <td>Unidade de medida</td>
            

        </tr>

        <?php 
        include "produtos-view.php";?>



        </table>
        
    </div>