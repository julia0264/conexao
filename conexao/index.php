<?php
$hostname = "localhost:33"; 
$nome = "root"; 
$senha = ""; 
$bancod = "db_turma63B";
$tabela = "produtos"; 
$colunas = "nome";  
$colunas2 = "sku"; 
$colunas3 = "informacoes"; 

$banco = mysqli_connect($hostname, $nome, $senha); 
mysqli_select_db($banco, $bancod); 
$query = "SELECT * FROM $tabela"; 
$r = mysqli_query($banco, $query); 

if($r){ 
    while($row = mysqli_fetch_array($r)){
        $nome = $row["$colunas"]; 
        echo "Nome:".$nome."<br/>"; 
        $sobrenome = $row["$colunas2"];
        echo "Marca:".$sobrenome."<br/>";
        $idade = $row["$colunas3"];
        echo "Informações:".$idade."<br/>";
    }
}
$dbshow = "SHOW DATABASES";
$showdb = mysqli_query($banco, $dbshow);
if($showdb){ 
    while($row = mysqli_fetch_array($showdb)){
        $Database = $row["Database"];
        echo"Database: ".$Database."</br>";
    }
}
?>