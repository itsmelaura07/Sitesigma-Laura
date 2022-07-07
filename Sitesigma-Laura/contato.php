<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
if (isset($_POST['txtNome'])) {
    $nome = ($_POST['txtNome']);
}
if (isset($_POST['txtemail'])) {
    $email = ($_POST['txtemail']);
}
if (isset($_POST['txtfone'])) {
    $tel = ($_POST['txtfone']);
}
if (isset($_POST['txtmsg'])) {
    $msg = ($_POST['txtmsg']);
}
?>
<h1>Contato</h1>
<form action="./contato.php" method="post">
<div class="container">
<ul class="cadastro">
    <li>
    <label for="txtNome">Nome Completo:</label>
<input type="text" name="txtNome" id="txtNome">
    </li>
    <li>
    <label for="txtemail">Email:</label>
<input type="text" name="txtemail" id="txtemail">
    </li>
    <li>
    <label for="txtfone">Telefone:</label>
<input type="text" name="txtfone" id="txtfone">
    </li>
    <li>
    <label for="txtmsg">Mensagem:</label>
<input type="text" name="txtmsg" id="txtmsg">
    </li>
</ul>
<input type="submit" value="Enviar">
</div>
</form>
<?php
echo "$nome <br> $email <br> $tel <br> $msg";
?>
<?php
// include do footer
include_once './includes/_footer.php';
?>