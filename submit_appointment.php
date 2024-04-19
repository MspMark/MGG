<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: "Open Sans", sans-serif;
            background: var(--background);
            margin: 0;
            padding: 0;
        }
        .calendar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .day {
            width: calc(100% / 7);
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .day:hover {
            background-color: #f0f0f0;
        }
        .appointment-form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .appointment-form label {
            display: block;
            margin-bottom: 10px;
        }
        .appointment-form input[type="text"],
        .appointment-form input[type="email"],
        .appointment-form input[type="date"],
        .appointment-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .appointment-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: var(--primary);
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .appointment-form input[type="submit"]:hover {
            background-color: var(--primaryHi);
        }
    </style>
</head>
<body>

<h1>Book an Appointment</h1>

<div class="calendar">
</div>

<div class="appointment-form">
    <h2>Appointment Details</h2>
    <form action="submit_appointment.php" method="post">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="service">Service</label>
        <select id="service" name="service" required>
            <option value="">Select a service</option>
            <option value="Writing">Writing</option>
            <option value="Editing">Editing</option>
            <option value="Proofreading">Proofreading</option>
        </select>

        <label for="date">Appointment Date</label>
        <input type="date" id="date" name="date" required>

        <input type="submit" value="Book Appointment">
    </form>
</div>

<div class="footer">
    <a class="btn" href="https://www.instagram.com/MGGLocalServices/?hl=en" target="_blank">Follow Us on Instagram</a>
</div>

<script src="script.js"></script>

</body>
</html>
