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


  <div class="w-full h-screen flex justify-center items-center" style="background: white;">
    <!-- Lewa kolumna --> 
    <div class="w-1/4 flex flex-col space-y-4 pr-4 mr-4 ml-4">
        <a href="profil.html"><button type="button" class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Moje konto</button></a>
        <a href="myreservation.html"><button type="button" class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Moje rezerwacje</button></a>
        <a href="payments.html"><button type="button" class="w-full  text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Płatności</button></a>
        <a href="logout.html"><button type="button" class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Wyloguj</button></a>
    </div>
    <!-- PRAWA KOLUMNA -->
    <div class="w-full flex flex-col space-y-4">
        <div class="flex flex-wrap justify-center pr-10">
          <h1 class="text-3xl font-bold text-center mb-8">Karty płatnicze</h1>
            <div class="w-full md:w-1/3 px-3 mb-6 flex flex-col items-center"> <!-- Dodana klasa flex flex-col items-center -->
                <p class="text-center uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Imię i nazwisko posiadacza karty</p>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name"></label>
                <input class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 flex flex-col items-center"> <!-- Dodana klasa flex flex-col items-center -->
                <p class="text-center uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Numer karty</p>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email"></label>
                <input class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-email" type="text" placeholder="">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 flex flex-col items-center"> <!-- Dodana klasa flex flex-col items-center -->
                <p class="text-center uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Data ważności</p>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-datebirth"></label>
                <input class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="datebirth" type="number" placeholder="MM/RR">
            </div>
        </div>
        <div class="flex justify-center space-x-4">
            <a href="#"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-6 py-2.5 mr-4">Edytuj</button></a>
            <a href="#"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-6 py-2.5">Zapisz</button></a>
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
