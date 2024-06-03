<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sending</title>
    <!-- <link rel="stylesheet" href="CSS/email.css"> -->

    <style>
        * {
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #32cd9c;

        }

        .container {
            width: 350px;
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }

        .container input {
            width: 100px;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #777777;
            margin-bottom: 20px;
            font-size: 16px;
            outline: none;
        }

        .btn {
            border: none !important;
            cursor: pointer;
            background-color: #32cd9c;
            margin: 15px 0;
            font-size: 16px;
            width: 100%;
            padding: 14px;
        }

        .btn:hover {
            background-color: #1f7d5f;
            color: white;
        }

        .footer {
            position: sticky;
            bottom: 0;
            background-color: #333;
            color: #fff;
            padding-left: 40%;
            padding-right: 40%;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>تواصل معنا</h2>
        <h2>Get in Touch</h2>
        <!-- <form onsubmit="emailSend(); reset(); return false;"> -->
        <form action="/action_index.php" method="get"></form>
        <input type="text" id="name" name="name" placeholder="name" required><br>



       <input type="phone" id="number" name="phone" placeholder="phone" required><br> 


        <input type="email" id="email" name="email" placeholder="email" required>


        <button type="submit" class="btn">إرسال</button>

        </form>

        <footer class="footer">

            <span class="nowrap">Copyright &copy;<time id="year"></time></span>
            <span class="nowrap">IdyllAc</span>
        </footer>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <script src="index.js"></script>

</body>

</html>