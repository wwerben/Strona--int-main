<?php

require_once '../db.php';

// Połączenie z bazą danych
$db = dbConnect();

// Pobieranie danych użytkowników

$query = 'SELECT * FROM user WHERE role = "worker"';
$result = $db->query($query);
$users = [];
if ($result->num_rows > 0) {
    $users = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple Tailwind Starter</title>
  <script src="./scripts.js"></script>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
</head>

<body class="font-sans overflow-auto scrollbar-hide">
<?php 
    require_once 'header.php';
  ?>


  <div class="flex h-screen">
   <?php require_once 'adminnav.php'?>
    <div class="container p-4 w-full mt-28">
        <h1 class="text-2xl font-bold mb-4">Lista Użytkowników</h1>
        <table class="border-collapse border border-slate-600 w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-slate-600">ID</th>
                    <th class="py-2 px-4 border-slate-600">E-mail</th>
                    <th class="py-2 px-4 border-slate-600">Imię</th>
                    <th class="py-2 px-4 border border-slate-600">Nazwisko</th>
                    <th class="py-2 px-4 border border-slate-600">Numer Telefonu</th>
                    <th class="py-2 px-4 border border-slate-600">Region</th>
                    <th class="py-2 px-4 border border-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                         <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                    </th>
                    <th class="py-2 px-12 border border-slate-600">  Rejestracja  </th>
                    <th class="py-2 px-12 border border-slate-600">  Edytowany  </th>
                    <th class="py-2 px-4 border border-slate-600"></th>
                    <th class="py-2 px-4 border border-slate-600"></th>
            
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users) && count($users) > 0): ?>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['ID']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['email']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['firstName']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['lastName']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['phoneNumber']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['region']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['verified'] ? 'Tak' : 'Nie') ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['createdat']) ?></td>
                        <td class="py-2 px-4 border border-slate-600"><?= htmlspecialchars($user['updatedat']) ?></td>
                        <td class="py-3 px-5 border border-slate-600">
                          <a href="index.php?action=editWorker&id=<?= htmlspecialchars($user['ID']) ?>" class="bg-blue-600 text-white py-2 px-3 rounded-md font-medium">Edytuj</a>
                        </td>
                        <td class="py-2 px-5 border border-slate-600">
                          <a href="index.php?action=deleteWorker&id=<?= htmlspecialchars($user['ID']) ?>" class="bg-red-600 text-white font-medium rounded-md py-2 px-3" onclick="return confirm('Czy na pewno chcesz usunąć tego użytkownika?')">Usuń</a>
                        </td>
                     
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td class="py-2 px-4 border-b" colspan="10">Brak użytkowników.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
        </div>
                </div> 
    </main>
    </div>
    </div>
  </div>
  
  


  <footer class="text-center lg:text-left mt-2">
    <div class="bg-blue2 p-4 text-center text-surface dark:text-white">
      © 2024 Copyright:
      <a href="index.html">Titanium Tower</a>
    </div>
  </footer>
</body>
</html>
