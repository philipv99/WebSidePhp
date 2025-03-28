<?php
include '../private/header.php';
include '../controller/contactInfo.php';
include '../controller/slideShow.php';
include '../controller/ArticleSection.php';
?>

<section class="w-full bg-gray-100 dark:bg-neutral-900 dark:text-white">
  <div class="container flex flex-col sm:flex-row mx-auto">
    <img src="../assets/img/photoshoot_dec_24_15.png"
      alt="sort hvid billed af mig philip selv"
      class="w-full sm:max-w-[50%] contrast-125">
    <div class="p-6 flex flex-col justify-center">
      <h2 class="text-4xl md:text-5xl font-semibold"><?= $translattion["welcome"]["header"] ?></h2>
      <h3 class="text-3xl md:text-5xl mb-2 text-cyan-500 font-semibold"><?= $translattion["welcome"]["underheader"] ?></h3>
      <p class="md:text-lg">
        <?= $translattion["welcome"]["text"] ?>
      </p>
    </div>
  </div>
</section>

<?php echo articleBlock($translattion["artickle"]["header"], $translattion["artickle"]["blog"]); ?>

<?php echo slideShow($translattion["introSlideShow"]); ?>

<section class="w-full bg-slate-200 dark:bg-neutral-900 dark:text-white">
  <div class="xl:w-full w-[98%] max-w-[1200px] mx-auto py-8 px-7 lg:px-3">
    <h3 class="mx-auto text-3xl md:text-5xl font-light mb-4">
      <?= $translattion["about"]["header"] ?>
    </h3>
    <div class="w-full mx-auto gap-y-4 gap-4 flex flex-wrap justify-center items-start">

      <?php
      foreach ($translattion["about"]["blogs"] as $article) {
      ?>
        <article class="bg-white w-full md:w-auto md:max-w-[31%] min-w-[100px] dark:bg-slate-800 shadow-xl p-4 rounded-xl">
          <h5 class="text-2xl border-b-[1px] mb-2 pb-2 border-cyan-600 dark:border-cyan-300">
            <?= $article["header"] ?>
          </h5>
          <p>
            <?= $article["text"] ?>
          </p>
        </article>
      <?php
      }
      ?>
    </div>
  </div>
</section>

