<?php
//This script is created by hotwebtools.com
//You can remain use this free service as long as you retain the credit link
//As we had spent hours on building this script for you, please respect our effort
//Thank you --- David Ausman 'Hotwebtools.com'

$mymail = 'lukesdrummingskillz@hotmail.co.uk';
$cc = 'Form submitted from your website';
$BoDy = ' ';
$FrOm = 'FROM:' .$_POST['t1'];
$FrOm .= 'Reply-To:' .$_POST['t1'];
$FrOm .= 'X-MAILER: PHP'.phpversion();
$BoDy .= 'Name: ';
$BoDy .= $_POST['t1'];
$BoDy .= "\n";
$BoDy .= 'Email Address: ';
$BoDy .= $_POST['t2'];
$BoDy .= "\n";
$BoDy .= 'Suggestion: ';
$BoDy .= $_POST['t3'];
$BoDy .= "\n";
$send = mail("$mymail", "$cc", "$BoDy", "$FrOm");
///Redirect user to your homepage....
if($send)
{
echo '<html><head>';
echo '<meta http-equiv="refresh" content="0;URL=https://pacific-shore-3730.herokuapp.com/thank_you.html">';
echo '</head><body>Email send....';
echo '</body></html>';
}
?>
