<?php

function interractiveCard(string $imgUrl, string $header, string $text)
{
  ob_start(); ?>
  <div class=" flex flex-col mx-auto w-[90%] max-w-md dark:text-white shadow-xl my-2 rounded-2xl overflow-hidden">
    <img src="<?= $imgUrl ?>" alt="">
    <div class="bg-slate-50 dark:bg-slate-700/50 w-full h-fit flex flex-col dark:text-white shadow-2xl p-4" id="hidbox">
      <h4 class="text-2xl border-b-[0.5px] border-cyan-900 dark:border-cyan-400 pb-1 mb-1"><?php echo htmlspecialchars($header); ?></h4>
      <p><?php echo htmlspecialchars($text); ?></p>
    </div>
  </div>
<?php
  return ob_get_clean();
}
