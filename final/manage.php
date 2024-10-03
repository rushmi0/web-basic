<?php
include("config.php");

// ลบข้อมูลเมื่อมีการคลิกปุ่มลบ
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteSql = "DELETE FROM all_contact WHERE id = $id";
    if (mysqli_query($conn, $deleteSql)) {
        echo "ลบข้อมูลสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
}

// ดึงข้อมูลทั้งหมดจากฐานข้อมูล
$sql = "SELECT * FROM all_contact";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Contacts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="submit"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>All Contacts</h2>

    <?php if (mysqli_num_rows($result) > 0): ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Manage</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['message']); ?></td>
            <td>
                <form method="get" action="manage.php" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลนี้?');">
                    <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                    <input type="submit" value="ลบ">
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <p>ไม่พบข้อมูล</p>
    <?php endif; ?>

</div>

<?php
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>

</body>
</html>
