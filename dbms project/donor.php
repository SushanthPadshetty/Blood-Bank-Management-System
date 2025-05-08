<?php
$conn = new mysqli("localhost", "root", "", "bloodbank");
include 'header.php';
?>
<div class="container">
  <h2>Donor Registration</h2>
  <form method="post" action="donor.php">
    <input type="text" name="Did" placeholder="Donor ID" required>
    <input type="text" name="Name" placeholder="Name" required>
    <input type="number" name="Age" placeholder="Age" required>
    <select name="Bloodgroup" required>
      <option value="">--Select Blood Group--</option>
      <option>A+</option><option>B+</option><option>AB+</option><option>O+</option>
      <option>A-</option><option>B-</option><option>AB-</option><option>O-</option>
    </select>
    <input type="text" name="Phone" placeholder="Phone" required>
    <input type="submit" value="Add Donor">
  </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Did = $_POST['Did'];
  $Name = $_POST['Name'];
  $Age = $_POST['Age'];
  $Bloodgroup = $_POST['Bloodgroup'];
  $Phone = $_POST['Phone'];
  $donation_volume = 500;
  $sql = "INSERT INTO donor (Did, Name, Age, Bloodgroup, Phone)
          VALUES ('$Did', '$Name', '$Age', '$Bloodgroup', '$Phone')";
  if (mysqli_query($conn, $sql)) {
    $update = "INSERT INTO inventory (Bloodgroup, Quantity)
               VALUES ('$Bloodgroup', $donation_volume)
               ON DUPLICATE KEY UPDATE Quantity = Quantity + $donation_volume";
    mysqli_query($conn, $update);
    echo "<p class='center' style='color: green;'>Donor added and inventory updated.</p>";
  } else {
    echo "<p class='center' style='color: red;'>Error adding donor.</p>";
  }
}
include 'footer.php';
?>