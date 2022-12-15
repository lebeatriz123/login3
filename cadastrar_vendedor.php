<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="estilo.css">
  <title>Cadastrar vendedor</title>
 </head>
 
<body class="bg-secondary p-2 text-dark bg-opacity-25">


<div class="row">
<div class="col">
<br>
<h1 class="my-5">Usuário Logado: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
<div class="col">
<br><br><br><br>
 <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
 </div>
</div>

<div class="container">
<h1> Cadastrar vendedor</h1>

<form>
<label for="exampleFormControlInput1" class="form-label">nome</label>
<select class="form-select" aria-label="Default select example">
  <option selected>digite seu nome</option>
  <option value="1">leticia</option>
  <option value="2">beatriz</option>
</select>

<div class="mb-3">
  <br>
  <label for="exampleFormControlInput1" class="form-label">sobrenome</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu sobrenome">
</div>

<div class="row">
<div class="col mb-3">
  <label for="exampleFormControlInput1" class="form-label">telefone</label>
  <input name="telefone" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite o Ano do Veículo">
</div>
<div class="col mb-3">
  <label for="exampleFormControlInput1" class="form-label">foto</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite a Marca">
</div>


<button type="submit"  class="btn btn-primary">Cadastrar</button>
</form>
</div>
</body>
</html>