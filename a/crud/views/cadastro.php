<?php 
include("blades/header.php");
?>

<form action="../controllers/cadastrarAluno.php" method="post">
    <label>Nome</label><br>
    <input type="text" name="alunoNome"><br>
    <label>Cidade</label><br>
    <input type="text" name="alunoCidade"><br>
    <label>Sexo</label><br>
    M<input type="radio" name="alunoSexo" value="m">
    F<input type="radio" name="alunoSexo" value="f">
    <input type="submit" value="Cadastrar">
</form>

<?php
include("blades/footer.php");
?>