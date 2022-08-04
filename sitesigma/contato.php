<?php
// include do footer/
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';



if(isset( $_POST['txtNome']) ){
    $nome = strtoupper( $_POST['txtNome']);
    echo $nome;
}
if(isset( $_POST['txtTelefone']) ){
    $nome = strtoupper( $_POST['txtTelefone']);
    echo $nome;
}
if(isset( $_POST['txtEmail']) ){
    $nome = strtoupper( $_POST['txtEmail']);
    echo $nome;
}
?>

<h1>Contato</h1>

<form action ="./contato.php" method="post">
 <br>
    <label for = "txtNome">Nome Completo</label>
    <input type="text" name="txtNome" id="Nome">
    <input type="submit" value="Cadastro">
</form>
<form action ="./contato.php" method="post">
<br>
    <label for = "txtTelefone">Telefone</label>
    <input type="text" name="txtNome" id="Telefone">
    <input type="submit" value="Cadastro">
</form>
<form action ="./contato.php" method="post">
<br>    
    <label for = "txtEmail">E-mail</label>
    <input type="text" name="txtNome" id="E-mail">
    <input type="submit" value="Cadastro">
</form>

<?php
// include do footer
include_once './includes/_footer.php';
?> 