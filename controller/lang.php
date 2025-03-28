<?php

session_start();

// gemmer stroget valgt
if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
  setcookie('lang', $_GET['lang'], time() + (86400 * 10), "/");
}

// setter standard sprog til dasnk
if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'da';
}

// indlæs sprog
$lang = $_SESSION['lang'];
include '../assets/lang/' . $lang . '.php';
