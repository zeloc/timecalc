<html>
<head>
    <title>Time calc</title>

</head>
<body>
<?php
include 'timecalc.php';
$cutoff = '23:55';
$calc = new timecalc($cutoff);
$times = $calc->getTimeDiff();

echo 'Time now is: '.date('Y-m-d H:i:s');
echo '<br>';
echo 'cut off is: '.date($times['cutoffstr']);
echo '<br>';
echo $times['hrs'].' Hrs '.$times['mins'].' Mins '.$times['secs'].' Secs';

?>

</body>
</html>


