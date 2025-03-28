<?php
// tamplete small round span info 
function spanSwich(string $text, string $affix)
{
  switch ($affix) {
    case "alert":
      return spanIcon_alert($text);
    case "info":
      return spanIcon_info($text);
    case "danger":
      return spanIcon_danger($text);
    default:
      return;
  }
}

function spanIcon_alert(string $text)
{
  ob_start(); ?>
  <span class="text-xs text-white tracking-wide bg-yellow-500 dark:bg-yellow-600 py-0.5 px-2 rounded-xl shadow relative top-[-10px] right-[3px]">
    <?php echo htmlspecialchars($text); ?>
  </span>
<?php
  return ob_get_clean();
}

function spanIcon_info(string $text)
{
  ob_start(); ?>
  <span class="text-xs text-white tracking-wide bg-blue-500 dark:bg-blue-400 py-0.5 px-2 rounded-xl shadow relative top-[-10px] right-[3px]">
    <?php echo htmlspecialchars($text); ?>
  </span>
<?php
  return ob_get_clean();
}

function spanIcon_danger(string $text)
{
  ob_start(); ?>
  <span class="text-xs text-white tracking-wide bg-red-500 dark:bg-red-500 py-0.5 px-2 rounded-xl shadow relative top-[-10px] right-[3px]">
    <?php echo htmlspecialchars($text); ?>
  </span>
<?php
  return ob_get_clean();
}


?>