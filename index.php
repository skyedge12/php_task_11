<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблицы PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
<table align="center">
        <caption><strong>Таблица истинности PHP</strong></caption>
<br>
        <?php $a = 0; $b = 0;?>

        <tr>
            <td><strong>A</strong></td>
            <td><strong>B</strong></td>
            <td><strong>!A</strong></td>
            <td><strong>A || B</strong></td>
            <td><strong>A && B</strong></td>
            <td><strong>A xor B</strong></td>
         </tr> <!--ряд с ячейками тела таблицы-->
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $b; ?></td>
            <td><?php echo (int)!$a;?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
        </tr> <!--ряд с ячейками тела таблицы-->
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo ++$b; ?></td>
            <td><?php echo (int)!$a;?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
        </tr> <!--ряд с ячейками тела таблицы-->
        <tr>
            <td><?php echo ++$a; ?></td>
            <td><?php echo --$b; ?></td>
            <td><?php echo (int)!$a;?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
        </tr> <!--ряд с ячейками тела таблицы-->
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo ++$b; ?></td>
            <td><?php echo (int)!$a;?></td>
            <td><?php echo (int)($a || $b); ?></td>
            <td><?php echo (int)($a && $b); ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
        </tr> <!--ряд с ячейками тела таблицы-->
</table>
<br>
<br>
<br>
<table align="center">
        <caption><strong>Гибкое сравнение в PHP</strong></caption>
        <br>
        <tr>
            <td><strong></strong></td>
            <td><strong>true</strong></td>
            <td><strong>false</strong></td>
            <td><strong>1</strong></td>
            <td><strong>0</strong></td>
            <td><strong>-1</strong></td>
            <td><strong>"1"</strong></td>
            <td><strong>null</strong></td>
            <td><strong>"php"</strong></td>
         </tr>
        <tr>
            <td><strong>true</strong></td>
            <td><?php echo (int)(true==true); ?></td>
            <td><?php echo (int)(true==false); ?></td>
            <td><?php echo (int)(true==1);?></td>
            <td><?php echo (int)(true==0); ?></td>
            <td><?php echo (int)(true==-1); ?></td>
            <td><?php echo (int)(true=="1"); ?></td>
            <td><?php echo (int)(true==null); ?></td>
            <td><?php echo (int)(true=="php"); ?></td>
        </tr> 

        <tr>
            <td><strong>false</strong></td>
            <td><?php echo (int)(false==true); ?></td>
            <td><?php echo (int)(false==false); ?></td>
            <td><?php echo (int)(false==1);?></td>
            <td><?php echo (int)(false==0); ?></td>
            <td><?php echo (int)(false==-1); ?></td>
            <td><?php echo (int)(false=="1"); ?></td>
            <td><?php echo (int)(false==null); ?></td>
            <td><?php echo (int)(false=="php"); ?></td>
        </tr> 

        <tr>
            <td><strong>1</strong></td>
            <td><?php echo (int)(1==true); ?></td>
            <td><?php echo (int)(1==false); ?></td>
            <td><?php echo (int)(1==1);?></td>
            <td><?php echo (int)(1==0); ?></td>
            <td><?php echo (int)(1==-1); ?></td>
            <td><?php echo (int)(1=="1"); ?></td>
            <td><?php echo (int)(1==null); ?></td>
            <td><?php echo (int)(1=="php"); ?></td>
        </tr> 

        <tr>
            <td><strong>0</strong></td>
            <td><?php echo (int)(0==true); ?></td>
            <td><?php echo (int)(0==false); ?></td>
            <td><?php echo (int)(0==1);?></td>
            <td><?php echo (int)(0==0); ?></td>
            <td><?php echo (int)(0==-1); ?></td>
            <td><?php echo (int)(0=="1"); ?></td>
            <td><?php echo (int)(0==null); ?></td>
            <td><?php echo (int)(0=="php"); ?></td>
        </tr> 

        <tr>
            <td><strong>-1</strong></td>
            <td><?php echo (int)(-1==true); ?></td>
            <td><?php echo (int)(-1==false); ?></td>
            <td><?php echo (int)(-1==1);?></td>
            <td><?php echo (int)(-1==0); ?></td>
            <td><?php echo (int)(-1==-1); ?></td>
            <td><?php echo (int)(-1=="1"); ?></td>
            <td><?php echo (int)(-1==null); ?></td>
            <td><?php echo (int)(-1=="php"); ?></td>
        </tr> 

        <tr>
            <td><strong>"1"</strong></td>
            <td><?php echo (int)("1"==true); ?></td>
            <td><?php echo (int)("1"==false); ?></td>
            <td><?php echo (int)("1"==1);?></td>
            <td><?php echo (int)("1"==0); ?></td>
            <td><?php echo (int)("1"==-1); ?></td>
            <td><?php echo (int)("1"=="1"); ?></td>
            <td><?php echo (int)("1"==null); ?></td>
            <td><?php echo (int)("1"=="php"); ?></td>
        </tr> 

        <tr>
            <td><strong>null</strong></td>
            <td><?php echo (int)(null==true); ?></td>
            <td><?php echo (int)(null==false); ?></td>
            <td><?php echo (int)(null==1);?></td>
            <td><?php echo (int)(null==0); ?></td>
            <td><?php echo (int)(null==-1); ?></td>
            <td><?php echo (int)(null=="1"); ?></td>
            <td><?php echo (int)(null==null); ?></td>
            <td><?php echo (int)(null=="php"); ?></td>
        </tr> 


        <tr>
            <td><strong>"php"</strong></td>
            <td><?php echo (int)("php"==true); ?></td>
            <td><?php echo (int)("php"==false); ?></td>
            <td><?php echo (int)("php"==1);?></td>
            <td><?php echo (int)("php"==0); ?></td>
            <td><?php echo (int)("php"==-1); ?></td>
            <td><?php echo (int)("php"=="1"); ?></td>
            <td><?php echo (int)("php"==null); ?></td>
            <td><?php echo (int)("php"=="php"); ?></td>
        </tr>
        </table>
