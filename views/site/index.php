<?php
/**
 * @var $model
 */
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    php
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1>php</h1>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Не в классе:</label>
            <input type="text" name="nam"  class="form-control" value="<?= $model->nam ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter num">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Почта:</label>
            <input type="email" name="email" value="<?= $model->email ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль:</label>
            <input type="password" name="password" value="<?= $model->password ?>" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
        </div>
        <div class="form-group">
            <input type="password" name="confirmPassword" value="<?= $model->confirmPassword ?>" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Подтверждение пароля">
            <div class="help-block with-errors"></div>
        </div>
        Пол:
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" value="M" id="inlineRadio1" <?= $model->sex == 'M' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineRadio1">М</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" value="F" id="inlineRadio2" <?= $model->sex == 'F' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineRadio2">Ж</label>
        </div>
        <br>
        Языки программирования:
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="lang[PHP]" value="PHP" <?= $model->lang['PHP'] == 'PHP' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineCheckbox1">PHP</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="lang[JS]" value="JS" <?= $model->lang['JS'] == 'JS' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineCheckbox2">JS</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="lang[Python]" value="Python" <?= $model->lang['Python'] == 'Python' ? 'checked' : '' ?>>
            <label class="form-check-label" for="inlineCheckbox2">Python</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Расскажите о себе:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"><?= $model->about ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

    <br>

    <div class="card text-white bg-success mb-8">
        <div class="card-header"><h4>Задание 1</h4></div>
        <div class="card-body">
            <h5 class="card-title">Реализовать метод load()</h5>

            <p class="card-text">В своей базовой моделе необходимо реализовать метод load</p>
            <p class="card-text">Описание находится в абстрактном классе.</p>
        </div>
    </div>

    <br>

    <div class="card text-white bg-success mb-8">
        <div class="card-header"><h4>Задание 2</h4></div>
        <div class="card-body">
            <h5 class="card-title">
                Сверстать форму регистрации пользователя <br>
                twitter bootstrap 3 или twitter bootstrap 4
            </h5>

            <p class="card-text"><b>Поля:</b></p>
            <p class="card-text">e-mail: почта пользователя</p>
            <p class="card-text">password: пароль</p>
            <p class="card-text">confirm password: подтверждение пароля</p>
            <p class="card-text">user name: имя пользователя</p>
            <p class="card-text">sex: пол</p>
            <p class="card-text">known languages: знакомство с языками программирования</p>
            <p class="card-text">about: немного текста о себе</p>
        </div>
    </div>

    <br>

    <div class="card text-white bg-success mb-8">
        <div class="card-header"><h4>Задание 3</h4></div>
        <div class="card-body">
            <h5 class="card-title">Заполнить форму результатами обработки метода load()</h5>

            <p class="card-text">В siteController происходит проброс формы в этот view.</p>
            <p class="card-text">Привязать поля формы к полям модели.</p>
            <p class="card-text">Подсказка $model->attribute</p>
        </div>
    </div>

</main>
