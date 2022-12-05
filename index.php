
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Таблицы</title>
</head>
<body>
    <table border="1">
    <caption>Таблица истинности PHP</caption>
    <tr>
        <td class="first">A</td>
        <td class="first">B</td>
        <td class="first">!A</td>
        <td class="first">A || B</td>
        <td class="first">A && B</td>
        <td class="first">A xor B</td>
    </tr>
    <tr>
        <?php $a = 0; $b = 0; ?>
        <td class="first1">0</td>
        <td class="first1">0</td>
        <td class="other"><?php var_export (!$a); ?></td>
        <td class="other"><?php var_export ($a || $b); ?></td>
        <td class="other"><?php var_export ($a && $b); ?></td>
        <td class="other"><?php var_export ($a xor $b); ?></td>
    </tr>
    <tr>
    <?php $a = 0; $b = 1; ?>
        <td class="first1">0</td>
        <td class="first1">1</td>
        <td class="other"><?php var_export (!$a); ?></td>
        <td class="other"><?php var_export ($a || $b); ?></td>
        <td class="other"><?php var_export ($a && $b); ?></td>
        <td class="other"><?php var_export ($a xor $b); ?></td>
    </tr>
    <?php $a = 1; $b = 0; ?>
        <td class="first1">1</td>
        <td class="first1">0</td>
        <td class="other"><?php var_export (!$a); ?></td>
        <td class="other"><?php var_export ($a || $b); ?></td>
        <td class="other"><?php var_export ($a && $b); ?></td>
        <td class="other"><?php var_export ($a xor $b); ?></td>
    </tr>
    <?php $a = 1; $b = 1; ?>
        <td class="first1">1</td>
        <td class="first1">1</td>
        <td class="other"><?php var_export (!$a); ?></td>
        <td class="other"><?php var_export ($a || $b); ?></td>
        <td class="other"><?php var_export ($a && $b); ?></td>
        <td class="other"><?php var_export ($a xor $b); ?></td>
    </tr>
    </table>

    <table border="1">
    <caption>Таблица сравнения с гибким сравнением ==</caption>
    <tr>
        <td class="first"></td>
        <td class="first">true</td>
        <td class="first">false</td>
        <td class="first">1</td>
        <td class="first">0</td>
        <td class="first">-1</td>
        <td class="first">'1'</td>
        <td class="first">null</td>
        <td class="first">'php'</td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">true</td>
        <td class="other"><?php var_export ($a == $a); ?></td>
        <td class="other"><?php var_export ($a == $b); ?></td>
        <td class="other"><?php var_export ($a == $c); ?></td>
        <td class="other"><?php var_export ($a == $d); ?></td>
        <td class="other"><?php var_export ($a == $e); ?></td>
        <td class="other"><?php var_export ($a == $f); ?></td>
        <td class="other"><?php var_export ($a == $g); ?></td>
        <td class="other"><?php var_export ($a == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">false</td>
        <td class="other"><?php var_export ($b == $a); ?></td>
        <td class="other"><?php var_export ($b == $b); ?></td>
        <td class="other"><?php var_export ($b == $c); ?></td>
        <td class="other"><?php var_export ($b == $d); ?></td>
        <td class="other"><?php var_export ($b == $e); ?></td>
        <td class="other"><?php var_export ($b == $f); ?></td>
        <td class="other"><?php var_export ($b == $g); ?></td>
        <td class="other"><?php var_export ($b == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">1</td>
        <td class="other"><?php var_export ($c == $a); ?></td>
        <td class="other"><?php var_export ($c == $b); ?></td>
        <td class="other"><?php var_export ($c == $c); ?></td>
        <td class="other"><?php var_export ($c == $d); ?></td>
        <td class="other"><?php var_export ($c == $e); ?></td>
        <td class="other"><?php var_export ($c == $f); ?></td>
        <td class="other"><?php var_export ($c == $g); ?></td>
        <td class="other"><?php var_export ($c == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">0</td>
        <td class="other"><?php var_export ($d == $a); ?></td>
        <td class="other"><?php var_export ($d == $b); ?></td>
        <td class="other"><?php var_export ($d == $c); ?></td>
        <td class="other"><?php var_export ($d == $d); ?></td>
        <td class="other"><?php var_export ($d == $e); ?></td>
        <td class="other"><?php var_export ($d == $f); ?></td>
        <td class="other"><?php var_export ($d == $g); ?></td>
        <td class="other"><?php var_export ($d == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">-1</td>
        <td class="other"><?php var_export ($e == $a); ?></td>
        <td class="other"><?php var_export ($e == $b); ?></td>
        <td class="other"><?php var_export ($e == $c); ?></td>
        <td class="other"><?php var_export ($e == $d); ?></td>
        <td class="other"><?php var_export ($e == $e); ?></td>
        <td class="other"><?php var_export ($e == $f); ?></td>
        <td class="other"><?php var_export ($e == $g); ?></td>
        <td class="other"><?php var_export ($e == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">'1'</td>
        <td class="other"><?php var_export ($f == $a); ?></td>
        <td class="other"><?php var_export ($f == $b); ?></td>
        <td class="other"><?php var_export ($f == $c); ?></td>
        <td class="other"><?php var_export ($f == $d); ?></td>
        <td class="other"><?php var_export ($f == $e); ?></td>
        <td class="other"><?php var_export ($f == $f); ?></td>
        <td class="other"><?php var_export ($f == $g); ?></td>
        <td class="other"><?php var_export ($f == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">null</td>
        <td class="other"><?php var_export ($g == $a); ?></td>
        <td class="other"><?php var_export ($g == $b); ?></td>
        <td class="other"><?php var_export ($g == $c); ?></td>
        <td class="other"><?php var_export ($g == $d); ?></td>
        <td class="other"><?php var_export ($g == $e); ?></td>
        <td class="other"><?php var_export ($g == $f); ?></td>
        <td class="other"><?php var_export ($g == $g); ?></td>
        <td class="other"><?php var_export ($g == $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">'php'</td>
        <td class="other"><?php var_export ($h == $a); ?></td>
        <td class="other"><?php var_export ($h == $b); ?></td>
        <td class="other"><?php var_export ($h == $c); ?></td>
        <td class="other"><?php var_export ($h == $d); ?></td>
        <td class="other"><?php var_export ($h == $e); ?></td>
        <td class="other"><?php var_export ($h == $f); ?></td>
        <td class="other"><?php var_export ($h == $g); ?></td>
        <td class="other"><?php var_export ($h == $h); ?></td>
    </tr>
    
    </table>
    <table border="1">
    <caption>Таблица сравнения с жестким сравнением ===</caption>
    <tr>
        <td class="first"></td>
        <td class="first">true</td>
        <td class="first">false</td>
        <td class="first">1</td>
        <td class="first">0</td>
        <td class="first">-1</td>
        <td class="first">'1'</td>
        <td class="first">null</td>
        <td class="first">'php'</td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">true</td>
        <td class="other"><?php var_export ($a === $a); ?></td>
        <td class="other"><?php var_export ($a === $b); ?></td>
        <td class="other"><?php var_export ($a === $c); ?></td>
        <td class="other"><?php var_export ($a === $d); ?></td>
        <td class="other"><?php var_export ($a === $e); ?></td>
        <td class="other"><?php var_export ($a === $f); ?></td>
        <td class="other"><?php var_export ($a === $g); ?></td>
        <td class="other"><?php var_export ($a === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">false</td>
        <td class="other"><?php var_export ($b === $a); ?></td>
        <td class="other"><?php var_export ($b === $b); ?></td>
        <td class="other"><?php var_export ($b === $c); ?></td>
        <td class="other"><?php var_export ($b === $d); ?></td>
        <td class="other"><?php var_export ($b === $e); ?></td>
        <td class="other"><?php var_export ($b === $f); ?></td>
        <td class="other"><?php var_export ($b === $g); ?></td>
        <td class="other"><?php var_export ($b === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">1</td>
        <td class="other"><?php var_export ($c === $a); ?></td>
        <td class="other"><?php var_export ($c === $b); ?></td>
        <td class="other"><?php var_export ($c === $c); ?></td>
        <td class="other"><?php var_export ($c === $d); ?></td>
        <td class="other"><?php var_export ($c === $e); ?></td>
        <td class="other"><?php var_export ($c === $f); ?></td>
        <td class="other"><?php var_export ($c === $g); ?></td>
        <td class="other"><?php var_export ($c === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">0</td>
        <td class="other"><?php var_export ($d === $a); ?></td>
        <td class="other"><?php var_export ($d === $b); ?></td>
        <td class="other"><?php var_export ($d === $c); ?></td>
        <td class="other"><?php var_export ($d === $d); ?></td>
        <td class="other"><?php var_export ($d === $e); ?></td>
        <td class="other"><?php var_export ($d === $f); ?></td>
        <td class="other"><?php var_export ($d === $g); ?></td>
        <td class="other"><?php var_export ($d === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">-1</td>
        <td class="other"><?php var_export ($e === $a); ?></td>
        <td class="other"><?php var_export ($e === $b); ?></td>
        <td class="other"><?php var_export ($e === $c); ?></td>
        <td class="other"><?php var_export ($e === $d); ?></td>
        <td class="other"><?php var_export ($e === $e); ?></td>
        <td class="other"><?php var_export ($e === $f); ?></td>
        <td class="other"><?php var_export ($e === $g); ?></td>
        <td class="other"><?php var_export ($e === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">'1'</td>
        <td class="other"><?php var_export ($f === $a); ?></td>
        <td class="other"><?php var_export ($f === $b); ?></td>
        <td class="other"><?php var_export ($f === $c); ?></td>
        <td class="other"><?php var_export ($f === $d); ?></td>
        <td class="other"><?php var_export ($f === $e); ?></td>
        <td class="other"><?php var_export ($f === $f); ?></td>
        <td class="other"><?php var_export ($f === $g); ?></td>
        <td class="other"><?php var_export ($f === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">null</td>
        <td class="other"><?php var_export ($g === $a); ?></td>
        <td class="other"><?php var_export ($g === $b); ?></td>
        <td class="other"><?php var_export ($g === $c); ?></td>
        <td class="other"><?php var_export ($g === $d); ?></td>
        <td class="other"><?php var_export ($g === $e); ?></td>
        <td class="other"><?php var_export ($g === $f); ?></td>
        <td class="other"><?php var_export ($g === $g); ?></td>
        <td class="other"><?php var_export ($g === $h); ?></td>
    </tr>
    <tr>
        <?php $a = true; $b = false; $c = 1; $d = 0; $e = -1; $f = '1'; $g = null; $h = 'php'?>
        <td class="first">'php'</td>
        <td class="other"><?php var_export ($h === $a); ?></td>
        <td class="other"><?php var_export ($h === $b); ?></td>
        <td class="other"><?php var_export ($h === $c); ?></td>
        <td class="other"><?php var_export ($h === $d); ?></td>
        <td class="other"><?php var_export ($h === $e); ?></td>
        <td class="other"><?php var_export ($h === $f); ?></td>
        <td class="other"><?php var_export ($h === $g); ?></td>
        <td class="other"><?php var_export ($h === $h); ?></td>
    </tr>
    </table>
   
</body>

</html>
