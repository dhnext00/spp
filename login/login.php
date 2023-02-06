<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dhini.css">
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Login</h2>
                <div class="underline-title">
                    </div>
                </div>

                <form method="POST" class="form">
                    <label for="user-email" style="padding-top: 13px">&nbsp;
                    username</label>
                    
                    <input id="user-email" class="form-content" type="text" name="username" placholder="username" required>
                    <div class="form-border">

                    <label for="user-password" style="padding-top: 22px">&nbsp;
                    password</label>

                    <input id="user-password" class="form-content" type="password" name="password" placholder="password" required>
                    <div class="form-border">
                        <a href="#">

                    <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                    <a href="#" id="sign-up">Belum punya akun</a>
                

                    </div>
                </form>
            </div>
    </div>
</body>
</html>