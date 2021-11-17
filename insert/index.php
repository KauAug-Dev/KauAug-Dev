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
    <h1 id="home">insert</h1>
    <nav>
        <a href="/crud">home</a>
    <nav>
    <br>
    <div id="form">
    <form action="insert.php" method="post">
        <fieldset><br>
        <label for="name">name</label>
        <input type="text" name="name" id="name"></br>

        <label for="email">email</label>
        <input type="email" name="email" id="email"></br>

        <select name="curso">
            <option value="edificações">edificações</option>
            <option value="informática" selected>informática</option>
            <option value="alimentos">alimentos</option>
        </select>
        
        <fieldset>
            <legend>sexo</legend>
        <input type="radio" name="sexo" id="sexo_m" value="M">
        <label for="sexo_m">masculino</label></br>
        <input type="radio" name="sexo" id="sexo_f" value="F">
        <label for="sexo_f">feminino</label></br>
        </fieldset>

        <br>
        <input type="submit" value="ok">
        </fieldset>
    </form>
    </div>

</body>
</html>