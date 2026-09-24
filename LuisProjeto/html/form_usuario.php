
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar usuário</h2>
    <a href="index.php" class="btn btn-primary">Voltar</a> <br><br>

    <form action="salvar_usuario.php" method="POST" >
        Username: <br>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" > <br>
        Nome: <br>

        <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="addon-wrapping" > <br>
        Email: <br>

        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping"> <br>
        Senha: <br>

        <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="addon-wrapping"> <br>
        Foto: <br>
        <input type="file" name="foto" class="form-control" placeholder="Foto" aria-label="Foto" aria-describedby="addon-wrapping"> <br>
        <input  class="btn btn-primary" type="submit" value="Salvar Usuário">  

    </form>
</body>
</html>