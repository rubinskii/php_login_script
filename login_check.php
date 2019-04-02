<?php
// check for access lvl = customer
//if lvl not admin - redirect to login page
if(isset($_SESSION['access_lvl']) && $_SESSION['access_lvl'] == 'admin')
{
  header("Location: {$home_url}admin/index.php?action=logged_in_as_admin");
}
// if $require_login set and its vas =  true
else if(isset($require_login) && require_login === true)
{
  // if not logged in yet - redir to login page
  if(!isset($_SESSION['access_lvl']))
  {
    header("Location: {$home_url}login.php?action=please_login");
  }
}
// if login, signup or register, but usr already logged in
else if($isset($page_title) && ($page_title === 'Login' || $page_title === 'Sign Up'))
{
  // if usr not logged in yet - redir to login
  (if(isset($_SESSION['access_lvl']) && $_SESSION['access_lvl'] === 'customer'))
  {
    header("Location: {$home_url}index.php?action=already_logged_in")
  }
}
// else
// {

// }