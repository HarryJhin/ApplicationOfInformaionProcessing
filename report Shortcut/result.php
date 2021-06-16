<?php
echo "<br><br><h2><center>Windows 10 Shortcut List</center></h2><hr>";

$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'shortcut_db');

mysqli_query($connect, "set session character_set_connection=utf-8;");
mysqli_query($connect, "set session character_set_results=utf=8;");
mysqli_query($connect, "set session character_set_clients=utf=8;");

$sql = "select FUNC, CTRL, ALT, SHIFT, UPPER(HOTKEY) from shortcut";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_fields($result);

echo "<b>shortcut table</b><br><br>";

?>
<html>
    <body>
        <table width="600" border="1" bordercolor="blue" cellpadding="1">
            <tr>
                <td bgcolor="#FFFF00"><B>function</B></td>
                <td bgcolor="#FFFF00"><B>ctrl</B></td>
                <td bgcolor="#FFFF00"><B>alt</B></td>
                <td bgcolor="#FFFF00"><B>shift</B></td>
                <td bgcolor="#FFFF00"><B>key</B></td>
            </tr>
            <?php
            while ($rows = mysqli_fetch_row($result)) {
                echo "<tr>";
                for ($a = 0; $a < $count; $a++) {
                    echo "<td> $rows[$a]</td>";
                }
                echo "</tr>";
            }
            ?>
        </table><br>

        <?php
        $row_count = mysqli_num_rows($result);
        echo "전체 레코드의 수: <B>[ {$row_count} 개 ]</B><br><hr>";
        mysqli_close($connect);
        ?>

        ⬅︎ [<a href="input.php">new shortcut input</a>]
    </body>
</html>
