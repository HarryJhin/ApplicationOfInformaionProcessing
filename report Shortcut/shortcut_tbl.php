<?php
$connect = mysqli_connect('localhost', 'root', '');
$result = mysqli_select_db($connect, 'shortcut_db');

if ($result) {
    $sql = "
            create table shortcut (
                FUNC varchar(20) not null primary key,
                CTRL boolean,
                ALT boolean,
                SHIFT boolean,
                HOTKEY varchar(2) not null
            )";
    $result = mysqli_query($connect, $sql);
}

mysqli_close($connect);
