<?php
session_start();
exec('scripts/rm_project.sh' $_SESSION['projet'] $_SESSION['login'])
?>