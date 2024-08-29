<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Cross-Domain Cookie</title>
</head>
<body>
    <script>
        // Contoh melakukan request ke Server A untuk mengakses cookie
        fetch('https://bank.local/fetch.php', {
            method: 'GET',
            credentials: 'include' // Mengirim cookie lintas domain
        })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