<section class="w-full bg-[url(/assets/img/pic-bg-astec.jpg)] bg-center dark:text-white bg-cover">
  <div class="w-full h-full py-14 px-2 md:px-5">
    <div class="mx-auto max-w-[640px] lg:max-w-[1200px] backdrop-blur-md backdrop-saturate-125 py-4 px-2 md:py-5 md:px-5 rounded-lg lg:rounded-xl bg-neutral-100/20 dark:bg-slate-800/40 dark:text-white shadow-lg">
      <h3 class=" mx-auto text-3xl md:text-5xl font-light mb-2 border-b-2 border-cyan-600 pb-2">
        Mine Skills
      </h3>
      <div class="flex flex-wrap justify-center lg:justify-between md:px-0">
        <?php
        foreach ($translattion["skills"]["blogs"] as $skill) { ?>
          <div class="w-full flex py-4 border-b-[.5px] justify-center border-slate-400 lg:max-w-[45%]">
            <img src="<?= $skill["img"] ?>"
              alt=""
              class="rounded-lg shadow w-[30%] sm:max-w-[35%] md:max-w-[30%] clip aspect-square">
            <div class="pl-2 md:pl-4 max-w-sm flex flex-col justify-start">
              <h4 class="text-2xl border-l-2 pl-1 border-cyan-400">
                <?= $skill["header"] ?>
              </h4>
              <p class="pl-1 md:text-lg pr-3">
                <?= $skill["text"] ?> </p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>

  </div>
  </div>
</section>

<section class="py-6 bg-slate-100 dark:bg-slate-900">
  <div class="mx-auto max-w-[1200px] flex justify-between flex-wrap">
    <?php echo interractiveCard("../assets/img/photoshoot_dec_24_25 - Kopi.png", "F", "tecteenens ds fsd ds fs dsfsd sdf sdf")
    ?>
    <?php echo interractiveCard("../assets/img/photoshoot_dec_24_25 - Kopi.png", "header", "tecteenens ds fsd ds fs dsfsd sdf sdf")
    ?>
  </div>
</section>

<section class="py-6 bg-gradient-to-br from-sky-600 via-cyan-300 to-teal-500 dark:from-indigo-800 dark:via-purple-800 dark:to-rose-800">
  <div class="container lg:w-[90%] mx-auto dark:text-white my-3 p-4 w-full max-w-[1200px] lg:rounded-2xl backdrop-blur-xl shadow-2xl border-b-[2px] border-t-[1px] border-t-zinc-50/70 border-sky-700/60 dark:border-b-rose-800/70 bg-gradient-to-b from-zinc-100/60 to-zinc-300/60 to-70% dark:from-zinc-500/70 dark:to-zinc-700/60">

    <div class="flex flex-col sm:flex-row sm:even:flex-row-reverse border-b-[1px last:border-0 py-3">
      <div class="w-full min-w-[100px] max-w-[600px] relative top-0 left-0">
        <img src="<?= $translattion["kvolifications"]["design"]["bg-img"] ?>" alt=""
          class="w-full">

        <?php foreach ($translattion["kvolifications"]["design"]["imgs"] as $img) { ?>
          <img src="<?= $img["url"] ?>" alt=""
            class="<?= $img["style"] ?>">
        <?php } ?>
      </div>
      <div class="w-full min-w-[100px] sm:max-w-[55vw] sm:pl-4">
        <h3 class="text-4xl w-full mb-2 border-b-[1px] border-cyan-500 pb-3 mt-5"><?= $translattion["kvolifications"]["design"]["header"] ?></h3>
        <p> <?= $translattion["kvolifications"]["design"]["text"] ?> </p>
      </div>
    </div>

    <div class="flex flex-col sm:flex-row sm:even:flex-row-reverse border-b-[1px] border-gray-50 last:border-0 py-3">
      <div class="w-full min-w-[50px] max-w-[600px] relative top-0 left-0 mx-auto">
        <img src=" <?= $translattion["kvolifications"]["programming"]["bg-img"] ?> " alt=""
          class="w-full">

        <?php foreach ($translattion["kvolifications"]["programming"]["imgs"] as $img) { ?>
          <img src="<?= $img["url"] ?>" alt=""
            class="<?= $img["style"] ?>">
        <?php } ?>

      </div>
      <div class="w-full min-w-[100px] sm:max-w-[55vw] sm:pl-4 border-gray-100 my-3">
        <h3 class="text-4xl w-full mb-2 border-b-[1px] border-cyan-500 pb-3 mt-5"> <?= $translattion["kvolifications"]["programming"]["header"] ?> </h3>
        <p> <?= $translattion["kvolifications"]["programming"]["text"] ?> </p>
      </div>
    </div>
  </div>

  </div>
</section>

<?php echo contactInfo($translattion); ?>

<section class="py-7 pb-0 md:py-7 dark:bg-slate-900 dark:text-white">
  <div class="max-w-[1200px] mx-auto mt-8 mb-6 flex flex-col w-full px-2 sm:px-4 md:w-[95%]">
    <h4 class="text-4xl mb-2 font-light">
      <?= $translattion["photo"]["header"] ?>
    </h4>
    <p>
      <?= $translattion["photo"]["text"] ?>
    </p>
  </div>
  <div class="p-3 md:p-6 columns-3xs gap-y-2 space-y-4 gap-4 bg-gradient-to-br from-sky-700 via-cyan-500 to-sky-950 dark:from-purple-800 dark:via-indigo-500 dark:to-indigo-950 inset-shadow-sm inset-shadow-slate-900/50 mx-auto w-full md:rounded-3xl md:w-[95%] max-w-[1200px]">
    <?php foreach ($translattion["photo"]["photos"] as $p) { ?>
      <img src="../assets/img/photoSection/<?= $p ?>" alt=""
        class="rounded-2xl shadow-sm">
    <?php } ?>
  </div>
</section>

<script src="../js/showText_eventListner.js"></script>
<?php
include('../private/footer.php');
?>