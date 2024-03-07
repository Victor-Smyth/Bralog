<?php
$id=$_GET['id_prod'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/fevicon.png" type="">

<title> Bralog</title>
</head>
<body>


    <H3 style="margin-top:18%;" class="text-center">Confirmação para excluir produto</H3>
    <p class="text-center">Confirme se deseja excluir este produto!</p>

    <a class="btn btn-secondary" style=" margin-left:42%;" href="prod.php">Voltar</a>
    <a class="btn btn-success" style="margin-left:4%;" href="delete.php?id_prod=<?php echo $id; ?>">Confirmar</a>

    


   


    

</body>
</html>