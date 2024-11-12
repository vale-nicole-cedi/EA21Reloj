<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hora mundial</title>
 <style>
        
 

        @font-face {
            font-family: 'SevenSegment';
            src: url('Seven Segment.ttf') format('truetype');
        }

        body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

#hora {
    font-family: 'SevenSegment', sans-serif; 
    font-size: 5rem;
    font-weight: bold;
    color: #333;
    
}

 {
    font-family: Arial, sans-serif;
    font-size: 2rem;
    font-weight: bold;
    color: #555;
}


    </style>
</head>
<body>
<h1 id="hora"></h1>
<h2 id="saludo"></h2>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript">
function a() {
            $.ajax({
                url: 'reloj.php?' + new Date().getTime(),
                method: 'GET',        
                success: function(data) {
                    let n= data;
                    console.log("esto es lo que me regresa:", data);
                    data=data.trim();
                    console.log("esto es lo que me regresa despues del trim:", data);
                    console.log(n);
                 $('#hora').text(n);
                    let hora = parseInt(n.slice(0,2)); // Extrae ambos dígitos de la hora
                    let mensaje;
                    console.log(hora);
                    if (hora >= 19 || hora < 5) {
                        mensaje = "Buenas noches";
                    } else if (hora >= 5 && hora < 12) {
                        mensaje = "Buenos días";
                    } else if (hora>12 && hora<19) {
                        mensaje = "Buenas tardes";
                    }
                    else 
                    {
                        mensaje='aña';
                    }

                    $('#saludo').text(mensaje);
                },
               
            });
        }
        setInterval(a, 1000);
</script>
</body>
</html>

 <h1>HORA</h1> <br>
<h2>buen dia</h2>
</body>
</html>
