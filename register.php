<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container-fluid wrapper">
        <div class="container">
            <div class="col d-flex align-items-center justify-content-center vh-100">
                <form class="form-control row input-box" action="db_connection.php" method="post">
                    <h3 class="text-center p-4">Register Account</h3>
                    <div class="row input-field">
                        <label for="username">Name</label>
                        <input type="text" id="username" name="username" class="input" autocomplete="off" required>
                    </div>
                    <div class="row input-field">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="input" autocomplete="off" required>
                    </div>
                    <div class="row input-field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="input" autocomplete="off" required>
                    </div>
                    <button class="btn btn-primary custom-btn" type="submit" name="submit" id="register">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>