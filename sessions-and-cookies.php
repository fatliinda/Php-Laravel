<?php

    setcookie('name','Me',time()+60,'/');
    var_dump($_COOKIE);

    if(isset($_COOKIE['name'])){

        echo "your name is {$_COOKIE['name']}";
    }
   
    session_start();
    echo session_id();
    $_SESSION['counter']??=0;
    $_SESSION['counter']++;


?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>You have visited this page<?php echo $_SESSION['counter']?>times</h1>

</body>

</html>
