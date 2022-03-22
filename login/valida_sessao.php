<?php
session_start();
if(isset($_SESION['email']) && empty($_SESSION['email']) == false) {
    header("Location: sistema/");
} else {
    header("Location: aut.php");
}
