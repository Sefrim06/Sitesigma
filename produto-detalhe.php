<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';
$id = $_GET['id'];

?>
<div class = "container">
    <div class = "col">
             <h1><?php echo $produtos ['nome'];?></h1>
             <h1><?php echo $produtos ['descricao'];?></h1>
             <h1><?php echo $produtos ['preco'];?></h1>
             <img src ="./content/<?php echo $produto ['imagem']?>">
             <h4>R$ <?php echo $produtos['preco'];?></h4>
   </div>
</div>
<div class = "row">
    <div class = "col">Voltar</div>
    <div class = "col">
</div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>