<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>БАНКОМАТ</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<body>
<div class="main">
    <form name="bank" action="form.php" method="post">
        <div class="welcome"><lable>Welcome to PrivatBank</lable></div>
        <div class="lable"><lable>Введите сумму которую Вы хотите получить<br></lable></div>
        <div class="lable-text"><lable>(вводите целое число кратное 5)</lable><br></div>
        <div class="summa"><input type="text" name="value" class="text"><br></div>
        <div class="btn"><button type="submit" name="done" class="btn-btn">Снять</button></div>
    </form>
</div>

</body>
</html>