<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
  <?php
  require('connect.php');

  $sql = '
    SELECT * FROM account INNER JOIN list ON account.listID=list.ListID
    ';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1">
    <tr>
      <th width="50">
        <div align="center">ลำดับ</div>
      </th>
        <th width="100">
            <div align="center">AccID</div>
        </th>
        <th width="100">
            <div align="center">วันที่</div>
        </th>
      <th width="100">
        <div align="center">รายละเอียด</div>
      </th>
      <th width="100">
        <div align="center">รายรับ</div>
      </th>
      <th width="100">
        <div align="center">รายจ่าย</div>
      </th>
      <th width="100">
        <div align="center">ListID</div>
      </th>
        <th width="100">
            <div align="center">Name</div>
        </th>
        <th width="100">
            <div align="center">Delete</div>
        </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["AccID"]; ?></td>
        <td><?php echo $objResult["Acc_Date"]; ?></td>
        <td><?php echo $objResult["Detail"]; ?></td>
        <td><?php echo $objResult["Income"]; ?></td>
        <td><?php echo $objResult["Outcome"]; ?></td>
        <td><?php echo $objResult["ListID"]; ?></td>
        <td><?php echo $objResult["Name"]; ?></td>
          <td align="center"><a href="deletedata.php?AccID=<?php echo $objResult["EmployeeID"]; ?>">Delete</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>