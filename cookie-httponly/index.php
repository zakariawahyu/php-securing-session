<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Httponly</title>
</head>
<body>
    <?php session_start() ?>
    <p>Session Cookie setting : <?php echo json_encode(session_get_cookie_params()) ?></p>
    <button onclick="setCookie('username', 'zakaria')">Set Cookie Httponly Off</button>
    <button onclick="printCookie()">Get The Cookie</button>
    <p id="print"></p>
    <script>
    
    function printCookie(cname) {
        document.getElementById("print").innerHTML = document.cookie
    }

    function setCookie(cname, cvalue) {
        const d = new Date();
        d.setTime(d.getTime() + (24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

        window.location.reload();
    }
    </script>
</body>
</html>