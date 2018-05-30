<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

deleteEntity("project", $id);

header("location: index.php");