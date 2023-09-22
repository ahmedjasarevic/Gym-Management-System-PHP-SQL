<?php 



require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $member_id = $_POST['member'];
    $trainer_id = $_POST['trainer'];

    $sql = "UPDATE members SET trainer_id = ? WHERE member_id = ?"
}