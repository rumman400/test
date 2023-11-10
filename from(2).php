<?php
    
    if(isset($_POST['btn']))             // php er code. eta mainly from tekey data sob recive kore
    {
       $username = $_POST['user_name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];

    }

?>
<h3>Username : <?php  if(isset($username))             // from tekey recive kora data ei html coe dara show kora holo.
    {
        echo $username;
    }    
    ?></h3>
    <h3>Email : <?php  if(isset($username)) {echo $email ;}  ?></h3>
    <h3>Phone :  <?php  if(isset($phone)) {echo $phone ;}  ?></h3>