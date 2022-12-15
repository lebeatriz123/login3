
<?php
$conexao = mysqli_connect("localhost", "root", "", "vendedor");

$tipo = $_POST['nome'];
$modelo = $_POST['sobrenome'];
$ano = $_POST['telefone'];
$marca = $_POST['foto'];

$sql_inserir = "insert into vendedor(nome,sobrenome,telefone,foto) values ('{$nome}', '{$sobrenome}', '{$telefone}', '{$foto}')";

mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);

echo "<script language='javascript' type='text/javascript'>alert('Vendedor cadastrado com sucesso!'); window.location.href='cadastrar_vendedor.php'</script>";

?>

