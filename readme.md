Simple login script using sessions

object - controllers

controllers/User.php
responsible for CRUD users

config/core.php
place for common vars like home url, pagination etc

login_check.php
used to identify logged in/not logged in. if not and usr tries to view a page for logged in usr - redirect to login page. if logged in user tries to access login page - redirect to dashboard