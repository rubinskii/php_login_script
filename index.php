<?php
require_once 'config/Database.php';

$db = new Database();
$dbc = $db->get_conn();