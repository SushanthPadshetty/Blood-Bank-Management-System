<?php
$conn = new mysqli("localhost", "root", "", "bloodbank");
include 'header.php';
?>
<div class="container">
  <h2>Blood Request Form</h2>
  <form method="post" action="receiver.php">
    <input type="text" name="Rid" placeholder="Receiver ID" required>
    <input type="text" name="Name" placeholder="Name" required>
    <input type="number" name="Age" placeholder="Age" required>
    <select name="Bloodgroup" required>
      <option value="">--Select Blood Group--</option>
      <option>A+</option><option>B+</option><option>AB+</option><option>O+</option>
      <option>A-</option><option>B-</option><option>AB-</option><option>O-</option>
    </select>
    <input type="text" name="Phone" placeholder="Phone" required>
    <input type="submit" value="Request Blood">
  </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Rid = $_POST['Rid'];
  $Name = $_POST['Name'];
  $Age = $_POST['Age'];
  $Bloodgroup = $_POST['Bloodgroup'];
  $Phone = $_POST['Phone'];
  $request_volume = 500;
  $check = "SELECT Quantity FROM inventory WHERE Bloodgroup = '$Bloodgroup'";
  $result = mysqli_query($conn, $check);
  $row = mysqli_fetch_assoc($result);
  if ($row && $row['Quantity'] >= $request_volume) {
    $sql = "INSERT INTO receiver (Rid, Name, Age, Bloodgroup, Phone)
            VALUES ('$Rid', '$Name', '$Age', '$Bloodgroup', '$Phone')";
    if (mysqli_query($conn, $sql)) {
        $update = "UPDATE inventory SET Quantity = Quantity - $request_volume WHERE Bloodgroup = '$Bloodgroup'";
        mysqli_query($conn, $update);
        echo "<p class='center' style='color: green;'>Blood Request Successful!</p>";
    } else {
        echo "<p class='center' style='color: red;'>Error while processing request.</p>";
    }
  } else {
    echo "<p class='center' style='color: red;'>Insufficient stock of $Bloodgroup!</p>";
  }
}
include 'footer.php';
?>