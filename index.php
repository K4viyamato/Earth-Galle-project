<html>
<head>
    <title>Formt</title>
    <style>
        html {
            display: grid;
            }

        body {
            margin: auto;
            background-color: bisque;
            }

        form {
            border-radius: 10px;
            padding: 20px 50px;
            margin: 200px;
            text-align: left;
            background-color: azure;
        }

        
        
    </style>
</head>
<body>

    <h1><u>Earth Bit Galle</u></h1>
    <h3>This is open to all earth institute studens.</h3>

    <form action="server.php" method="post">
    <h1>EUC Portal</h1>
        Name : <input type="text" name="name" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>"><br><br>
        Password : <input type="password" name="pwd" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>"><br><br>
        <input type="checkbox" name="remember"> Remember me <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>