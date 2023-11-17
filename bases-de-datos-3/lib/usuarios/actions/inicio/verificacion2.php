<?php
session_start();

$roles_permitidos=['administrador', 'usuarios'];

if(!array_key_exists('rol',$_session) || !in_array($_session['rol'],$roles_permitios)){
    header("location: index.php");
}