<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>     
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items:  center;
        min-height: 100vh;
        background:  #F3E5AB;
    }

    .wrapper{
        width: 420px;
        background: green ;
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
    }

    .wrapper h1{
        font-size: 36px;
        text-align: center;
    }

    .wrapper .input-box{
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }

    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: #fff;
        padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder{
        color: #fff;
    }

    .input-box i{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }

    .wrapper .btn{
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .wrapper .reset-link{
        font-size: 14.5px;
        text-align:  center;
        margin: 20px 0 15px;
    }

    .reset-link a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        cursor: pointer;
    }

    .reset-link a:hover{
        text-decoration: underline;
    }
    </style>
    <title>Editor Login</title>
</head>
<body>
    <div class="wrapper">
    <form action="authenticate.php" method="POST">
    <h1>Dish Delight Editor Login Page</h1>
    
    <div class="input-box">
    <input type="text" name="editorId" id="editorId" placeholder="Editor ID" required><br>
    </div>
    
    <div class="input-box">
    <input type="password" name="editorPw" id="editorPw" placeholder="Password" required><br><br>
    </div>

    <div class="register-link">
        <p>Don't have an account? <a href="editor_register.php">Register</a></p>
    </div>
    <br>
    <button type="submit" name="submit" class="btn">Login</button>
    
    <div class="reset-link">
    <a href="javascript:void(0);" onclick="document.getElementById('editorId').value=''; document.getElementById('editorPw').value='';">Reset</a>
    </div>
</form>
    </div>
</body>
</html>