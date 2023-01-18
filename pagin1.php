<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
   $user = $_POST['numero']; 
   $password = $_POST['contrasena'];
   
   if(($name == "user") && ($password == "passwd")){
       header("Location:pagin2.php?login=true");
   }
}

?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
           <form method="post" action="pagin1.php">
               <input type="text" id="name">
               <input type="password" id="contrasena">
               <input type="submit" value="enter">
           </form>
    </body>
</html>



