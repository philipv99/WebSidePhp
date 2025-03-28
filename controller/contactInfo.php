<?php
include_once 'lang.php';

function contactInfo(array $trans)
{
  ob_start(); ?>
  <section class=" bg-gray-50 dark:bg-slate-900 dark:text-white z-10 bg-[url(/assets/img/bg-img-blosom.jpg)]">
    <div class="w-full h-full bg-sky-600/70 dark:bg-slate-800/90 py-8 lg:px-4 backdrop-blur-sm">
      <div class="container max-w-[1200px] bg-white/30 py-6 px-2 md:px-6 lg:rounded-2xl mx-auto flex flex-col shadow-2xl"
        id="#contact">
        <div class="flex flex-col justify-center text-center border-b-[1px] border-cyan-400 dark:border-cyan-600 mb-7">
          <h2 class="text-5xl font-light mb-3"><?= $trans["contact"]["header"] ?></h2>
          <p class="text-xl mb-4"><?= $trans["contact"]["text"] ?></p>
        </div>

        <?php foreach ($trans["contact"]["socials"] as $socials) { ?>

          <a class="px-1 flex items-center group" href="<?= $socials["link"] ?>">
            <img src="../assets/img/<?= $socials["img"] ?>" alt=""
              class="rounded-full w-[20%] md:w-[15%] z-20 group-hover:z-50 absolute shadow-lg group-hover:ml-4 group-hover:outline-1 outline-white transition-all max-w-[100px] md:max-w-[140px]">
            <div class="my-4 md:my-6 ml-8 pl-[15%] md:pl-[15%] pr-[5%] w-full flex flex-col md:flex-row justify-between lg:group-hover:pl-[35%] lg:group-hover:pr-[30%] rounded-2xl p-1 md:p-5 relative text-white tracking-wider shadow group-hover:outline-1 outline-white transition-all <?= $socials["css"] ?>">
              <p class="text-2xl"><?= $socials["name"] ?></p>
              <p class="text-xl md:text-2xl"><?= $socials["id"] ?></p>
            </div>
          </a>

        <?php } ?>

      </div>
    </div>
  </section>
<?php
  return ob_get_clean();
}
