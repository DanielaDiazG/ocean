<?php

    include("BD/db.php");

    if(isset($_POST['save']))
    {
        $id = $_POST['identificacion'];
        $name = $_POST['nombres'];
        $lastname = $_POST['apellidos'];
        $age = $_POST['edad'];

        $query = "INSERT INTO estudiantes(id, name, lastname, age, status) VALUES ('$id', '$name', '$lastname', '$age', 'Activo')";

        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        $_SESSION['message'] = 'El Alumno se ha guardado con éxito';
        $_SESSION['message_type'] = 'success';

        header('Location: index.php');
    }

?>