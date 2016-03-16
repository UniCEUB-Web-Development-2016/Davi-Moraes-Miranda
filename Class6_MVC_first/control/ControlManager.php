<?php

include "UserController.php";
include "../view/LayoutManager.php";

$lm = new LayoutManager();
echo $lm->start();

$uc = new UserController();
$uc->registerUser($_POST["name"],$_POST["lastname"],$_POST["email"],$_POST["pass"],$_POST["date"]);