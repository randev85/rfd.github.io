 <?PHP

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "info@rajsfoodbank.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location:http://www.rajsfoodbank.co.uk");
    exit;
}

?>  
