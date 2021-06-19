    // ID IP TIME
    var time = new Date();
    var unixTime = time.getTime();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var ip = document.getElementById('ipTag').innerText;


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