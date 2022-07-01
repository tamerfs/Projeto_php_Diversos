<?php
    include "servicos/conexao.php";
?>

<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
        <title>FORMULARIO DE INSCRIÇÃO</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width-device-widht, initial-scale=1"> 
</head>

<body>


<nav class="menu">
         <ul class="navbar">
             <li><a href ="./index.php">Home</a></li>
            </ul>
</nav>
</br>


<h2>Busca de Personagens</h2>

<form action="">
    <input name="q" value= "<?php if(isset($_GET['q'])) echo $_GET['q'];?>" placeholder="Insira o que pretende buscar" type="text">
    <button type="submit">Pesquisar</button>
</form>

<table width= "900px" border="1">
    <tr>
        <th>nome</th><th>idade</th><th>personagem</th><th>classe</th><th>raça</th><th>objetivo</th><th>sexo</th>
    </tr>

<?php
    if (!isset($_GET['q'])) {
?>
    <tr>
        <td colspan="7">Digite algo para pesquisar</td>
    </tr>
<?php
    } else {
        $pesquisa = $mysqli->real_escape_string($_GET['q']); 
        // tratamento contra SQL injection $mysqli->real_escape_string()
        $sql_code = "SELECT * FROM personagens WHERE name LIKE '%$pesquisa%' OR personagem LIKE '%$pesquisa%' OR classe LIKE '%$pesquisa%' OR raça  LIKE '%$pesquisa%' OR idade  LIKE '%$pesquisa%'";
        // % busca % tras na busca qualquer palavra ou charset que tenha a busca no meio, começo ou final ou precida LIKE dela.
    
        $sql_query = $mysqli->query($sql_code) or die ("error ao consultar o db " . $mysqli->error);
        // faz a consulta no banco de dados com $sql_code ou se der erro ela sai e da o erro.   
        
        if ($sql_query->num_rows == 0) {  // se a pesquisa feita nao retornar nada, ou seja 0 linhas/rows faça isso
?>            
        <tr>
            <td colspan="4">Nada encontrado em sua pesquisa</td>
        </tr>    
<?php        
        } else {
            while($dados = $sql_query->fetch_assoc()){ // enquanto houver dados associados na pesquisa faça...
        ?>            
        <tr>
            <td><?php echo $dados['name'];?></td>
            <td><?php echo $dados['idade'];?></td>
            <td><?php echo $dados['personagem'];?></td>
            <td><?php echo $dados['classe'];?></td>
            <td><?php echo $dados['raça'];?></td>
            <td><?php echo $dados['objetivo'];?></td>
            <td><?php echo $dados['sexo'];?></td>
        </tr> 
    
<?php } } }?>  
    

</table>


</body>
</html>
