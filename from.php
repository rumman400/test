<!--
<?php
    
    if(isset($_POST['btn']))             // php er code. eta mainly from tekey data sob recive kore
    {
       $username = $_POST['user_name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];

    }

?>
-->

 <!DOCTYPE html>                <!---html er code . maney html diey basic from design kora holo.-->           
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My From</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="from(2).php" method="POST">
        <label>Username</label><br>
        <input type="text" name="user_name"><br>
        <label>Email</label><br>
        <input type ="text" name="email"><br>
        <label>Phone</label><br>
        <input type="number" name="phone"><br>
        <br>
        <input type="submit" value="submit data" name="btn">
    </form>

    <!--
    <h3>Username : <?php  if(isset($username))             // from tekey recive kora data ei html coe dara show kora holo.
    {
        echo $username;
    }    
    ?></h3>
    <h3>Email : <?php  if(isset($username)) {echo $email ;}  ?></h3>
    <h3>Phone :  <?php  if(isset($phone)) {echo $phone ;}  ?></h3>
--> 

</body>
</html>