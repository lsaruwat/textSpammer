<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
//var_dump( mail("19702703575@mms.att.net","My subject",$msg) );
var_dump( mail("9702703575@txt.att.net","My subject",$msg) );
?>