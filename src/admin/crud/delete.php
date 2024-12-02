<?php
require '../../../conexion/conexion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Eliminar el anuncio de la base de datos
    $sql = "DELETE FROM anuncios WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        header("Location: ../main.php");
        exit();
    } else {
        echo "Error al eliminar el anuncio: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}
?>
