<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 id="home">view</h1>
    <nav>
        <a href="../">home</a>
    </nav>
    <?php
    include("../database.php");
    $user = get_user();
    ?>
    <div class="view">
        <br>
        <p><strong># : </strong><?=$user[0]?></p>
        <p><strong>nome : </strong><?=$user[1]?></p>
        <p><strong>email : </strong><?=$user[2]?></p>
        <p><strong>curso : </strong><?=$user[3]?></p>
        <p><strong>sexo : </strong><?=$user[4]?></p>
    </div>
    
</body>
</html>