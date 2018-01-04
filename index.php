<?php
  //Le but de la feature est de proc' en php procédural (à défaut de savoir le faire en objet), la fameuse clock de Fibonacci (https://www.kickstarter.com/projects/basbrun/fibonacci-clock-an-open-source-clock-for-nerds-wit?lang=fr)

  //Pour le site SHOT, il faudra juste get la date/heure de publication de l'article et remplacer le contenu des variables.
  date_default_timezone_set("Europe/Paris");
  $amorpm = date("a");
  $hour = date("g");
  $minute = date("i");
  $minute = $minute / 5;
  $minute = explode(".", $minute);
  $minute = $minute[0];
  $day = date("d");
  $month = date("m");
  $year = date("y");

  $fiboh5 = "rgb(93, 95, 99)";
  $fiboh3 = "rgb(93, 95, 99)";
  $fiboh2 = "rgb(93, 95, 99)";
  $fiboh1 = "rgb(93, 95, 99)";
  $fiboh1_0 = "rgb(93, 95, 99)";

  $fibom5 = "rgb(93, 95, 99)";
  $fibom3 = "rgb(93, 95, 99)";
  $fibom2 = "rgb(93, 95, 99)";
  $fibom1 = "rgb(93, 95, 99)";
  $fibom1_0 = "rgb(93, 95, 99)";

  /*$fibo5 = "rgb(93, 95, 99)";
  $fibo3 = "rgb(93, 95, 99)";
  $fibo2 = "rgb(93, 95, 99)";
  $fibo1 = "rgb(93, 95, 99)";
  $fibo1_0 = "rgb(93, 95, 99)";*/

  $approxMinute = $minute * 5;
  echo 'Il est à peu près '.$hour.':'.$minute.'(*5 -> ~'.$approxMinute.')'.$amorpm;

  //red rgb(235,87,103) is for hour
  //blue rgb(100,103,244) is for hour and minute
  //green rgb(90,232,124) is for minute
  //black rgb(93, 95, 99) is for void (or 0... 0 != void)


  if($amorpm == "pm" && $hour == 12){//midnight
    $hour = 0;
  }

  switch($hour){
    case 0 :
      $fiboh5 = "rgb(93, 95, 99)";
      $fiboh3 = "rgb(93, 95, 99)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 1 :
      $fiboh5 = "rgb(93, 95, 99)";
      $fiboh3 = "rgb(93, 95, 99)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(235,87,103)";
    break;
    case 2 :
      $fiboh5 = "rgb(93, 95, 99)";
      $fiboh3 = "rgb(93, 95, 99)";
      $fiboh2 = "rgb(235,87,103)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 3 :
      $fiboh5 = "rgb(93, 95, 99)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 4 :
      $fiboh5 = "rgb(93, 95, 99)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(235,87,103)";
    break;
    case 5 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(93, 95, 99)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 6 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(93, 95, 99)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(235,87,103)";
    break;
    case 7 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(93, 95, 99)";
      $fiboh2 = "rgb(235,87,103)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 8 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 9 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(93, 95, 99)";
      $fiboh1 = "rgb(235,87,103)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 10 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(235,87,103)";
      $fiboh1 = "rgb(93, 95, 99)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 11 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(235,87,103)";
      $fiboh1 = "rgb(235,87,103)";
      $fiboh1_0 = "rgb(93, 95, 99)";
    break;
    case 12 :
      $fiboh5 = "rgb(235,87,103)";
      $fiboh3 = "rgb(235,87,103)";
      $fiboh2 = "rgb(235,87,103)";
      $fiboh1 = "rgb(235,87,103)";
      $fiboh1_0 = "rgb(235,87,103)";
    break;
  }
  switch($minute){
    case 0 :
      $fibom5 = "rgb(93, 95, 99)";
      $fibom3 = "rgb(93, 95, 99)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 1 :
      $fibom5 = "rgb(93, 95, 99)";
      $fibom3 = "rgb(93, 95, 99)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(90,232,124)";
    break;
    case 2 :
      $fibom5 = "rgb(93, 95, 99)";
      $fibom3 = "rgb(93, 95, 99)";
      $fibom2 = "rgb(90,232,124)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 3 :
      $fibom5 = "rgb(93, 95, 99)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 4 :
      $fibom5 = "rgb(93, 95, 99)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(90,232,124)";
    break;
    case 5 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(93, 95, 99)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 6 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(93, 95, 99)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(90,232,124)";
    break;
    case 7 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(93, 95, 99)";
      $fibom2 = "rgb(90,232,124)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 8 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 9 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(93, 95, 99)";
      $fibom1 = "rgb(90,232,124)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 10 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(90,232,124)";
      $fibom1 = "rgb(93, 95, 99)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 11 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(90,232,124)";
      $fibom1 = "rgb(90,232,124)";
      $fibom1_0 = "rgb(93, 95, 99)";
    break;
    case 12 :
      $fibom5 = "rgb(90,232,124)";
      $fibom3 = "rgb(90,232,124)";
      $fibom2 = "rgb(90,232,124)";
      $fibom1 = "rgb(90,232,124)";
      $fibom1_0 = "rgb(90,232,124)";
    break;
  }
  if($fiboh5 == "rgb(235,87,103)" && $fibom5 == "rgb(90,232,124)"){
    $fibo5 = "rgb(100,103,244)";
    $fiboh5 = "rgb(100,103,244)";
    $fibom5 = "rgb(100,103,244)";
  }
  if($fiboh3 == "rgb(235,87,103)" && $fibom3 == "rgb(90,232,124)"){
    $fibo3 = "rgb(100,103,244)";
    $fiboh3 = "rgb(100,103,244)";
    $fibom3 = "rgb(100,103,244)";
  }
  if($fiboh2 == "rgb(235,87,103)" && $fibom2 == "rgb(90,232,124)"){
    $fibo2 = "rgb(100,103,244)";
    $fiboh2 = "rgb(100,103,244)";
    $fibom2 = "rgb(100,103,244)";
  }
  if($fiboh1 == "rgb(235,87,103)" && $fibom1 == "rgb(90,232,124)"){
    $fibo1 = "rgb(100,103,244)";
    $fiboh1 = "rgb(100,103,244)";
    $fibom1 = "rgb(100,103,244)";
  }
  if($fiboh1_0 == "rgb(235,87,103)" && $fibom1_0 == "rgb(90,232,124)"){
    $fibo1_0 = "rgb(100,103,244)";
    $fiboh1_0 = "rgb(100,103,244)";
    $fibom1_0 = "rgb(100,103,244)";
  }


 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <section class="main_container">
      <div class="container_clock_fibonacci">
        <div class="fibonacci5" style="background-color:
        <?php
          if($fiboh5 == "rgb(93, 95, 99)"){
            echo $fibom5;
          }elseif($fibom5 == "rgb(93, 95, 99)"){
            echo $fiboh5;}
          else{
            echo $fibo5;
          }
        ?>
        ">
          <?php echo $year;?>
        </div>
        <div class="fibonacci3" style="background-color:
        <?php
          if($fiboh3 == "rgb(93, 95, 99)"){
            echo $fibom3;
          }elseif($fibom3 == "rgb(93, 95, 99)"){
            echo $fiboh3;
          }else{
            echo $fibo3;
          }
        ?>">
          <?php echo $day;?>
        </div>
        <div class="fibonacci2" style="background-color:
        <?php
          if($fiboh2 == "rgb(93, 95, 99)"){
            echo $fibom2;
          }elseif($fibom2 == "rgb(93, 95, 99)"){
            echo $fiboh2;
          }else{
            echo $fibo2;
          }
        ?>
        ">
          <?php echo $month;?>
        </div>
        <div class="fibonacci1" style="background-color:
        <?php
          if($fiboh1 == "rgb(93, 95, 99)"){
            echo $fibom1;
          }elseif($fibom1 == "rgb(93, 95, 99)"){
            echo $fiboh1;
          }else{
            echo $fibo1;
          }
        ?>
        ">
        </div>
        <div class="fibonacci1_0" style="background-color:
        <?php
          if($fiboh1_0 == "rgb(93, 95, 99)"){
            echo $fibom1_0;
          }elseif($fibom1_0 == "rgb(93, 95, 99)"){
            echo $fiboh1_0;
          }else{
            echo $fibo1_0;
          }
        ?>
        ">
        </div>
      </div>
    </section>
  </body>
</html>
