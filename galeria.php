<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Tailwind Starter</title>
    <script src="./scripts.js"></script>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body class="font-sans overflow-auto scrollbar-hide">
  <?php 
    require_once 'header.php';
  ?>

    <h1 class="text-4xl font-bold text-center mt-36 mb-0">Galeria</h2> 
    <div class="grid grid-cols-3 gap-2 mt-6 ml-8 mr-8 bg-blue1 bg-transparent">
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/bar1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/offer1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/bar1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/offer1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/bar1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/offer1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/bar1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/offer1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/bar1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/offer1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/bar1.jpg" alt="" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-3xl" src="img/offer1.jpg" alt="" />
      </div>
    </div>
    <div class="h-10"></div>
    <footer class="text-center lg:text-left">
      <div class="bg-blue2 p-4 text-center text-surface dark:text-white">
        © 2024 Copyright:
        <a href="index.html">Titanium Tower</a>
      </div>
    </footer>
  </body>
</html>
