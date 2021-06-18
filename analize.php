<?PHP

$Id = $_POST['id'];
$hour = $_POST['hour'];
$minute = $_POST['minute'];
$Ip = $_POST['ip'];

echo $Id; 
echo $hour;
echo $minute;
echo $Ip;

echo 'okey Let s go . ';

$file = fopen('filename.txt' , 'a') or die ("File Error !");
$txt = '{'.strval($Id).','.strval($hour).','.strval($minute).','.strval($Ip).'}';


fwrite($file , $txt);
fwrite($file , "\n");
fclose($file);
?>
