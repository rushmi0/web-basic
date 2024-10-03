<!DOCTYPE html>
<html>
<head>
    <title>Quick Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        h3 {
            color: red;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Quick Contact</h3>

    <form method="post" action="contact_process.php">
        <input type="text" name="name" placeholder="Name" required> <br>
        <input type="email" name="email" placeholder="E-mail" required> <br>
        <textarea name="message" placeholder="Message" required></textarea> <br>
        <input type="submit" value="Submit">
    </form>
</div>



</body>
</html>
