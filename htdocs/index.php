<?php
include "header.php";
include "classes/dbcontroller.php"
?>

    <form style="width: 40%; margin: 30px"  method="POST" action="index.php">
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Адрес электронной почты</label>
            <input type="tel" class="form-control" name="inputPhoneNumber" required/>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword">
            <div id="passwordHelp" class="form-text">Минимум 8 символов в пароле</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="requiredCheck" required>
            <label class="form-check-label" for="exampleCheck1">Принимаю <u>условия пользования</u></label>
        </div>
        <button type="submit" name="send" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</body>

</html>