<br>
<br>
<table align="center">
        <caption><strong>Жесткое сравнение в PHP</strong></caption>
        <br>
        <tr>
            <td><strong></strong></td>
            <td><strong>true</strong></td>
            <td><strong>false</strong></td>
            <td><strong>1</strong></td>
            <td><strong>0</strong></td>
            <td><strong>-1</strong></td>
            <td><strong>"1"</strong></td>
            <td><strong>null</strong></td>
            <td><strong>"php"</strong></td>
        </tr>
        <tr>
            <td><strong>true</strong></td>
            <td><?php echo (int)(true===true); ?></td>
            <td><?php echo (int)(true===false); ?></td>
            <td><?php echo (int)(true===1);?></td>
            <td><?php echo (int)(true===0); ?></td>
            <td><?php echo (int)(true===-1); ?></td>
            <td><?php echo (int)(true==="1"); ?></td>
            <td><?php echo (int)(true===null); ?></td>
            <td><?php echo (int)(true==="php"); ?></td>
        </tr>

        <tr>
            <td><strong>false</strong></td>
            <td><?php echo (int)(false===true); ?></td>
            <td><?php echo (int)(false===false); ?></td>
            <td><?php echo (int)(false===1);?></td>
            <td><?php echo (int)(false===0); ?></td>
            <td><?php echo (int)(false===-1); ?></td>
            <td><?php echo (int)(false==="1"); ?></td>
            <td><?php echo (int)(false===null); ?></td>
            <td><?php echo (int)(false==="php"); ?></td>
        </tr>

        <tr>
            <td><strong>1</strong></td>
            <td><?php echo (int)(1===true); ?></td>
            <td><?php echo (int)(1===false); ?></td>
            <td><?php echo (int)(1===1);?></td>
            <td><?php echo (int)(1===0); ?></td>
            <td><?php echo (int)(1===-1); ?></td>
            <td><?php echo (int)(1==="1"); ?></td>
            <td><?php echo (int)(1===null); ?></td>
            <td><?php echo (int)(1==="php"); ?></td>
        </tr>

        <tr>
            <td><strong>0</strong></td>
            <td><?php echo (int)(0===true); ?></td>
            <td><?php echo (int)(0===false); ?></td>
            <td><?php echo (int)(0===1);?></td>
            <td><?php echo (int)(0===0); ?></td>
            <td><?php echo (int)(0===-1); ?></td>
            <td><?php echo (int)(0==="1"); ?></td>
            <td><?php echo (int)(0===null); ?></td>
            <td><?php echo (int)(0==="php"); ?></td>
        </tr>

        <tr>
            <td><strong>-1</strong></td>
            <td><?php echo (int)(-1===true); ?></td>
            <td><?php echo (int)(-1===false); ?></td>
            <td><?php echo (int)(-1===1);?></td>
            <td><?php echo (int)(-1===0); ?></td>
            <td><?php echo (int)(-1===-1); ?></td>
            <td><?php echo (int)(-1==="1"); ?></td>
            <td><?php echo (int)(-1===null); ?></td>
            <td><?php echo (int)(-1==="php"); ?></td>
        </tr>

        <tr>
            <td><strong>"1"</strong></td>
            <td><?php echo (int)("1"===true); ?></td>
            <td><?php echo (int)("1"===false); ?></td>
            <td><?php echo (int)("1"===1);?></td>
            <td><?php echo (int)("1"===0); ?></td>
            <td><?php echo (int)("1"===-1); ?></td>
            <td><?php echo (int)("1"==="1"); ?></td>
            <td><?php echo (int)("1"===null); ?></td>
            <td><?php echo (int)("1"==="php"); ?></td>
        </tr>

        <tr>
            <td><strong>null</strong></td>
            <td><?php echo (int)(null===true); ?></td>
            <td><?php echo (int)(null===false); ?></td>
            <td><?php echo (int)(null===1);?></td>
            <td><?php echo (int)(null===0); ?></td>
            <td><?php echo (int)(null===-1); ?></td>
            <td><?php echo (int)(null==="1"); ?></td>
            <td><?php echo (int)(null===null); ?></td>
            <td><?php echo (int)(null==="php"); ?></td>
        </tr>


        <tr>
            <td><strong>"php"</strong></td>
            <td><?php echo (int)("php"===true); ?></td>
            <td><?php echo (int)("php"===false); ?></td>
            <td><?php echo (int)("php"===1);?></td>
            <td><?php echo (int)("php"===0); ?></td>
            <td><?php echo (int)("php"===-1); ?></td>
            <td><?php echo (int)("php"==="1"); ?></td>
            <td><?php echo (int)("php"===null); ?></td>
            <td><?php echo (int)("php"==="php"); ?></td>
        </tr>

    </table>
<br>
<br>
<div align="left">
        <h2>Выводы:</h2>
        <ul>
            <li>В  языке PHP слабая неявная динамическая типизация, то есть тип переменной определяется во время выполнения программы, а не во время компиляции,
                 в зависимости от ее значения и может меняться.</li>
            <li>При гибком сравнении происходит приведение типов, если переменные были разных типов.</li>
            <li>При жестком сравнении истинным значение будет только в том случае, если переменные имеют один тип и одно
                значение.</li>
        </ul>
    </div>    
</body>
</html>