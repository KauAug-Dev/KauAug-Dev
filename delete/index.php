<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 id="home">delete</h1>
    <br>
    <main>
    <div class="view">
    <br>
    <p>deseja deletar o item <strong><?=$_GET['id']?></strong>?</p>
    <br>
    </div>
    <a class="updButton" href="../">no</a>
    <a class="delButton" href="delete.php?id=<?=$_GET['id']?>">yes</a>
</main>
    
</body>
</html>