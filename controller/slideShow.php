<?php
include_once 'lang.php';

function slideShow(array $slideShow)
{
  ob_start(); ?>

  <section class="bg-black w-full flex justify-between relative overflow-hidden h-[700px] sm:h-[600px]">

    <a class="opacity-30 hover:opacity-100 bg-gray-900/40 text-4xl py-4 px-1 md:px-4 absolute left-0 top-[38%] text-white border-[2px] border-l-0 border-zinc-400/60 hover:bg-cyan-400/70 transition-all cursor-pointer select-none z-30"
      onclick="plusSlides(-1)">&#10094;</a>

    <?php foreach ($slideShow as $slide) { ?>

      <div class="slide justify-center align-middle w-full h-fit bg-center bg-cover inset-shadow-slate-800/40 inset-shadow-sm hidden">
        <img src="<?= $slide["img"]; ?>" alt="" class="fade h-[700px] w- md:w-full">
        <div class="w-full flex justify-center items-center absolute top-5 md:top-0 h-[95%] max-h-[600px]">
          <div class="p-3 md:p-4 mx-auto w-[82%] h-fit max-w-[700px] bg-zinc-200 rounded-2xl shadow-md dark:bg-slate-800 dark:text-white z-20">
            <h3 class="pb-2 mb-2 border-b-[1px] border-cyan-600 text-3xl"><?= $slide["header"]; ?></h3>
            <p><?= $slide["text"]; ?></p>
          </div>
        </div>
      </div>

    <?php } ?>

    <a class="opacity-30 hover:opacity-100 bg-gray-900/40 text-4xl py-4 px-1 md:px-4 absolute right-0 top-[38%] text-white border-[2px] border-r-0 border-zinc-400/60 hover:bg-cyan-400/70 transition-all cursor-pointer select-none z-30"
      onclick="plusSlides(1)">&#10095;</a>
  </section>
  <div class="w-full h-[5px] bg-zinc-700 flex">
    <?php
    $countSlide = 1;
    foreach ($slideShow as $slide) { ?>
      <a class="hover:bg-cyan-600 w-full h-full slideBar cursor-pointer transition-all duration-300" onclick="currentSlide(<?= $countSlide ?>)"></a>
    <?php
      $countSlide++;
    } ?>
  </div>
  <script src="../js/slideshow.js"></script>
<?php
  return ob_get_clean();
}
