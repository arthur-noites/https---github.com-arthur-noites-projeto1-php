<?php 
    
echo "<h1>Painel administrativo</h1>";


echo "<a href='?pg=clientes-admin'>Listar Clientes</a>";
echo " | ";
echo "<a href='?pg=clientes-form'>Cadastrar Clientes</a>";

echo "<br>"; 


echo "<a href='?pg=produtos-admin'>Listar Produtos</a>";
echo " | ";
echo "<a href='?pg=produtos-form'>Cadastrar Produtos</a>";
      

echo "<hr>"; 
if(empty($_SERVER['QUERY_STRING'])){
    echo "<h3>Bem-vindo ao painel admin.</h3>";
}else{
    $pg = $_GET["pg"];
    include_once "$pg.php";
}

?>