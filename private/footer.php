</body>

<footer class="bg-slate-800 px-4 lg:mx-0">
  <div class="py-[4rem] px-3 container max-w-[1000px] mx-auto text-white flex flex-col justify-between md:flex-row">

    <div class="w-full flex justify-center flex-col mb-3">
      <h1 class="font-light text-4xl pb-4">
        <?= $translattion["footer"]["header"] ?>
      </h1>
      <p class="max-w-full">
        <?= $translattion["footer"]["text"] ?>
      </p>
    </div>

    <div class="w-full md:w-2xl flex items-center justify-end">
      <a href="#menuToggle" class="w-52 h-12 rounded-xl shadow-lg items-center my-auto bg-cyan-500 text-xl flex justify-center
       hover:bg-cyan-700 transition-colors">
        <?= $translattion["footer"]["button"] ?>
      </a>
    </div>

  </div>
</footer>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</html>