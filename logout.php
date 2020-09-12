<?php
session_start();
session_destroy();
header('location:msignin.php');
include 'find_friends_fumction.php';
  ?>
