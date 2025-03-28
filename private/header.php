<?php
include '../controller/spanIcon.php';
include '../controller/interractivCard.php';
include '../controller/lang.php';
$nextLang = ($_SESSION['lang'] === 'da') ? 'en' : 'da';
$flag = ($nextLang === 'da') ? "🇩🇰 Dansk" : "🇬🇧 English";
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style/tailwindstyling.css">
  <link rel="icon" href="../assets/icons/icon.png">
  <title>Philip Jensen</title>
</head>

<body id="body" class="">
  <header class="sticky top-0 z-50 min-w-full w-fit bg-slate-800 flex justify-between">
    <div class="flex">
      <a href="../public/intro.php">
        <img src="../assets/icons/icon.png"
          alt="Siden logo PJ"
          class="w-14 p-2 md:mr-5">
      </a>

      <h1 class="text-white font-bold italic text-xl sm:text-2xl md:text-3xl self-center text-center">
        Philip Victor Jesnen
      </h1>
    </div>

    <div class="flex flex-row">
      <div>
        <a id="langButton"
          href="?lang=<?php echo $nextLang; ?>"
          class="w-14 h-14 flex items-center justify-center bg-slate-600 hover:bg-slate-900 hover:opacity-80">
          <img src="../assets/icons/flag-<?= ($_SESSION['lang'] === 'en') ? "dk" : "gb" ?>.png" alt="" class="w-14 h-full">
        </a>
      </div>

      <div>
        <button id="darkModeButton"
          onclick="toggleDarkMode()"
          class="w-14 h-14 flex items-center justify-center bg-slate-600 hover:bg-slate-900 opacity-60 hover:opacity-80">
          <img src="../assets/icons/DarkMode.png" alt="" class="w-14" id="lightModeImg">
        </button>
      </div>

      <div class=" w-fit bg-cyan-700 hover:bg-cyan-500">
        <button class="font-bold text-3xl md:text-3xl w-14 h-14 text-white flex justify-center items-center shrink"
          onclick="toggleVisabilaty()"
          onfocusout="closeMenu()"
          id="navButton">
          <box-icon name="menu" color="#ffffff" id="menuIcon1" size="48px"></box-icon>
          <box-icon name='chevron-down' color="#ffffff" id="menuIcon2" hidden size="48px"></box-icon>
        </button>

        <div class="flex flex-col bg-blue-100 dark:bg-slate-700 dark:text-white rounded-lg z-10 m-3 text-lg w-[80%] max-w-lg absolute right-0 collapse shadow-lg"
          id="menuToggle">
          <?php
          foreach ($translattion["header"]["nav"] as $n) { ?>
            <a href="<?= $n["link"] ?>" class="hover:bg-blue-300 dark:hover:bg-cyan-700 p-1 rounded-lg font-normal pl-3 pt-2">
              <?= $n["name"]; ?>
              <?php echo spanSwich($n["spanText"], $n["spanAffix"]); ?>
            </a>
          <?php }
          ?>
        </div>
      </div>


    </div>
  </header>
  <script src="../js/NavMenu.js"></script>
  <script src="../js/darkMode.js"></script>