<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login/manager" method="post">
        <div>
            <div>
                <label for="input-username">Username:</label>
                <input type="text" name="username" id="input-username" placeholder="Username">
            </div>
            <div>
                <label for="input-email">Email:</label>
                <input type="text" name="email" id="input-email" placeholder="Email">
            </div>
            <div>
                <label for="input-password">Senha:</label>
                <input type="text" name="password" id="input-password" placeholder="Password">
            </div>
        </div>
        <input type="submit" name="submit_login" value="Login">
    </form>
</body>
</html>