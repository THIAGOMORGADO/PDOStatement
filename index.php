<?php
require 'usuario.php';
$u = new Usuarios();
$u -> atualizar("thiago2", "thiago_morgado@hotmail.com", "123", 1);