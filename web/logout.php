<?php

//Quitar PHPSESSID
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), "", time() - 3600, "/");
}

// Limpiar Sessión
session_unset();


//Matar Sesión
session_destroy();

header("Location: index.php");
exit();
?>
