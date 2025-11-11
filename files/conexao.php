<?php

define("USUARIO", "root");
define("SENHA", "");
define("DB", "to_do_list");
define("SERVER", "localhost");

$conexao = mysqli_connect(SERVER,USUARIO, SENHA,DB);

