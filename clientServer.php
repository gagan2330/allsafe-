
<?php
header("Access-Control-Allow-Origin: *");
$site=$_POST['url'];
$html = file_get_contents($site);
//echo $html;
$bytes=file_put_contents('markup.txt', $html);


$decision=exec("/Library/Frameworks/Python.framework/Versions/2.7/bin/python2 test.py $site 2>&1 ");
echo $decision;
?>
