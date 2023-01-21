
<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

<style>


</style>
  <div id="header">
    <!-- Верхняя часть страницы -->
   <?php require 'top.inc.php'?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
   
   
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
   include 'index.inc.php'
   ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
  
    <!-- Меню -->

   <?php
   include 'menu.inc.php'?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
   include 'bottom.inc.php'
   ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>