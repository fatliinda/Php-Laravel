<?php
        include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>



   
<?php
    $p=new Person("Fatlinda",19);
    echo $p->getPerson();

    $h=new House("Prizren",5);
    $h->getHouse();


?> 


</body>
</html>