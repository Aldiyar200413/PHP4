<?php
  function calc($a,$op,$b)
  {
    if($a=='' && $b=='' && $c=='')
    {
      echo 'Введите цифры!';
    }
    else{
    switch ($op) {
        case '+':
          echo $a + $b;
          break;
        case '-':
          echo $a-$b;
          break;
        case '*':
          echo $a*$b;
          break;
        case '/':
          if($b==0){
            echo 'На ноль делить нельзя!';
          }
          else{
            echo $a/$b;
          }
          break;
        default:
            echo 'Введите правильный оператор!';
      }
    }
  }
?>
    <!-- Область основного контента -->
    <form action='' method='POST'>
      <label>Число 1:</label>
      <br />
      <input name='A' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <select name='op'>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
      </select>
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
