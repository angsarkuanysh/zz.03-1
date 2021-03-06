<?php
function drawTable ($cols, $rows , $background)
{
  echo "<table border = '1' width='500' text-align:center>";
  for ($tr = 1; $tr <= $rows; $tr++) {
      echo "<tr style='background : {$background}'>";
          for ($td = 1; $td <= $cols; $td++) {
              if ($tr == 1 || $td == 1) {
                 echo "<th style = 'background : {$background}'>" . $tr * $td . "</th>";
              } else
              echo "<td>" . $tr * $td . "</td>";
            }
          }
      echo "</tr>";
   echo "</table>";
  }

?>
<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action='' method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='A' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='B' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='C' type='color' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
<?php

    drawTable ($_POST['A'], $_POST['B'], $_POST['C']);
?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>