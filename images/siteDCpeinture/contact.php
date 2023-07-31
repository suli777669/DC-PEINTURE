<?php 
    session_start();
    if(isset($_POST['envoye'])){
        //exytraction des variables
        extract($_POST);
        //verifications variables existantes et pas vides
        if(isset($email) && $email != "" &&
           isset($telnum) && $telnum != "" &&
           isset($nom) && $nom != "" &&
           isset($message) && $message != "" ){
            //envoyé l email
            $to = "damien.chaboche51200@gmail.com";
            $subject = "vous avez recu un massage de : " . $email;
            $message = "
            <p>Vous avez recu un message de " .$email. "</p>
            <p> nom : " .$nom. "</p>
            <p> numero de tel : " .$telnim. "</p>
            <p>message : " .$message. "</p>";
            $headers = "MIME-Version : 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <'.$emaail.'>' . "\r\n";

            $envoye = mail($to,$subject,$message,$headers);
            //verification de l envoi
            if($envoye){
                $_SESSION['succes_message'] = "message envoyé";
                
            }else {
                
                $info = "messaege pas délivré";
                
            }



            
        }else {
        //sik elles sont vides
        $info = "veuillez remplir tous les champs !";
        
    }
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- link Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- link file css -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="indexb">

<?php
    //afficher le message d erreur

    if(isset($info)){ ?>
        <p class="request_message" style="color:red">
            <?=$info?>
        </p>
    <?php
    }
?>

<?php
    //afficher le message de succes

    if(isset($_SESSION['succes_message'])){ ?>
        <p class="request_message" style="color:green">
            <?=$_SESSION['succes_message']?>
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

    <!-- formulaire contact -->

    <div class="containformcontact">
    <p class="request_message">
        Message envoyé !
    </p>
    <form action="" method="POST">
        <h2>Me contacter</h2>
        <label>Nom et prenom</label>
        <input type="text" name="nom">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Numero de telephone</label>
        <input type="number" name="telnum">
        <label>Message</label>
        <textarea name="message" cols="30" rows="10" required></textarea>
        <button name="envoye">Envoyé</button>
    </form>
    </div>

<!-- Footer -->

    <div class="content">
        
       
  
      <footer>
        <div class="content-footer">
          <div class="bloc footer-services">
            <h3>Services</h3>
            <ul class="services-list">
            <li><a href="index.html">Peintre en batiment</a></li>
              <li><a href="gallerie.html">Gallerie</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="mentionLegal.html">Mention legal</a></li>
            </ul>
          </div>
  
          <div class="bloc footer-contact">
            <h3> <a href="contact.php"> Contact</a> </h3>
            <p>06 70 10 01 21</p>
            <p>damien.chaboche51200@gmail.com</p>
            <p>6 rue de Picardie, Epernay 51200</p>
          </div>
  
          
  
          
        </div>
      </footer>
</body>
</html>