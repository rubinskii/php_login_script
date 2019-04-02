<?php
// set err reportion lvl
error_reporting(E_ALL);

// start sess
session_start();

// default time zone for all date/time func
date_default_timezone_set('Europe/Moscow');
// home page url
$home_url = 'http://127.0.0.1/php_log0n_script/';
// page in url param, default = 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;
// number of records displayed per page
$rec_per_page = 3;
// calc val for query LIMIT clause
// from what rec will be displayed results
$from_rec_num = ($page * $rec_per_page) -  $rec_per_page;
