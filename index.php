<?php
  
  date_default_timezone_set("Europe/Paris");//Adjust the time zone as you wish
  $amorpm = date("a");
  $hour = date("g");
  $minute = date("i");
  $minute = $minute / 5;
  $minute = explode(".", $minute);
  $minute = $minute[0];
  $day = date("d");
  $month = date("m");
  $year = date("y");

  $fiboh5 = "black";
  $fiboh3 = "black";
  $fiboh2 = "black";
  $fiboh1 = "black";
  $fiboh1_0 = "black";

  $fibom5 = "black";
  $fibom3 = "black";
  $fibom2 = "black";
  $fibom1 = "black";
  $fibom1_0 = "black";

  /*$fibo5 = "black";
  $fibo3 = "black";
  $fibo2 = "black";
  $fibo1 = "black";
  $fibo1_0 = "black";*/

  $approxMinute = $minute * 5;
  echo 'Il est à peu près '.$hour.':'.$minute.'(*5 -> ~'.$approxMinute.')'.$amorpm;

  //red is for hour
  //blue is for hour and minute
  //green is for minute
  //black is for void (or 0... 0 != void)


  if($amorpm == "am" && $hour == 12){//midnight
    $hour = 0;
  }

  switch($hour){
    case 0 :
      $fiboh5 = "black";
      $fiboh3 = "black";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 1 :
      $fiboh5 = "black";
      $fiboh3 = "black";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "red";
    break;
    case 2 :
      $fiboh5 = "black";
      $fiboh3 = "black";
      $fiboh2 = "red";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 3 :
      $fiboh5 = "black";
      $fiboh3 = "red";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 4 :
      $fiboh5 = "black";
      $fiboh3 = "red";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "red";
    break;
    case 5 :
      $fiboh5 = "red";
      $fiboh3 = "black";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 6 :
      $fiboh5 = "red";
      $fiboh3 = "black";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "red";
    break;
    case 7 :
      $fiboh5 = "red";
      $fiboh3 = "black";
      $fiboh2 = "red";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 8 :
      $fiboh5 = "red";
      $fiboh3 = "red";
      $fiboh2 = "black";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 9 :
      $fiboh5 = "red";
      $fiboh3 = "red";
      $fiboh2 = "black";
      $fiboh1 = "red";
      $fiboh1_0 = "black";
    break;
    case 10 :
      $fiboh5 = "red";
      $fiboh3 = "red";
      $fiboh2 = "red";
      $fiboh1 = "black";
      $fiboh1_0 = "black";
    break;
    case 11 :
      $fiboh5 = "red";
      $fiboh3 = "red";
      $fiboh2 = "red";
      $fiboh1 = "red";
      $fiboh1_0 = "black";
    break;
    case 12 :
      $fiboh5 = "red";
      $fiboh3 = "red";
      $fiboh2 = "red";
      $fiboh1 = "red";
      $fiboh1_0 = "red";
    break;
  }
  switch($minute){
    case 0 :
      $fibom5 = "black";
      $fibom3 = "black";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 1 :
      $fibom5 = "black";
      $fibom3 = "black";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "green";
    break;
    case 2 :
      $fibom5 = "black";
      $fibom3 = "black";
      $fibom2 = "green";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 3 :
      $fibom5 = "black";
      $fibom3 = "green";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 4 :
      $fibom5 = "black";
      $fibom3 = "green";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "green";
    break;
    case 5 :
      $fibom5 = "green";
      $fibom3 = "black";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 6 :
      $fibom5 = "green";
      $fibom3 = "black";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "green";
    break;
    case 7 :
      $fibom5 = "green";
      $fibom3 = "black";
      $fibom2 = "green";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 8 :
      $fibom5 = "green";
      $fibom3 = "green";
      $fibom2 = "black";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 9 :
      $fibom5 = "green";
      $fibom3 = "green";
      $fibom2 = "black";
      $fibom1 = "green";
      $fibom1_0 = "black";
    break;
    case 10 :
      $fibom5 = "green";
      $fibom3 = "green";
      $fibom2 = "green";
      $fibom1 = "black";
      $fibom1_0 = "black";
    break;
    case 11 :
      $fibom5 = "green";
      $fibom3 = "green";
      $fibom2 = "green";
      $fibom1 = "green";
      $fibom1_0 = "black";
    break;
    case 12 :
      $fibom5 = "green";
      $fibom3 = "green";
      $fibom2 = "green";
      $fibom1 = "green";
      $fibom1_0 = "green";
    break;
  }
  if($fiboh5 == "red" && $fibom5 == "green"){
    $fibo5 = "blue";
    $fiboh5 = "blue";
    $fibom5 = "blue";
  }
  if($fiboh3 == "red" && $fibom3 == "green"){
    $fibo3 = "blue";
    $fiboh3 = "blue";
    $fibom3 = "blue";
  }
  if($fiboh2 == "red" && $fibom2 == "green"){
    $fibo2 = "blue";
    $fiboh2 = "blue";
    $fibom2 = "blue";
  }
  if($fiboh1 == "red" && $fibom1 == "green"){
    $fibo1 = "blue";
    $fiboh1 = "blue";
    $fibom1 = "blue";
  }
  if($fiboh1_0 == "red" && $fibom1_0 == "green"){
    $fibo1_0 = "blue";
    $fiboh1_0 = "blue";
    $fibom1_0 = "blue";
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
        <div class="fibonacci5 
        <?php
          if($fiboh5 == "black"){
            echo $fibom5;
          }elseif($fibom5 == "black"){
            echo $fiboh5;}
          else{
            echo $fibo5;
          }
        ?>
        ">
          <?php echo $year;?>
        </div>
        <div class="fibonacci3
        <?php
          if($fiboh3 == "black"){
            echo $fibom3;
          }elseif($fibom3 == "black"){
            echo $fiboh3;
          }else{
            echo $fibo3;
          }
        ?>">
          <?php echo $day;?>
        </div>
        <div class="fibonacci2
        <?php
          if($fiboh2 == "black"){
            echo $fibom2;
          }elseif($fibom2 == "black"){
            echo $fiboh2;
          }else{
            echo $fibo2;
          }
        ?>
        ">
          <?php echo $month;?>
        </div>
        <div class="fibonacci1
        <?php
          if($fiboh1 == "black"){
            echo $fibom1;
          }elseif($fibom1 == "black"){
            echo $fiboh1;
          }else{
            echo $fibo1;
          }
        ?>
        ">
        </div>
        <div class="fibonacci1_0
        <?php
          if($fiboh1_0 == "black"){
            echo $fibom1_0;
          }elseif($fibom1_0 == "black"){
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
