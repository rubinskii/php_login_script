<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title><?php echo isset($page_title) ? $page_title : 'Мой сайт' ?></title>
</head>
<body>
<?php 
require_once 'nav.html.php';
if($page_title !== 'Войти')
{
  echo isset($page_title) ? : $page_title : 'Мой сайт';
}
?>

</body>
</html>