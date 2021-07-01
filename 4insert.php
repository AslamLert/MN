<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
    <h2>Insert Data : Account</h2>
    <form action="insertdata.php" method="post" name="Account">
        <table border="1">
            <tr>
                <td>AccID : </td>
                <td><input type="text" name="AccID"></td>
            </tr>

            <tr>
                <td>Acc_Date : </td>
                <td><input type="date" name="Acc_Date"></td>
            </tr>


            <tr>
                <td>รายการ : </td>
                <?php
                // ListID Query from Table
                require('connect.php');
                $sql = '
                        SELECT ListID 
                        FROM list;
                        ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td><select name="List">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                            ?>
                            <option value=<?php echo $objResult["ListID"]; ?>><?php echo $objResult["ListID"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>รายรับ : </td>
                <td><input type="text" name="Income"></td>
            </tr>
            <tr>
                <td>รายจ่าย : </td>
                <td><input type="text" name="Outcome"></td>
            </tr>
            <tr>
                <td>รายละเอียด</td>
                <td><textarea name="Detail" rows="5" cols="40"><?php echo $objResult["Detail"]; ?></textarea></td>
            </tr>






        </table>

        <br>
        <input type="submit" value="Insert Data">
    </form>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";
    echo "--- END ---";
    ?>
</body>

</html>