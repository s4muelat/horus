<?php
include("../geral/global.php");
session_start();
session_destroy();
header("Location: $dominio_ip_sistema/$dir_login");