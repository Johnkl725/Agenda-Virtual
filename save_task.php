<?php 
include("db.php");
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "INSERT INTO task(titulo, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query); //Esta es la consulta a la base de datos
    if(!$result){
        die("Ha fallado");
    }else{
        $_SESSION['message'] = 'Tarea guardada exitosamente';
        $_SESSION['message_type'] = 'success'; //Esto es para el color del mensaje [success, danger, warning, info, primary, secondary, light, dark
        header("Location: index.php");
    }
}
?>