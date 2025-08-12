<?php

include 'db.php';

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
