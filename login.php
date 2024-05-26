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
      session_start();
    ?>
    <div
      class="w-full h-screen"
      style="background-image: url('img/main.webp'); background-size: cover"
    >
    
      <div class="h-screen flex justify-center items-center">
        <div
          class="bg-white mx-4 p-8 rounded shadow-md w-full md:w-1/2 lg:w-1/3 "
        >
          <h1 class="text-3xl font-bold mb-8 text-center">Panel logowania</h1>
          <form action="index.php?action=login" method="post">
          
            <div class="mb-4">
              <label class="block font-semibold text-gray-700 mb-2" for="email">
                Adres E-mail
              </label>
              <input
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="email" name="email" required id="email"
              />
            </div>
            <div class="mb-4">
              <label
                class="block font-semibold text-gray-700 mb-2"
                for="password"
              >
                Hasło
              </label>
              <input
                class="border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                type="password" name="pass" required id="pass"
              />
              <a
                class="text-gray-600 hover:text-blue-700 flex justify-center"
                href="forgotpassword.html"
                >Zapommniałeś hasła?</a
              >
              <a
                class="text-gray-600 hover:text-blue-700 flex justify-center"
                href="register.html"
                >Zarejestruj się</a
              >
            </div>
            <div class="flex justify-center">
            <input type="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Zaloguj">
              
            </div>
          </form>
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
