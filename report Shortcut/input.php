<?php include('shortcut_tbl.php'); ?>

<html>
    <head>
        <title>Shortcut Input Page</title>
    </head>
    <body>
        <br><br><br><br><br><br><br><br><br><br><center>
            <h2>Windows 10 Shortcut Input</h2>
            <form name="input" method="post" action="insert.php">
                <table border="0" width="500" bgcolor="#FFFFCC">
                    <tr>
                        <td height="20"></td>
                    </tr>
                    <tr>
                        <br>
                        <td width="20%" height="30" align="right"><b>function: </b></td>
                        <td>&nbsp;<input type="text" size="40" maxlength="20" name="func"></td>
                    </tr>
                </table>
                <table border="0" width="500" bgcolor="#FFFFCC" cellpadding="1em">
                    <tr>
                        <td width="5%" height="20"></td>
                        <td width="10%" height="20"></td>
                        <td width="5%" height="20"></td>
                        <td width="10%" height="20"></td>
                        <td width="5%" height="20"></td>
                        <td width="10%" height="20"></td>
                        <td width="5%" height="20"></td>
                        <td width="10%" height="20"></td>
                        <td width="5%" height="20"></td>
                        <td width="5%" height="20"></td>
                    </tr>
                    <tr>
                        <td height="20"></td>

                        <td height="30" align="center"><b>Ctrl</b></td>
                        <td>&nbsp;<input type="checkbox" name="ctrl" value="1"></td>

                        <td height="30" align="center"><b>Alt</b></td>
                        <td>&nbsp;<input type="checkbox" name="alt" value="1"></td>

                        <td height="30" align="center"><b>Shift</b></td>
                        <td>&nbsp;<input type="checkbox" align="center" name="shift" value="1"></td>

                        <td height="30" align="center"><b>Key</b></td>
                        <td>&nbsp;<input type="text" align="center" size="3" maxlength="2" name="hotkey"></td>

                        <td height="20"></td>
                    </tr>
                </table>
                <table border="0" width="500" bgcolor="#FFFFCC">
                    <tr>
                        <td height="40%" align="center" colspan="2">
                            <input type="submit" value="  Submit  ">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" value="  Rewrite  ">
                        </td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
