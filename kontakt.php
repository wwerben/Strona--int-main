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

    <div
      class="w-full h-screen"
      style="background-image: url('img/main.webp'); background-size: cover"
    >
      <div class="h-screen flex justify-center items-center">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div
            class="absolute inset-0 bg-gradient-to-r from-blue1 to-blue1 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"
          ></div>
          <div
            class="text-white relative px-4 py-10 bg-blue2 shadow-lg sm:rounded-3xl sm:p-20"
          >
            <div class="text-center pb-6">
              <h1 class="text-3xl">Skontaktuj się z nami!</h1>

              <p class="text-gray-300">
                Uzupełnij poniższy formularz aby wyslać nam wiadomość
              </p>
            </div>

            <form action="https://fabform.io/f/{form-id}" method="post">
              <input
                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text"
                placeholder="Imię"
                name="name"
              />

              <input
                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="email"
                placeholder="Email"
                name="email"
              />

              <input
                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text"
                placeholder="Temat"
                name="_subject"
              />

              <textarea
                class="shadow mb-4 min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text"
                placeholder="Napisz swoją wiadomość..."
                name="message"
                style="height: 121px"
              ></textarea>

              <div class="flex justify-between">
                <input
                  class="shadow bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  type="submit"
                  value="Wyślij"
                />
                <input
                  class="shadow bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  type="reset"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="text-center lg:text-left">
      <div class="bg-blue2 p-4 text-center text-surface dark:text-white">
        © 2024 Copyright:
        <a href="index.html">Titanium Tower</a>
      </div>
    </footer>
  </body>
</html>
