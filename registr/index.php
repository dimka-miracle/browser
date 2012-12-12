<html>

<head>
    <title>Регистрация</title>
</head>

<body>

<form action="" method="POST"><table>
    <tr>
        <td>Введите Login:</td>
        <td><input type="text" name="name" /></td>
    </tr>
    <tr>
        <td>Введите E-mail:</td>
        <td><input type="text" name="email" /></td>
    </tr>
    <tr>
        <td>Введите пароль:</td>
        <td><input type="text" name="pass" /></td>
    </tr>
    <tr>
        <td>Повторите пароль:</td>
        <td><input type="text" name="confirm_pass" /></td>
    </tr>
</table>

<input type="submit" value="Зарегистрироваться" /
</form>

<?php
include "define.php"; // константы для подключения к БД
    if(!empty($_POST['name'])) //фильтр, чтобы при запуске страницы не было ошибки о необъявленных переменных $name и $email
        {
            $link=mysqli_connect(DB_HOST,DB_ADMIN,DB_PASS,DB_USER);
            $name = mysqli_real_escape_string($link,$_POST['name']);     //Выдернуть из формы стрку Login
            $email = mysqli_real_escape_string($link,$_POST['email']);   //Выдернуть из формы стрку Email

            $query="select * from user where name='$name' OR email='$email' LIMIT 1";
            $result=mysqli_query($link,$query); //Проверка, есть ли такой логин или мыло в БД

            $pattern="/[a-z0-9_\.\-]+@[a-z0-9_\.\-]+\.+[a-z]{2.5}/"; //Шаблон мыла (несколько символов + @ + несколько символов)
            if(!preg_match($pattern,$email))//Если мыло набрано неправильно
                echo "Введите корректный E-mail";
            else
            if(mysqli_affected_rows($link)==True) //Если совпадение есть, то
                echo "Такой логин или Email уже используется";
            else
            if($_POST['pass']!=$_POST['confirm_pass'])// Если пароль и повтор пароля не совпадают, то
                echo "Введённые пароли не совпадают";
            else
            {
                $pass = mysqli_real_escape_string($link,$_POST['pass']);    //Выдернуть из формы стрку Password
                if((!empty($_POST['name']))&&(!empty($_POST['email']))&&(!empty($_POST['pass']))&&(!empty($_POST['confirm_pass']))) //Проверка на заполненность полей формы
                {
                    $query="insert into user (name, email, pass) values ('$name','$email',md5('$pass'))";
                    mysqli_query($link,$query); //добавление юзера в БД

                    echo "Ваш логин: $name"."<br>"."Ваш Email: $email"."<br>"."Ваш пароль: $pass"."<br>";  //Вывести юзеру его данные
                } else
                    echo "Все поля должны быть заполнены.";
            }
            mysqli_close($link);
        }
?>

</body>

</html>