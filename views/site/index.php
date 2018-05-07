<?php
/**
 * @var $model
 */
namespace realize\base;
?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    php
</nav>

<main role="main" class="container">

    <form method="POST" action="index.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="e_mail" aria-describedby="emailHelp" placeholder="Почта" value="<?php echo $model->e_mail ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Пароль" value="<?php echo $model->password ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Подтвердите пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword" name="confirm_password" placeholder="Пароль" value="<?php echo $model->confirm_password ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="user_name" placeholder="Введите логин" value="<?php echo $model->user_name ?>">
        </div>
        <label for="formGroupExampleInput">Ваш пол</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="sex_m" <?php echo $model->sex == 'sex_m' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineRadio1">М</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="sex_w" <?php echo $model->sex == 'sex_w' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineRadio2">Ж</label>
        </div>
        <div class="form-check">
            <label class="form-check-label" for="exampleCheck1">Cзнакомство с языками программирования</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1" name="knownJs" <?php echo $model->knownJs == 'on' ? 'checked' : '' ?>>
            <label class="custom-control-label" for="customCheck1">PHP</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2" name="knownPhp" <?php echo $model->knownPhp == 'on' ? 'checked' : '' ?>>
            <label class="custom-control-label" for="customCheck2">JS</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck3" name="knownCpp" <?php echo $model->knownCpp == 'on' ? 'checked' : '' ?>>
            <label class="custom-control-label" for="customCheck3">C++</label>
        </div>
        <div class="form-group">
            <label for="comment">О себе:</label>
            <textarea class="form-control" rows="5" id="comment" name="about"><?php echo $model->about ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</main>
