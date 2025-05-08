<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
    }
    header {
      background-color: #b22222;
      color: white;
    }
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
    }
    nav .logo {
      font-size: 22px;
      font-weight: bold;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
      margin: 0;
      padding: 0;
    }
    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 5px;
    }
    nav ul li a:hover {
      background-color: #8b1a1a;
    }
    footer {
      background-color: #b22222;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 50px;
    }
    .container {
      max-width: 500px;
      margin: 60px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #b22222;
      color: white;
      border: none;
      cursor: pointer;
      font-weight: bold;
    }
    input[type="submit"]:hover {
      background-color: #8b1a1a;
    }
    h2 {
      text-align: center;
      color: #b22222;
    }
    table {
      width: 80%;
      margin: 40px auto;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }
    th {
      background-color: #b22222;
      color: white;
    }
    td {
      background-color: #fff;
    }
    .center {
      text-align: center;
    }
  </style>
</head>
<body>
<header>
  <nav>
    <div class="logo">Blood Bank</div>
    <ul>
      <li><a href="donor.php">Donor</a></li>
      <li><a href="receiver.php">Receiver</a></li>
      <li><a href="inventory.php">Inventory</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
</header>
