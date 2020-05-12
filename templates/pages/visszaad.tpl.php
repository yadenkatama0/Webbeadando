<?php
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
?>

<div class=wrapper>
    <p><b>Neve: </b><?php echo $name?><br>
    <b>E-mail címe: </b><?php echo $email?><br>
    <b>Üzenete: </b><br><?php echo $msg?></p>
</div>