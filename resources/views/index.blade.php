<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="auth-form">
            <h2>Registration</h2>
            <form action="" method="post">
                @csrf
                <div class="field">
                    <label for="">E-mail</label>
                    <input type="email" name="email">
                </div>
                <div class="field">
                    <label for="">Password</label>
                    <input type="password" name="email">
                </div>
                <div class="field">
                    <label for="">Confirm password</label>
                    <input type="password" name="email">
                </div>
                <br>
                <div class="field">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

    <style>
        .container {
            max-width: 1024px;
            margin: 0 auto;
        }

        .auth-form {
            text-align: center;
            margin-top: 30%;
        }

        .auth-form form {
            max-width: 500px;
            margin: auto;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        .field label {
            text-align: left;
        }

    </style>
</body>

</html>
