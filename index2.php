<!DOCTYPE html>
<html lang="es">  
    <head>    
        <title>MAX Recocompensas</title>    
        <meta charset="UTF-8">
        <meta name="title" content="MAX Reward">
        <meta name="description" content="Descripción de la WEB">       
        <style>
            #container{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 450px;
            height: 300px;
            margin-left: -200px;
            margin-top: -150px;
            }

            #content{
            font-size: 0.8em;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
            font-size: 20px;
            text-align: justify;
            texto-justify: inter-palabra;            
            }   
        </style>
        <script type="text/javascript">
        var count = 25;
        var redirect = "https://maxrecompensas.info";

        function countDown(){
            var timer = document.getElementById("timer");
            if(count > 0){
                count--;
                timer.innerHTML = "Esta página  se redireccionará en "+count+" segundos.";
                setTimeout("countDown()", 1000);
            }else{
                window.location.href = redirect;
            }
        }
        </script>

    </head>  
    <body>
        <div id="container">
            <div id="content">
                <center><img src="logo2.png" alt=""/></center>
                <p>Estimado usuario, nos mudamos de página y esta liga será inhabilitada en los siguientes meses, por lo que te invitamos a que entres a través del nuevo dominio: <a href="https://maxrecompensas.info">maxrecompensas.info</a>. </p>
                <p>Cualquier duda contáctanos a través de <a href="mailto:contacto@recompensasmax.com">contacto@recompensasmax.com</a>, y sigue aprovechando los beneficios del programa</p>            
                <span id="timer">
                    <script type="text/javascript">countDown();</script>
                </span>            
            </div>
        </div>        
    </body>  
</html>

