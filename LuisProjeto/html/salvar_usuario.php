<?php 

require_once 'conexao.php';

    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "INSERT INTO tb_livro (nome, genero, ano, foto, id_autor) VALUES (?, ?, ?, ?, ?, )";  

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssss', $username, $nome, $matricula, $email, $senha);

      $nome_arquivo = $_FILES['foto']['name'];
    $caminho_temporario = $_FILES['foto']['tmp_name'];

    //pegar a extensão do arquivo
    $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    //gerar um novo nome
    $novo_nome = uniqid() . "." . $extensao;

    // lembre-se de criar a pasta e de ajustar as permissões.
    $caminho_destino = "fotos/" . $novo_nome;

     mysqli_stmt_close($comando);

    header("Location: index.php");
?>