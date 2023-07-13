<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XSS - Cross Site Scripting</title>
  <link href="Image/favicon.ico" rel="icon" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/2.3.4/mini-dark.min.css">
</head>

<body>
  <header>
    <a href="index.php" class="logo">XSS LAB</a>
    <a href="\XSS_LAB\src\reflected_xss\reflected.php" class="button">Reflected XSS</a>
    <a href="\XSS_LAB\src\stored_xss\stored.php" class="button">Stored XSS</a>
    <a href="\XSS_LAB\src\dom_xss\dom.php?default=English" class="button">DOM-based XSS</a>
  </header>
  <script>alert("Chào mừng các hách cơ lỏ đến với trang web của iem <3\nDeveloped by Thànhh!")</script>



</body>

</html>