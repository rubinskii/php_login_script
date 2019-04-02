<nav>
  <a href="<?= $home_url; ?>">Мой сайт</a>
  <?php if($_SESSION['logged_in'] && $_SESSION['logged_in'] === true && $_SESSION['access_lvl'] === 'customer'){ ?>
    <a href="#"><?= $_SESSION['f_name']; ?><a>
    <a href="<?= $home_url; ?>logout.php">Выйти</a>
  <?php } ?>
  <?php else { ?>
    <a href="<?= $home_url; ?>login">Войти</a>
    <a href="<?= $home_url; ?>register">Зарегистрироваться</a>
</nav>