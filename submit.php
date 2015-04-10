
    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once dirname(__FILE__).'/vendor/class.phpmailer.php';

    if( isset( $_POST ) ){
        
        $vaart              = $_POST['vaart'];
        $tochten            = $_POST['tochten'];
        $afvaartijd         = $_POST['afvaartijd'];
        $vaartdatum         = $_POST['vaartdatum'];
        $naamgroep          = $_POST['naamgroep'];
        $aantal_personen    = $_POST['aantal_personen'];
        $emailadres         = $_POST['emailadres'];
        $telefoon           = $_POST['telefoon'];
        $wensen             = $_POST['wensen'];
        $deluxe             = $_POST['deluxe'];
        $bol                = $_POST['bol'];
        $lunch              = $_POST['lunch'];
        $diner              = $_POST['diner'];
        $reservering        = $_POST['reservering'];
        
        $message .= "<p>Naam van vaart: {$vaart}</p>";
        $message .= "<p>Afvaartijd: {$afvaartijd}</p>";
        $message .= "<p>Vaartdatum: {$vaartdatum}</p>";
        $message .= "<p>Naam groep: {$naamgroep}</p>";
        $message .= "<p>Aantal Personen: {$aantal_personen}</p>";
        $message .= "<p>Emailadres: {$emailadres}</p>";
        $message .= "<p>Telefoonnummer: {$telefoon}</p>";
        $message .= "<p>Wensen: {$wensen}</p>";
        $message .= "<p>Deluxe: {$deluxe}</p>";
        $message .= "<p>Met Bossche Bol: {$bol}</p>";
        $message .= "<p>Lunch: {$lunch}</p>";
        $message .= "<p>Met Diner: {$diner}</p>";
        $message .= "<p>Soort Reservering: {$reservering}</p>";
        
        $mail = new PHPMailer();
        
        $mail->From = '';
        $mail->FromName = '';
       
        //Naar wie moet de mail gestuurd worden
        $mail->addAddress('wolthuis@nieuwerwets.tv');
        $mail->addReplyTo( $emailadres );
        
        $mail->isHTML( true );
        $mail->Subject = "{$vaart} op {$vaartdatum} naam: {$naamgroep}";
        $mail->Body= $message;
        
        if( !$mail->send() ){
            ?>
                <div class='niet_verzonden'>Er is een fout opgetreden met het versturen van uw boeking.</div>
                <div class='error'><? echo $mail->ErrorInfo; ?></div>
            <?php
        }
        else
           
             header("Location: /rederij-wolthuis-bevestiging-contact.html");
       
          
        }
    
#bertvanhouten@icloud.com
#info@rederijwolthuis.nl
?>
    
 
