
 
 <!DOCTYPE html>
 <html lang="pl">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      text-align:center;
    }
  </style>
 </head>
 <body>
 <?php
$bazaDanych = "logowanie";
$laczeniZBaza = mysqli_connect('localhost', 'root', '',$bazaDanych);
if(!$laczeniZBaza){
 echo 'Błąd z połączeniem z bazą danych';
}else{
  echo "Połączono z bazą danych".' '.$bazaDanych.' , ';
}


$pobieranieLogin = $_POST['inputLogowanie'];
$pobieranieHaslo = $_POST['inputHaslo'];

$trescZapytania = "INSERT INTO logowanie.rejestracja(`id`,`Login`,`Hasło`,`wiek`) VALUES('','$pobieranieLogin','$pobieranieHaslo','33');";


if(mysqli_query($laczeniZBaza,$trescZapytania)){
  echo "Dodano nowy rekord";
} else{
  echo "Błąd w treści zapytania: " . $trescZapytania . " , " . mysqli_error($laczeniZBaza);
}
mysqli_close($laczeniZBaza);
/*


if($laczeniZBaza = false){
  echo 'Probelm z połączeniem do bazy';
}
   $trescZapytania = "INSERT INTO `rejestracja`(`id`, `Login`, `Hasło`, `wiek`) VALUES ('',$pobieranieLoginu,$pobieranieHasla,'');"
mysqli_close($laczeniZBaza); 
 $zapytanieDoBazy = mysqli_query($laczeniZBaza,"INSERT INTO `rejestracja`(`id`, `Login`, `Hasło`, `wiek`) VALUES ('','Koks134','yoo12345','25')");
*/
  ?>     

<h1>Jesteś adminem strony i masz Dostęp do wszystkich danych w bazie danych:</h1>
<?php



$laczeniZBaza2 = mysqli_connect('localhost', 'root', '','logowanie');
$zapytanieDoBazy1 = "SELECT * FROM `rejestracja`";
if ($tablica = mysqli_query($laczeniZBaza2, $zapytanieDoBazy1)) {
  // Fetch one and one row
  while ($row = mysqli_fetch_row($tablica)) {
    
    echo '<table>'.'<tr>'.'<td>'.'ID:'.'</td>'.'<td>'.'login:'.'</td>'.'<td>'.'Hasło:'.'</td>'.'<td>'.'wiek:'.'</td>'.'</tr>'.'<tr>'.'<th>'.$row[0].'</th>'.'<th>'.$row[1].'</th>'.'<th>'.$row[2].'</th>'.'<th>'.$row[3].'<th>'.'</tr>'.'</table>'; 
  }
  mysqli_free_result($tablica);
}
mysqli_close($laczeniZBaza2);
?>
 </body>
 </html>
 
 
 
