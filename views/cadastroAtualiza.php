<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

<?php
$varIdAluno = $_GET["id_aluno"];
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = $varIdAluno ");
while ($exibe = mysqli_fetch_array($query)) {
    ?>
<div class="container bg-light pt-2 mt-5 p-3 rounded-4 shadow-lg">
    <h3 class="p-3">Atualizar</h3> 
    <form action="../controllers/atualizar.php" method="post">
        <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>"><br>
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
        <label class="form-label">Cidade</label>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
        <label class="form-label">Sexo</label>

        <input type="radio" name="alunoSexo" value="M" <?php echo ($exibe[3] == 'M') ? 'checked' : "" ?>>Masculino
        <input type="radio" name="alunoSexo" value="F" <?php echo ($exibe[3] == 'F') ? 'checked' : "" ?>>Feminino<br>

        <input class="btn btn-primary mt-3" type="submit" value="Atualizar">
    </form>
</div>    
<?php } ?>
<?php include("blades/footer.php") ?>