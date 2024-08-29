<?php
session_start();

if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];
    // Simpan komentar ke file (tanpa sanitasi)
    file_put_contents('comments.txt', $comment . PHP_EOL, FILE_APPEND);
}

// Tampilkan komentar yang sudah diposting
$comments = file('comments.txt', FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
</head>
<body>
    <form method="POST">
        <textarea name="comment" placeholder="Write your comment here"></textarea>
        <button type="submit">Submit</button>
    </form>

    <h2>Comments</h2>
    <?php foreach ($comments as $comment): ?>
        <?php echo $comment; ?> <!-- Ini raw output, rentan XSS -->
    <?php endforeach; ?>
</body>
</html>
