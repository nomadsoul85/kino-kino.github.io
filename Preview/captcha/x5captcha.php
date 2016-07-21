<?php
include("../res/x5engine.php");
$nameList = array("rux","kch","m75","ulu","yz8","kfj","cpj","hm2","2kn","8jg");
$charList = array("2","3","7","A","5","4","X","R","C","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
