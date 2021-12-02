<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Feedback.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#footer">Contact us</a></li>
            </ul>
        </div>
    </header>
    <div class ="fixed">
        <section>
            <h2 >Booking</h2>
            <h1 >Yahya</h1>
            <p >i had a bad saflksnalfnklsafnlsafnlasnfldan'sfnsl'</p>
        </section>
        <?php

            $sql = "SELECT * FROM demo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        
        ?>
        <section>
        <h2><?php echo $row['tital']; ?></h2>
        <h1><?php echo $row['name']; ?></h1>
        <p><?php echo $row['Feedback']; ?></p>
        </section>
        <?php } } ?>
    </div>

</body>
</html>