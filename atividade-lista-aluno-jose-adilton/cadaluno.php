<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
   
  <form method="GET" action="crudaluno.php">
    <label for="">nome aluno</label>
     <input type="text" name="nomealuno"><br>
     
     <label for="">idade</label>
     <input type="text" name="idade"> <br>

     <label for="">data de nascimento</label>
     <input type="date" name="datanascimento"> <br>

     <label for="">endereço</label>
     <input type="text" name="endereco"> <br>
     
   <!--  <label for="">status</label>
     <input type="text" name="estatus"> -->
     
      <label for="">STATUS</label>
        <select id="" name="estatus">
            <option value="Aprovado">Aprovado</option>
            <option value="Reprovado">Reprovado</option>
   
      </select>

     <input type="submit" name="cadastrar" value="cadastrar">
     </form>

     <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>