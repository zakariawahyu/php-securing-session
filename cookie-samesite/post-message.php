<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Domain A -->
    <iframe id="childIframe" src="https://bank.local/post-message.html"></iframe>
    <script>
    window.addEventListener('message', function(event) {
        console.log(event);
        
        if (event.origin !== 'https://bank.local') {
            return;
        }
        console.log('Received cookie from bank.local:', event.data);
    });
    </script>
</body>
</html>