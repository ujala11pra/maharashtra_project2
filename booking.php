

 <?php
$name = $_POST['name'];
$place = $_POST['place'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Successful</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;

        background: linear-gradient(to right, #667eea, #764ba2);
        color: white;
    }

    .success-box {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);

        padding: 40px;
        border-radius: 15px;

        width: 90%;
        max-width: 400px;

        text-align: center;

        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    h1 {
        margin-bottom: 20px;
    }

    .info {
        margin: 15px 0;
        font-size: 18px;
    }

    .message {
        margin-top: 20px;
        font-size: 16px;
        line-height: 1.6;
    }

    a {
        display: inline-block;
        margin-top: 25px;

        background: white;
        color: #667eea;

        padding: 10px 20px;
        border-radius: 20px;

        text-decoration: none;
        font-weight: bold;
    }

    a:hover {
        background: #eee;
    }
</style>

</head>

<body>

<div class="success-box">

    <h1>🎉 Booking Successful!</h1>

    <div class="info">
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Destination:</strong> <?php echo $place; ?></p>
    </div>

    <div class="message">
        <p>✨ Thank you for booking with us!</p>
        <p>We wish you a <strong>Happy Journey</strong> and a <strong>Safe Trip</strong> 🚗🌄</p>
        <p>Enjoy your travel and make beautiful memories 💖</p>
    </div>

    <a href="index.html">⬅ Back to Home</a>

</div>

</body>
</html>
