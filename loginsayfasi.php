<?php

$email = $_POST['email'];
$password = $_POST['password']; 




if($email == "g211210091@sakarya.edu.tr"){
    if($password == "g211210091"){
        sleep(2);
        echo '<h2>Hoşgeldiniz g211210091! <a href="index.html"> Buraya tıklayarak anasayfaya gidebilirsiniz. </a></h1>';
        
    }
    else {
        
        
        header("Location: login.html");
        
    }
} 

else {
         
    header("Location: login.html");
}


?>