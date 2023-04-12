<?php include("blades/header.php") ?>
<div class="container bg-light pt-2 mt-5 p-3 rounded-4 shadow-lg">
<h3 class="p-3">Cadastrar</h3>
<form action="../controllers/cadastrar.php" method="post">
    <label class="form-label" >Nome</label>
    <input class="form-control" type="text" name="alunoNome"><br>
    <label class="form-label" >Cidade</label>
    <input class="form-control" type="text" name="alunoCidade"><br>
    <label class="form-label">Sexo</label>
    
    <input type="radio" name="alunoSexo" value="M">Masculino
    <input type="radio" name="alunoSexo" value="F">Feminino 
    <br>

    <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
</form>
</div>
<?php include("blades/footer.php") ?>