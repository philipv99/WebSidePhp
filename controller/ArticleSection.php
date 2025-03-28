<?php


function articleBlock(string $header, array $text)
{
  ob_start(); ?>
  <section class="bg-white dark:bg-gray-900 dark:text-white py-8 px-3">
    <div class="w-[95%] xl:w-full max-w-[1200px] mx-auto">
      <h2 class="font-light text-5xl mb-3 pb-3 border-b-[1px] border-cyan-500 w-fit">
        <?= $header ?>
      </h2>
      <div class="flex flex-wrap md:flex-nowrap space-x-9 space-y-10">
        <?php
        foreach ($text as $block) { ?>
          <p>
            <?= $block ?>
          </p>
        <?php }
        ?>
      </div>
    </div>
  </section>

<?php
  return ob_get_clean();
}
