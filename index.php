<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Таблица 1, работа с php</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h1>Задания с таблицами</h1>
    </header>

    <main>
        <div class = 'container'>
            <h2>Задание 1</h2>
            <table class = 'table'>
                <thead>
                <tr>
                  <th>A</th>
                  <th>B</th>
                  <th>!A</th>
                  <th>A || B</th>
                  <th>A && B</th>
                  <th>A xor B</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <?php
                    $A = 0;
                    $B = 0;
                    ?>
                    <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td> <!--!A-->
                    <td><?= $A || $B ?></td> <!-- A || B -->
                    <td><?= $A && $B ?></td> <!-- A && B -->
                    <td><?= $A xor $B ?></td> <!--A xor B-->
                </tr>
                <tr>
                    <?php
                    $A = 0;
                    $B = 1;
                    ?>
                    <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td> <!--!A-->
                    <td><?= $A || $B ?></td> <!-- A || B -->
                    <td><?= $A && $B ?></td> <!-- A && B -->
                    <td><?= $A xor $B ?></td> <!--A xor B-->
                </tr>
                <tr>
                    <?php
                    $A = 1;
                    $B = 0;
                    ?>
                   <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td> <!--!A-->
                    <td><?= $A || $B ?></td> <!-- A || B -->
                    <td><?= $A && $B ?></td> <!-- A && B -->
                    <td><?= $A xor $B ?></td> <!--A xor B-->
                </tr>
                <tr>
                    <?php
                    $A = 1;
                    $B = 1;
                    ?>
                   <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td> <!--!A-->
                    <td><?= $A || $B ?></td> <!-- A || B -->
                    <td><?= $A && $B ?></td> <!-- A && B -->
                    <td><?= $A xor $B ?></td> <!--A xor B-->
                </tr>
            </tbody>
              </table>
              <p>В таблице представлены данные, которые 
                обрабатываются логическими операторами. По таблице видно, что в случае "true" 
                возвращается обрабатываемое значение, в случае "false" PHP ничего не возвращает. </p>
        </div>

        <div class = 'container'>
            <h2>Задание 2. Таблицы сравнения</h2>
            <p>Таблица гибкого сравнения</p>
        <table>
            <?php
            $first_column = true;
            $second_column = false;
            $third_column = 1;
            $fourth_column = 0;
            $fifth_column = -1;
            $sixth_column = '1';
            $seventh_column = null;
            $eighth_column = 'php';

            $first_row = true;
            $second_row = false;
            $third_row = 1;
            $fourth_row = 0;
            $fifth_row = -1;
            $sixth_row = '1';
            $seventh_row = null;
            $eighth_row = 'php';
            ?>
                <tr>
                  <th> </th>
                  <th>true</th>
                  <th>false</th>
                  <th>1</th>
                  <th>0</th>
                  <th>-1</th>
                  <th>"1"</th>
                  <th>null</th>
                  <th>"php"</th>
                </tr>

                <tr>
                  <th>true</th>
                  <td><?= $first_row == $first_column?></td>
                  <td><?= $first_row == $second_column?></td>
                  <td><?= $first_row == $third_column?></td>
                  <td><?= $first_row == $fourth_column?></td>
                  <td><?= $first_row == $fifth_column?></td>
                  <td><?= $first_row == $sixth_column?></td>
                  <td><?= $first_row == $seventh_column?></td>
                  <td><?= $first_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>false</th>
                  <td><?= $second_row == $first_column?></td>
                  <td><?= $second_row == $second_column?></td>
                  <td><?= $second_row == $third_column?></td>
                  <td><?= $second_row == $fourth_column?></td>
                  <td><?= $second_row == $fifth_column?></td>
                  <td><?= $second_row == $sixth_column?></td>
                  <td><?= $second_row == $seventh_column?></td>
                  <td><?= $second_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>1</th>
                  <td><?= $third_row == $first_column?></td>
                  <td><?= $third_row == $second_column?></td>
                  <td><?= $third_row == $third_column?></td>
                  <td><?= $third_row == $fourth_column?></td>
                  <td><?= $third_row == $fifth_column?></td>
                  <td><?= $third_row == $sixth_column?></td>
                  <td><?= $third_row == $seventh_column?></td>
                  <td><?= $third_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>0</th>
                  <td><?= $fourth_row == $first_column?></td>
                  <td><?= $fourth_row == $second_column?></td>
                  <td><?= $fourth_row == $third_column?></td>
                  <td><?= $fourth_row == $fourth_column?></td>
                  <td><?= $fourth_row == $fifth_column?></td>
                  <td><?= $fourth_row == $sixth_column?></td>
                  <td><?= $fourth_row == $seventh_column?></td>
                  <td><?= $fourth_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>-1</th>
                  <td><?= $fifth_row == $first_column?></td>
                  <td><?= $fifth_row == $second_column?></td>
                  <td><?= $fifth_row == $third_column?></td>
                  <td><?= $fifth_row == $fourth_column?></td>
                  <td><?= $fifth_row == $fifth_column?></td>
                  <td><?= $fifth_row == $sixth_column?></td>
                  <td><?= $fifth_row == $seventh_column?></td>
                  <td><?= $fifth_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>"1"</th>
                  <td><?= $sixth_row == $first_column?></td>
                  <td><?= $sixth_row == $second_column?></td>
                  <td><?= $sixth_row == $third_column?></td>
                  <td><?= $sixth_row == $fourth_column?></td>
                  <td><?= $sixth_row == $fifth_column?></td>
                  <td><?= $sixth_row == $sixth_column?></td>
                  <td><?= $sixth_row == $seventh_column?></td>
                  <td><?= $sixth_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>null</th>
                  <td><?= $seventh_row == $first_column?></td>
                  <td><?= $seventh_row == $second_column?></td>
                  <td><?= $seventh_row == $third_column?></td>
                  <td><?= $seventh_row == $fourth_column?></td>
                  <td><?= $seventh_row == $fifth_column?></td>
                  <td><?= $seventh_row == $sixth_column?></td>
                  <td><?= $seventh_row == $seventh_column?></td>
                  <td><?= $seventh_row == $eighth_column?></td>
                </tr>
                <tr>
                  <th>"php"</th>
                  <td><?= $eighth_row == $first_column?></td>
                  <td><?= $eighth_row == $second_column?></td>
                  <td><?= $eighth_row == $third_column?></td>
                  <td><?= $eighth_row == $fourth_column?></td>
                  <td><?= $eighth_row == $fifth_column?></td>
                  <td><?= $eighth_row == $sixth_column?></td>
                  <td><?= $eighth_row == $seventh_column?></td>
                  <td><?= $eighth_row == $eighth_column?></td>
                </tr>
                
              </table>
              <p>Таблица жесткого сравнения</p>
              <table>
            <?php
            $first_column = true;
            $second_column = false;
            $third_column = 1;
            $fourth_column = 0;
            $fifth_column = -1;
            $sixth_column = '1';
            $seventh_column = null;
            $eighth_column = 'php';

            $first_row = true;
            $second_row = false;
            $third_row = 1;
            $fourth_row = 0;
            $fifth_row = -1;
            $sixth_row = '1';
            $seventh_row = null;
            $eighth_row = 'php';
            ?>
                <tr>
                  <th> </th>
                  <th>true</th>
                  <th>false</th>
                  <th>1</th>
                  <th>0</th>
                  <th>-1</th>
                  <th>"1"</th>
                  <th>null</th>
                  <th>"php"</th>
                </tr>

                <tr>
                  <th>true</th>
                  
                  <td><?= $first_row === $first_column?></td>
                  <td><?= $first_row === $second_column?></td>
                  <td><?= $first_row === $third_column?></td>
                  <td><?= $first_row === $fourth_column?></td>
                  <td><?= $first_row === $fifth_column?></td>
                  <td><?= $first_row === $sixth_column?></td>
                  <td><?= $first_row === $seventh_column?></td>
                  <td><?= $first_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>false</th>
                  <td><?= $second_row === $first_column?></td>
                  <td><?= $second_row === $second_column?></td>
                  <td><?= $second_row === $third_column?></td>
                  <td><?= $second_row === $fourth_column?></td>
                  <td><?= $second_row === $fifth_column?></td>
                  <td><?= $second_row === $sixth_column?></td>
                  <td><?= $second_row === $seventh_column?></td>
                  <td><?= $second_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>1</th>
                  <td><?= $third_row === $first_column?></td>
                  <td><?= $third_row === $second_column?></td>
                  <td><?= $third_row === $third_column?></td>
                  <td><?= $third_row === $fourth_column?></td>
                  <td><?= $third_row === $fifth_column?></td>
                  <td><?= $third_row === $sixth_column?></td>
                  <td><?= $third_row === $seventh_column?></td>
                  <td><?= $third_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>0</th>
                  <td><?= $fourth_row === $first_column?></td>
                  <td><?= $fourth_row === $second_column?></td>
                  <td><?= $fourth_row === $third_column?></td>
                  <td><?= $fourth_row === $fourth_column?></td>
                  <td><?= $fourth_row === $fifth_column?></td>
                  <td><?= $fourth_row === $sixth_column?></td>
                  <td><?= $fourth_row === $seventh_column?></td>
                  <td><?= $fourth_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>-1</th>
                  <td><?= $fifth_row === $first_column?></td>
                  <td><?= $fifth_row === $second_column?></td>
                  <td><?= $fifth_row === $third_column?></td>
                  <td><?= $fifth_row === $fourth_column?></td>
                  <td><?= $fifth_row === $fifth_column?></td>
                  <td><?= $fifth_row === $sixth_column?></td>
                  <td><?= $fifth_row === $seventh_column?></td>
                  <td><?= $fifth_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>"1"</th>
                  <td><?= $sixth_row === $first_column?></td>
                  <td><?= $sixth_row === $second_column?></td>
                  <td><?= $sixth_row === $third_column?></td>
                  <td><?= $sixth_row === $fourth_column?></td>
                  <td><?= $sixth_row === $fifth_column?></td>
                  <td><?= $sixth_row === $sixth_column?></td>
                  <td><?= $sixth_row === $seventh_column?></td>
                  <td><?= $sixth_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>null</th>
                  <td><?= $seventh_row === $first_column?></td>
                  <td><?= $seventh_row === $second_column?></td>
                  <td><?= $seventh_row === $third_column?></td>
                  <td><?= $seventh_row === $fourth_column?></td>
                  <td><?= $seventh_row === $fifth_column?></td>
                  <td><?= $seventh_row === $sixth_column?></td>
                  <td><?= $seventh_row === $seventh_column?></td>
                  <td><?= $seventh_row === $eighth_column?></td>
                </tr>
                <tr>
                  <th>"php"</th>
                  <td><?= $eighth_row === $first_column?></td>
                  <td><?= $eighth_row === $second_column?></td>
                  <td><?= $eighth_row === $third_column?></td>
                  <td><?= $eighth_row === $fourth_column?></td>
                  <td><?= $eighth_row === $fifth_column?></td>
                  <td><?= $eighth_row === $sixth_column?></td>
                  <td><?= $eighth_row === $seventh_column?></td>
                  <td><?= $eighth_row === $eighth_column?></td>
                </tr>
              </table>
              <p>Выводы:<br> 
                При сравнении таблицы жесткого сравнения с таблицей гибкого сравнения видно, что
                в жестком сравнении сравниваемые значения равны только самим себе, никакого преобразования 
                типов данных не происходит;<br>
                При гибком сравнении происходит преобразование типов данных, поэтому, например, значение 
                true будет истинно самому себе, строке и значениям выше и ниже 0; false истинно самому себе, 
                нулю, значению null; числовой тип единицы будет истенен самому себе, true и единице строкового 
                типа, так как она легко преобразуется в числовой тип данных; ноль будет равен самому себе, false, null;
                отрицательное значение единицы истинна самой себе и значению true; строковый тип числа 1 истиннен 
                такому же значению в строковом типе, true, числовому типу данных со значением 1; null истиннен null, 
                0 и false; при сравнении строк происходит жесткое сравнение символов внутри между ними, истинно равенство 
                будет в случае точного совпадения символов, а также значению true. 
              </p>
        </div>
    </main>

    <footer>
        <div>Выполнено Кузнецовой Викторией группы PHPDEV-1006</div>
    </footer>
</body>