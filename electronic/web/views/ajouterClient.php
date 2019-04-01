<?PHP
include "../core/clientC.php";

if (isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp']) and isset($_POST['mdp2']) ){
$client1=new client($_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['email'],$_POST['date'],$_POST['numtel']);
$client1C=new clientC();
$client1C->ajouter($client1);


require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/OAuth.php';
require '../PHPMailer/POP3.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();;
// SMTP configuration
//$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'malek.mneri@esprit.tn';
$mail->Password = 'yoloswag98@';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('malek.mneri@esprit.tn','malek mneri' );


// Add a recipient
$mail->addAddress($_POST['email']);


// Add cc or bcc
//$mail->addCC('');
$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'compte cree!';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
//$mailContent = $numero3;
$mail->Body = 'nouveau compte cree dans nexshop';


// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

}else{
    echo 'Message has been sent';
   header('index.php');
}
session_start();
$_SESSION['email']=$_POST['email'];
header("location:index.php");
}

else{
	echo "vérifier les champs";
}

?>
