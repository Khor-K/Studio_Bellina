<?php require "../header.php"?>
<form style="width: 40%; margin: 30px" id="ajax_form" action="javascript:void(null);" onsubmit="registration()">
    <div class="mb-3">
        <label for="inputPhoneNumber" class="form-label">Номер телефона</label>
        <input type="tel" class="form-control" name="inputPhoneNumber" required/>
    </div>
    <div class="mb-3">
        <label for="inputPassword" class="form-label">Пароль</label>
        <input type="password" class="form-control" name="inputPassword">
        <div id="passwordHelp" class="form-text">Минимум 8 символов в пароле</div>
    </div>
    <button name="btn" id="btn" class="btn btn-primary">Зарегистрироваться</button>
</form>

<div id="results"></div>

<script src="ajaxRegistration.js"></script>
<?php require "../footer.php"?>