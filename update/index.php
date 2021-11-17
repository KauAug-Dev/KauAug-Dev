<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 id="home">update</h1>
    <nav>
        <a href="/crud">home</a>
    <nav>
    <br>
    <div id="form">
    <form action="update.php" method="post">
        <?php
        include("../database.php");
        $user = get_user($_GET['id']);
        ?>
        <input type="hidden" name="id" value="<?=$_GET['id']?>" >
        <fieldset><br>
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="<?=$user[1];?>"></br>

        <label for="email">email</label>
        <input type="email" name="email" id="email" value="<?=$user[2];?>"></br>

        <select name="curso" >
            <option value="edificações" <?php if($user[3] == "edificações"){echo "selected";}?>>edificações</option>
            <option value="informática" <?php if($user[3] == "informatica"){echo "selected";}?>>informática</option>
            <option value="alimentos" <?php if($user[3] == "alimentos"){echo "selected";}?>>alimentos</option>
        </select>
        
        <fieldset>
            <legend>sexo</legend>
        <input type="radio" name="sexo" id="sexo_m" value="M" <?php if($user[4] == "M"){echo "checked";}?>>
        <label for="sexo_m">masculino</label></br>
        <input type="radio" name="sexo" id="sexo_f" value="F" <?php if($user[4] == "F"){echo "checked";}?>>
        <label for="sexo_f">feminino</label></br>
        </fieldset>

        <br>
        <input type="submit" value="ok">
        </fieldset>
    </form>
    </div>

</body>
</html>