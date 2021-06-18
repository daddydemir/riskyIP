<?PHP
  $ip =  $_SERVER["REMOTE_ADDR"];
  
  // this is localhost ::1
echo "
<!DOCTYPE html>
<html>

<head>
    <title> @daddydemir</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</head>

<body>

</body>
<center>
    <h1>welcome to this page</h1>
</center>
<p style='display:none;' id='ipTag'> $ip </p>
<script>
    // ID IP HOURS
    var time = new Date();
    var unixTime = time.getTime();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var ip = document.getElementById('ipTag').innerText;
    alert(hours + ':' + minutes + ' ip adresi : ' + ip);

    $.ajax({
        type: 'POST',
        url: 'analize.php',
        data: {
            id: unixTime,
            hour: hours,
            minute: minutes,
            ip: ip
        }
    });
</script>
</html>
";
?>
