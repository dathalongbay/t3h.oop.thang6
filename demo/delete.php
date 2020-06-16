<?php
if(isset($_GET["id"]) && ($_GET["id"] > 0) ) {
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->delete($_GET["id"]);
}

header("Location: list.php");
exit;
