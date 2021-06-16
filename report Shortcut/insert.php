<?php
$func = $_POST['func'];
$ctrl = isset($_POST['ctrl']) ? 1 : 0;
$alt = isset($_POST['alt']) ? 1 : 0;
$shift = isset($_POST['shift']) ? 1 : 0;
$hotkey = $_POST['hotkey'];

echo "$ctrl<br>";
echo "$alt<br>";
echo "$shift<br>";

$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'shortcut_db');

mysqli_query($connect, "set session character_set_connection=utf-8;");
mysqli_query($connect, "set session character_set_results=utf=8;");
mysqli_query($connect, "set session character_set_clients=utf=8;");

$sql = "insert into shortcut ";
$sql .= "values('$func', '$ctrl', '$alt', '$shift', '$hotkey')";

$result = mysqli_query($connect, $sql);
mysqli_close($connect);

if ($result) {
    echo "<center><h3><br><br>등록 완료. 축하드립니다.<br><br></h3><br>";
    echo "이동할 화면을 선택하세요.<br><br>";
    echo "⬅︎ [<a href='input.php'>주소 입력</a>]&nbsp;|&nbsp;";
    echo "[<a href='result.php'>결과 화면</a>] ⮕";
}
else {
    echo "<center><h3><br><br> 등록 실패. 다시 입력해주세요.<br><br></h3><br>";
    echo "⬅︎ [<a href='input.php'>주소 입력</a>]&nbsp;|&nbsp;";
}