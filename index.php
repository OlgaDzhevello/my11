<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
    <h3><strong>Задание 1. </strong><span class="txt">Таблица истинности PHP</span></h3>
        <table>
            <thead>
                <tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
            </thead>
            <tbody>
            <tr> 
                <?php $a = 0; $b = 0; 
                    $cell1 = (int)!$a;
                    $cell2 = (int)($a || $b);
                    $cell3 = (int)($a && $b);
                    $cell4 = (int)($a xor $b);      
                ?>
                <td><?=$a?></td>
                <td><?=$b?></td>
                <td><?=$cell1?></td>
                <td><?=$cell2?></td>
                <td><?=$cell3?></td>
                <td><?=$cell4?></td>
            </tr>
            <tr>
                <?php $a = 0; $b = 1;
                    $cell1 = (int)!$a;
                    $cell2 = (int)($a || $b);
                    $cell3 = (int)($a && $b);
                    $cell4 = (int)($a xor $b);      
                ?>
                <td><?=$a?></td>
                <td><?=$b?></td>
                <td><?=$cell1?></td>
                <td><?=$cell2?></td>
                <td><?=$cell3?></td>
                <td><?=$cell4?></td>
            </tr>
            <tr> 
                <?php $a = 1; $b = 0;
                    $cell1 = (int)!$a;
                    $cell2 = (int)($a || $b);
                    $cell3 = (int)($a && $b);
                    $cell4 = (int)($a xor $b);      
                ?>
                <td><?=$a?></td>
                <td><?=$b?></td>
                <td><?=$cell1?></td>
                <td><?=$cell2?></td>
                <td><?=$cell3?></td>
                <td><?=$cell4?></td>
            </tr>
            <tr> 
                <?php $a = 1; $b = 1;
                    $cell1 = (int)!$a;
                    $cell2 = (int)($a || $b);
                    $cell3 = (int)($a && $b);
                    $cell4 = (int)($a xor $b);      
                ?>
                <td><?=$a?></td>
                <td><?=$b?></td>
                <td><?=$cell1?></td>
                <td><?=$cell2?></td>
                <td><?=$cell3?></td>
                <td><?=$cell4?></td>
            </tr>
            </tbody>
        </table>
        <p><strong>Вывод:&nbsp;</strong><span class="txt"> Динамическая типизация в PHP требует явного приведения данных для вывода</span></p> 
        
        <h3><strong>Задание 2.&nbsp;</strong><span class="txt">Cравнение в PHP</span></h3>
        <h4><strong>Гибкое сравнение в PHP (==)&nbsp;</strong></h4>
        <table >
            <thead>
                <?php $b1 = true; $b2 = false; $b3 = 1; $b4 = 0; $b5 = -1 ; $b6 = "1"; $b7 = null; $b8 = "php"?>
                <tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>"1"</th><th>null</th><th>"php"</th></tr>
            </thead>
            <tbody>
                <tr>
                    <?php $a = true; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=($a ? 'true' : 'false')?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = false; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=($a ? 'true' : 'false')?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = 1; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=$a?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = 0; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=$a?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = -1; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=$a?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = "1"; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?="\"".$a."\""?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = null; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=(is_null($a) ? 'null' : $a)?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = "php"; 
                        $cell1 = ($a == $b1 ) ? 'true' : 'false';
                        $cell2 = ($a == $b2 ) ? 'true' : 'false';
                        $cell3 = ($a == $b3 ) ? 'true' : 'false';
                        $cell4 = ($a == $b4 ) ? 'true' : 'false';
                        $cell5 = ($a == $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a == $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a == $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a == $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?="\"".$a."\""?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
            </tbody>
        </table>
        <h4><strong>Жёсткое сравнение в PHP (===)&nbsp;</strong></h4>
        <table >
            <thead>
                <?php $b1 = true; $b2 = false; $b3 = 1; $b4 = 0; $b5 = -1 ; $b6 = "1"; $b7 = null; $b8 = "php"?>
                <tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>"1"</th><th>null</th><th>"php"</th></tr>
            </thead>
            <tbody>
                <tr>
                    <?php $a = true; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=($a ? 'true' : 'false')?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = false; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=($a ? 'true' : 'false')?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = 1; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=$a?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = 0; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=$a?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = -1; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=$a?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = "1"; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?="\"".$a."\""?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = null; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?=(is_null($a) ? 'null' : $a)?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
                <tr>
                <?php $a = "php"; 
                        $cell1 = ($a === $b1 ) ? 'true' : 'false';
                        $cell2 = ($a === $b2 ) ? 'true' : 'false';
                        $cell3 = ($a === $b3 ) ? 'true' : 'false';
                        $cell4 = ($a === $b4 ) ? 'true' : 'false';
                        $cell5 = ($a === $b5 ) ? 'true' : 'false';     
                        $cell6 = ($a === $b6 ) ? 'true' : 'false';     
                        $cell7 = ($a === $b7 ) ? 'true' : 'false';     
                        $cell8 = ($a === $b8 ) ? 'true' : 'false';     
                    ?>
                    <td class="gray-cell"><strong><?="\"".$a."\""?></strong></td>
                    <td><?=$cell1?></td>
                    <td><?=$cell2?></td>
                    <td><?=$cell3?></td>
                    <td><?=$cell4?></td>
                    <td><?=$cell5?></td>
                    <td><?=$cell6?></td>
                    <td><?=$cell7?></td>
                    <td><?=$cell8?></td>
                </tr>
            </tbody>
        </table>
        <p><strong>Вывод:&nbsp;</strong><span class="txt"> Твблицы наглядно показывают отличие жесткого и гибкого сравнения</span></p> 
    </div>
    <script src="script.js"></script>
</body>
</html>