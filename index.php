<?php

include "bootstrap/init.php";
//use Hekmatinasser\Verta\Verta;
//$v = new Verta();
//echo($v->datetime());
# connect to db and get tasks
$tasks = getTasks();
include "tpl/tpl-index.php";