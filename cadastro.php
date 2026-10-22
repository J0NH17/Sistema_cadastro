<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['aluno'];
    $curso = $_POST['curso'];

    require("conexao.php");

    $inserir = "INSERT INTO matricula (nome,curso) VALUES ('$nome','$curso')";

    if (mysqli_query($conexao, $inserir)) {

        echo "
        <script>

        alert('Cadastro Realizado com sucesso!');
        window.location.href = 'cadastro.php';
        
        </script>";
        exit();
    } else {
        echo "
        <script>

        alert('Erro ao cadastrar:" . mysqli_error($conexao) . "';
        window.history.back();
        
        </script>";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section class="container mx-5rem card mx-auto ">

        <h2>Cadastro de Curso</h2>

        <form method="post" action="">
            <label>Nome: </label>
            <input type="text" name="aluno"> <br>

            <label>Curso: </label>
            <input type="text" name="curso"> <br>

            <button type="reset">Limpar</button>
            <button type="submit">Cadastrar</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>
</body>

</html>