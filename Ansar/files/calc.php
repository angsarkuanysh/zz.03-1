<?php
  function calc($a,$op,$b)
  {
    if($op=='+'){
      echo $a + $b;
    }
    else if($op == '-'){
      echo $a-$b;
    }
    else if($op == '*'){
      echo $a*$b;
    }
    else if($op == '/'){
      echo $a/$b;
    }
    else{
      echo 'Введите правильный оператор!';
    }
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
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
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action='' method='POST'>
      <label>Число 1:</label>
      <br />
      <input name='A' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='op' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='B' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
      <?php
        calc($_POST['A'], $_POST['op'], $_POST['B']);
      ?>
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