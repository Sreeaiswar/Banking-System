<!Doctype html>
<html>
    <head>
        <title>Admin Page</title>
    </head>
    <style>
        *{
            font-family: 'Poppins',sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .container{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
        }
        .container .content {
            text-align: center;
        }
        .container .content h3{
            font-size: 30px;
            
        }
    </style>
    <body>
        <div class="container">
            <div class="content">
                <h3>Hi <span>Admin </span></h3>
                <h1>Welcome<span></span></h1>
                <p>This is an Admin Page</p>
                <a href="\Login_form.php" class="btn">Login</a>
                <a href="\Register_form.php" class="btn">Register</a>
                <a href="\Logout.php" class="btn">Logout</a>
            </div>
        </div>

    </body>
</html>