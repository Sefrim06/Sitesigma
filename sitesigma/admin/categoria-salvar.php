<?php

include_once '../includes/_banco.php';
include_once '../includes/_head.php';
if( isset($_GET['id']) empty($_GET['id'])){
    $id =$_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID" = ".$id";
    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
}else{
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
    $dados['Imagem'] = '';
}

include_once '_menu.php';
?>
<main>
    <h2>Adminstração das categorias</h2>
    <a href="categorias-lista.php">Listagem</a>
    <hr>
    <form action= "categoria-processa.php" method="post" enctype= "multipart/form-data">
        <input type="hidden" value="salvar" name="acao">
        <input type="text" value="<?php echo $dados['Imagem'];?>" name= "imagem">
        <input type="text" name="id" value="<?php echo $id;?>"><br>
        <label for="nome">Nome:</label><br>