<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css" />
    <link rel="stylesheet" href="style.css" />

    <title>Laundry</title>
</head>
<body>
    <?php include ('header.php');?>
    <div class="form_box">
    <h2>Customer Details Form</h2>
    <h3>Personal Details</h3>
    <form method="POST" action="test.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Name" required><br>

        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="contact" placeholder="Contact number" required><br>

        <label for="address">Home Address:</label>
        <input type="text" id="address" name="address" placeholder="Home Address"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email"><br>

        <input type="submit" id="btn" value="Submit">
    </form>
</div>

    </div>
</body>
</html>