<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        <label for="name">Start date</label>
        <input type="datetime-local"
        name="start_date" require><br> <br>
        <label for="name">End date</label>
        <input type="datetime-local"
        name="end_date" require><br> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
