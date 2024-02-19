<?php
include('config/db_connect.php');

$sql='SELECT todo, created_at, id FROM lists ORDER BY created_at';
$result=mysqli_query($conn, $sql);
$todos=mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP TODO</title>
</head>
<body>
    <main class="bg-red-100 min-h-screen min-w-screen flex items-center flex-col pt-10 text-gray-800">
        <h1 class="text-3xl font-semibold text-red-800 ">PHP TODO</h1>
  
        <?php
         error_reporting(E_ALL);     
        ini_set('display_errors', '1');
          require "$_SERVER[DOCUMENT_ROOT]/todo/add.php";  ?>  
    <div class="w-[350px]">
      <p class="font-bold text-lg text-grey-600 text-center">TODO </p>
      <ul class="flex flex-col gap-4">
      <?php foreach( $todos as $todo):?>
        <li class="flex justify-between">
            <h3><?=$todo['todo']?></h3>
           
        <?php
         error_reporting(E_ALL);     
         ini_set('display_errors', '1');
         require "$_SERVER[DOCUMENT_ROOT]/todo/update.php";  ?>  

        </li>
      <?php endforeach;?>
      </ul>
    </div>
    </main>
</body>
</html>