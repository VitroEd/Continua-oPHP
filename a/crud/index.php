<?php 
include("models/conexao.php");
include("views/blades/header.php");
?>

<a href="views/cadastro.php">Cadastrar</a>
<hr>
<table border="1">
    <tr>
        <td><b>Nome</b></td>
        <td><b></b></td>
        <td><b></b></td>
    </tr>

<?php
    $query = mysqli_query($conexao, "SELECT * FROM alunos ORDER BY codigo desc");
    while($exibe = mysqli_fetch_array($query)){
    $vogal = ($exibe[3]=="M")?"o":"a";
?>

<tr>
    <td><?php echo strtoupper($vogal) . " alun".$vogal ?>  se chama <b><?php echo $exibe[1] ?></b>. e mora na cidade de <?php echo $exibe[2] ?></td>
    <td><b>Editar</b></td>
    <td><b>Excluir</b></td>
</tr>

<?php } ?>

</table>

<?php
include("views/blades/footer.php");
?>