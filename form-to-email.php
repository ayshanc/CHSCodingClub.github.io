<?php
if(!isset($_POST['submit']))
{
    echo "Error. You need to submit the form."
}
$name = $_POST['name'];
$pronouns = $_POST['pronoun'];
$email = $_POST['semail'];
$grade = $_POST['grade'];
$advisor = $_POST['advisor'];
$unit = $_POST['unit'];
$availability = $_POST['avail'];
$fee = $_POST['fee'];
$interest = $_POST['inter'];
$learn = $_POST['flang'];
$extra = $_POST['extra'];
$python = $_POST['python'];
$java = $_POST['java'];
$javascript = $_POST['javascript'];
$HTML = $_POST['html'];
$Cpp = $_POST['cpp'];
$Chash = $_POST['ch'];
$Swift = $_POST['swift'];
$R = $_POST['r'];
$otherlanguages = $_POST['other'];

if(empty($name)||empty($pronouns)||empty($email)||empty($grade)||empty($advisor)||empty($unit)||empty($availability)||empty($fee)||empty($interest)||empty($learn)||empty($python)||empty($java)||empty($javascript)||empty($HTML)||empty($Cpp)||empty($Chash)||empty($Swift)||empty($R))
{
    echo "Please fill all fields (Extra Information and Other Languages are OPTIONAL)";
}

$email_from = 'ayshan1257@gmail.com';
$email_subject = "New Form Submission";
$email_body = "New Coding Club Information Participation Form Submission from $name.\n".
    "pronouns: $pronouns email: $email grade: $grade advisor: $advisor unit: $unit availability: $availability fee: $fee interest: $interest learn: $learn extra: $extra python:$python java: $java javascript: $javascript HTML: $HTML C++: $Cpp C#: $Chash swift: $Swift R: $R otherlanguages: $otherlanguages.\n".
$to = "ayshan1257@gmail.com";
$headers = "Form Submission; from: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
?>