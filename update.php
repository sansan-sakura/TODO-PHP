<?php 

include('config/db_connect.php');
$isChecked=$todo['todoStatus']=="not-yet"? false:true;
$error='';
if(isset($_POST['todo'])){
    if(empty($_POST['todo'])){
        $error="Please write your todo 🦔";
    } else{
        $statusBool=mysqli_real_escape_string($conn,$_POST['status']);
        $status=$statusBool?"done":"not yet";

        $sql="INSERT INTO lists(status) VALUES('$status')";
        if(mysqli_query($conn,$sql)){
        header('Location: ./index.php');
        } else {
            echo "query error" . mysqli_error($conn);
        }
    }
}
?>
<?php if(!isset($todo['status'])):?>
<form method='POST' action="index.php">
 <input type="checkbox" name="status" checked="<?=$isChecked?>"/>
 <inout type="hidden" name="update_id" value="<?=$todo['id']?>"/>
</form>
<?php endif;?>