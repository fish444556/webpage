<?php
// multiple recipients
// $to  = 'fish444555@gmail.com' . ', '; // note the comma
// $to .= 'fish444555@gmail';

// subject

require 'pdfcrowd.php';
require 'PHPMailer/class.phpmailer.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("fish444555", "54440c35e4ffb16f059eef5898c7d2da");

    // convert a web page and store the generated PDF into a $pdf variable
    // $pdf = $client->convertURI('http://www.me.mtu.edu/~jialinl/result.html');
    // $out_file = fopen("document.pdf", "wb");
    // echo "create pdf";
    // echo $client->convertURI('http://www.me.mtu.edu/~jialinl/result.html', $out_file);
    // fclose($out_file);

    // set HTTP response headers
    // header("Content-Type: application/pdf");
    // header("Cache-Control: max-age=0");
    // header("Accept-Ranges: none");
    // header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    

    // send the generated PDF 
    // echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}




// $subject = 'Birthday Reminders for August';
// $pdf = $client->convertHtml("<head></head><body>My HTML Layout</body>");
// echo "<pre>";
$to = $_POST['email'];
// echo $val;
// echo "</pre>";
echo $to;

$email = new PHPMailer();
$email->From      = 'test@example.com';
$email->FromName  = 'fish';
$email->Subject   = 'Message Subject';
$email->Body      = "result";
$email->AddAddress( $to);

$file_to_attach = 'result.pdf';

$email->AddAttachment( $file_to_attach , $out_file );


// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
echo "   Thank you " . $first_name . " " . $last_name . " for your requisition.";

$email->Send();
// echo "<h2>PHP is Fun!</h2>" . "fdsfdsfds";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.";

// message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
// mail($to, $subject, $message, $headers);
?>