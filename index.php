<?php

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';
?>

<div class = "container">
    <h2>Promoção</h2>
    <div class = "row mt-3">
        <?php
        $sql = "SELECT * FROM produtos WHERE Ativo = 1 ORDER BY RAND() LIMIT 3";

        $exec = mysqli_query($conn,$sql);
        $numProdutos = mysqli_num_rows($exec);
        while ($dados = mysqli_fetch_assoc($exec) ){
?>
        <div class = "card m-3" style = "width: 18rem;">
        <img src="./content/<?php echo $dados['Imagem'];?>" class= "card-img-top" alt = "...">
        <div class = "card-body">
        <h5 class = "card-title"><?php echo $dados['Nome'];?></h5>
        <p class = "card-text"><?php echo $dados['Descricao'];?></p>
        <a href = "produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>" class = "btn btn-primary">Comprar</a>

    </div>
</div>

            

    <?php
    }
    include_once './includes/_footer.php';
    ?>
</div>
</div>