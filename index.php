<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 id="home">Home</h1>
    <main>
        <br>
        <table>
        <thead>
            <td>name</td>
            <td>curso</td>
            <td>command</td>
        </thead>
        <tbody>
        <?php
        include("database.php");
        $users =  get_users();
        foreach($users as $user):?>
            <tr>
                <td><?=$user[1];?></td>
                <td><?=$user[3];?></td>
                <td>
                    <a class="vieButton" href="view?id=<?=$user[0]?>" >view</a>
                    <a class="updButton" href="update?id=<?=$user[0]?>" >update</a>
                    <a class="delButton" href="delete?id=<?=$user[0]?>">delete</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
        </table>
        <nav>
            <a href="/crud/insert">new</a>
        <nav>
    </main>
    
</body>
</html>