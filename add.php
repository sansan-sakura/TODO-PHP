<?php
include('config/db_connect.php');
$error='';
if(isset($_POST['todo'])){
    if(empty($_POST['todo'])){
        $error="Please write your todo 🦔";
    } else{
        $todo=mysqli_real_escape_string($conn,$_POST['todo']);
        $sql="INSERT INTO lists(todo,todoStatus) VALUES('$todo','not-yet')";
        if(mysqli_query($conn,$sql)){
        header('Location: ./index.php');
        } else {
            echo "query error" . mysqli_error($conn);
        }
    }
}
?>

  <div class="py-10 ">
    <form action="index.php" method="POST" class="flex flex-col gap-4">
        <input type='text' name="todo" class="py-2 px-4 w-[350px]" />
        <button type="submit" class='uppercase text-white fonr-semibold bg-red-900 py-1 rounded-sm hover:bg-red-900/90 transition'>Add</button>
    </form>
    </div>