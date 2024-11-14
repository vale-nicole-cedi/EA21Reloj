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
        transition: background-color 0.5s ease; 
    }

    #hora {
        font-family: 'SevenSegment', sans-serif;
        font-size: 5rem;
        font-weight: bold;
        color: #333;
    }

    #saludo {
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
            let n = data.trim();
            $('#hora').text(n);

            let hora = parseInt(n.slice(0, 2)); 
            let mensaje;
            let bgColor;

            
            if (hora >= 19 || hora < 5) {
                mensaje = "Buenas noches";
                bgColor = "#001f3f"; 
            } else if (hora >= 5 && hora < 12) {
                mensaje = "Buenos días";
                bgColor = "#87CEEB"; 
            } else if (hora >= 12 && hora < 19) {
                mensaje = "Buenas tardes";
                bgColor = "#FFD580"; 
            } else {
                mensaje = "Hola";
                bgColor = "#FFFFFF"; 
            }

            $('#saludo').text(mensaje);
            $('body').css('background-color', bgColor); 
        }
    });
}


setInterval(a, 1000);
</script>
</body>
</html>
