<?php
function connect_db(){
    try{
        $db = new mysqli(
        "localhost",
        "root", 
        "",
        "data_base"
        );
        return $db;
    }catch (Exception $erro){
        return $erro->getMessage();
    }    
}

function get_users(){
    $db = connect_db();

    $result = $db->query("select * from user");
    
    mysqli_close($db);    

    return $result->fetch_all();
}

function get_user(){
    $id = $_GET["id"];

    $db = connect_db();

    $query = $db->prepare("select * from user where id=?");
    $query->bind_param("i", $id);
    $query->execute();

    $result = $query->get_result();

    mysqli_close($db);    

    return $result->fetch_all()[0];
}

function set_user(){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];
    $sexo = $_POST["sexo"];

    $db = connect_db();

    $query = $db->prepare("insert into user (nome, email, curso, sexo) values (?,?,?,?)");
    $query->bind_param("ssss", $name, $email, $curso, $sexo);
    $query->execute();

    mysqli_close($db); 
}

function delete_user(){
    $id = $_GET["id"];

    $db = connect_db();

    $query = $db->prepare("delete from user where id=?");
    $query->bind_param("i", $id);
    $query->execute();

    mysqli_close($db); 
}

function update_user(){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];
    $sexo = $_POST["sexo"];
    $id = $_POST["id"];

    echo $name ,$email, $curso ,$sexo, $id;

    $db = connect_db();

    $query = $db->prepare("update user set nome=?, email=?, curso=?, sexo=? where id=?");
    $query->bind_param("ssssi", $name ,$email, $curso ,$sexo, $id);
    $query->execute();

    mysqli_close($db); 
}
