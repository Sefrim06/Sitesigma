<?php

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';
?>

<div class = "container">
    <h2>Promoção</h2>
    <div class = "row mt-5">
        <?php
        $sql = "SELECT * FROM categorias WHERE Ativo = 1";

        $exec = mysqli_query($conn,$sql);
        $numProdutos = mysqli_num_rows($exec);
        while ($dados = mysqli_fetch_assoc($exec) ){
            echo '<h1>'.$dados['Nome'].'</h1>';
        }

for ($i = 0; $i <30 ; $i++) {
?>
        <div class = "card m-3" style = "width: 18rem;">
        <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class= "card-img-top" alt = "...">
        <div class = "card-body">
        <h5 class = "card-title"><?php echo $produtos[$i]['nome'];?></h5>
        <p class = "card-text"><?php echo $produtos[$i]['descricao'];?></p>
        <a href = "produto-detalhe.php?id=<?php echo $i;?>" class = "btn btn-primary">Comprar</a>

    </div>
</div>

            

    <?php
    }
    ?>
</div>
</div>