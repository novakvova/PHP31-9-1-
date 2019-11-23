<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "_styles.php"; ?>
</head>
<body>
<?php include "_navbar.php"; ?>
<?php include "helpers/input-helper.php"; ?>

<div class="container">
    <div class="row mt-3">
        <div class="offset-md-3 col-md-6">
            <h3 class="text-center">Реєстрація</h3>
            <form method="post">

                <?php create_input("email", "Електронна пошта", "email"); ?>

                <?php create_input("phone", "Телефон", "text"); ?>

                <?php create_input("password", "Пароль", "password"); ?>

                <?php create_input("confirm_password", "Підтвердження пароль", "password"); ?>

                <?php create_input("image", "Фото", "file"); ?>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Реєструватися"/>
                </div>
                <div class="form-group">
                    <a href="login.php" class="ForgetPwd">Перейти в логін</a>
                </div>
            </form>
        </div>

    </div>
</div>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>