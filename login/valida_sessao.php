<?php

session_start();  

if(empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    header("Location: ../login");
} 
    

