<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word count</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Word counter</h2>
    <form method="post">
        <label for="sentence">Enter text here:</label><br>
        <textarea id="sentence" name="sentence" rows="4" cols="50" required></textarea><br>
        <button type="submit" name="count">Provjeri</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = trim($_POST['sentence']);
        
        $wordCount = str_word_count($sentence);
        
        echo "<h3>Number of words: $wordCount</h3>";
    }
    ?>
</body>
</html>
