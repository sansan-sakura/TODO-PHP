<?php

if(isset($_POST['todo'])){
    
}

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
    <div>
      <p>TODO's</p>
     <div></div>
    </div>
    <div class="py-10 ">
    <form action="index.php" method="POST" class="flex flex-col gap-4">
        <input type='text' name="todo" class="py-2 px-4 w-[350px]" />
        <button type="submit" class='uppercase text-white fonr-semibold bg-red-900 py-1 rounded-sm hover:bg-red-900/90 transition'>Add</button>
    </form>
    </div>
    </main>
</body>
</html>