<?php 

include('config/db_connect.php');
$error='';
if(isset($_POST['todo'])){
    if(empty($_POST['todo'])){
        $error="Please write your todo 🦔";
    } else{
        $todo=mysqli_real_escape_string($conn,$_POST['todo']);
        $sql="INSERT INTO lists(todo) VALUES('$todo')";
        if(mysqli_query($conn,$sql)){
        header('Location: ./index.php');
        } else {
            echo "query error" . mysqli_error($conn);
        }
    }
}
?>

<form method='POST' action="index.php">
 <input type="checkbox" name="status"/>
 <inout type="hidden" name="update_id" value="<?=$todo['id']?>"/>
</form>