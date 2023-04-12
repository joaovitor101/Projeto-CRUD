<?php include("models/conexao.php") ?>
<?php include("views/blades/header.php"); ?>

<div class="container bg-light mt-5 pt-3 ps-3 pb-3 pe-3 rounded-4 shadow-lg">
    <a class="btn btn-success" href="views/cadastro.php">Cadastrar</a>
    <form action="index.php" method="post">
    <hr>
    <Input class="form-control" type="text" size="25" name="buscar">
    <hr>
    </form>
    <?php
    if(empty($_POST["buscar"])){ 
        echo "sem resultados";
    }
        else{ 
        $varBuscar =  $_POST["buscar"];
    ?>
     <!-- border já esta descontinuado  -->
    <table class="table table-bordered table-striped table-hover" width="500px">
        <tr>
            <td>Frase</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <?php
    
        $query = mysqli_query($conexao, "SELECT * FROM alunos where nome like '%$varBuscar%'");
        while ($exibe = mysqli_fetch_array($query)) {
            $vogal = ($exibe[3] == "M") ? "o" : "a"; //se $exibe 3a coluna for igual a M entao exiba O, senao exiba A
            ?>

            <tr>
                <td>
                    <?php echo strtoupper($vogal) . " alun$vogal <b> " . $exibe[1] . "</b> mora na cidade de <b>" . $exibe[2] . " </b>" ?>
                    <!-- exibir a primeira vogal (a ou o), depois mudar a ultima vogal do alunX e exibir o aluno na primeira coluna($exibe[1]) -->
                </td>
                <td><a class="btn btn-primary" href="views/cadastroAtualiza.php?id_aluno=<?php echo $exibe[0] ?>">Editar</a></td>
                <td><a class="btn btn-danger" href="controllers/deletar.php?id_aluno=<?php echo $exibe[0] ?>">Excluir</a></td>
            </tr>

        <?php } ?>
    </table>
    <?php } ?>
</div>

<?php include("views/blades/footer.php"); ?>
