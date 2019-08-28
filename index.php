<?php 
$fd = fopen("text.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fread($fd, 600));
    $arr = array($str);
    $my_array = explode(" ", $str);
    echo "Натиҷаи зарб: </br>";
    foreach($my_array as $myarr)
		{
			$opt = $myarr * 60;
		     echo $opt."<br />";
		     if ($myarr < 0){
		     	file_put_contents("neg.txt",  $opt,  FILE_APPEND);
		     }
		     else file_put_contents("pol.txt",  $opt,  FILE_APPEND);
		}
	echo "Натиҷаи тақсим: </br>";
    foreach($my_array as $myarr)
		{
			$opt = $myarr / 60;
		     echo $opt."<br />";
		      if ($myarr < 0){
		     	file_put_contents("neg.txt",  $opt,  FILE_APPEND);
		     }
		     else file_put_contents("pol.txt",  $opt,  FILE_APPEND);
		}
		echo "Натиҷаи ҷамъ: </br>";
    foreach($my_array as $myarr)
		{
			$opt = $myarr + 60;
		     echo $opt."<br />";
		      if ($myarr < 0){
		     	file_put_contents("neg.txt",  $opt,  FILE_APPEND);
		     }
		     else file_put_contents("pol.txt",  $opt,  FILE_APPEND);
		}
		echo "Натиҷаи тарҳ: </br>";
    foreach($my_array as $myarr)
		{
			$opt = $myarr - 60;
		     echo $opt."<br />";
		      if ($myarr < 0){
		     	file_put_contents("neg.txt",  $opt,  FILE_APPEND);
		     }
		     else file_put_contents("pol.txt",  $opt,  FILE_APPEND);
		}

}
fclose($fd);

 ?>
