<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://224dnidomatury.neocities.org/zdjecia/triskalion.ico">
        <title>STRONKA</title>
        <link href="styl2.css" rel="stylesheet" type="text/css" media="all">
    </head>
<body>
    <hr>
    <div id="man">
        <div class="baner">
            <h2>Witam!!</h2>
        </div>
    </div>
    <hr>
    <div id="panelnaw">
        <ul>
            <li><a href="formularz.php">Formularz zgłoszeniowy</a></li>
            <li><a href="polaczenie.php">Połączenie z bazą danych</a></li>
            <li><a href="grid.php">Przykład użycia grida</a>
            <li><a href="https://youtu.be/uxyM7vhU0uU">Muzyczka</a></li>
        </ul>
    </div>

    <div id="sekcja">
        <br><br>
        <p>Oto i bardzo fajny skrypt - sprzedarz kasztanów!</p><br>
        <form name="form1" id="wowe">
            <input type="checkbox" id="czek"> Czy chcesz oddać kasztany za darmo?
            <p>Jeśli tak - nasza cena to 2 zł od kilograma</p>
            Podaj liczbę kilogramów kasztanów: 
            <input type="number" min="1" max="35" id="kg" name="kg"><br><Br>
            <input type="button"  value="oblicz" onClick="oblicz()">
            <p>Oto i ilość złotych którą otrzymasz za kasztany!:</p>
            <p id="wyniczek"></p>
            </form>
        <script>
            function oblicz() 
		{
            var wynik=document.getElementById('czek');
			var kilometry=document.getElementById('kg').value;
			var wynik3=document.getElementById('wyniczek');
			var przelicz=kilometry*2;

			if (czek.checked)
			{
				wyniczek.innerHTML = "Dziękujemy!!";
			} else{
				wyniczek.innerHTML = przelicz
			}
		}
        </script>

    </div>

    <div id="podstopka">
        Stronę wykonał Maksymilian
    </div>

</body>
</html>
