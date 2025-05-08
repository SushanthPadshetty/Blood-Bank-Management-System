<?php
$conn = new mysqli("localhost", "root", "", "bloodbank");
include 'header.php';
?>
<div class="container">
  <h2>Blood Inventory</h2>
  <table>
    <tr>
      <th>Blood Group</th>
      <th>Available (ml)</th>
    </tr>
<?php
$sql = "SELECT Bloodgroup, Quantity FROM inventory ORDER BY Bloodgroup";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['Bloodgroup']}</td><td>{$row['Quantity']} ml</td></tr>";
  }
} else {
  echo "<tr><td colspan='2'>No inventory data found.</td></tr>";
}
?>
  </table>
</div>
<?php include 'footer.php'; ?>
