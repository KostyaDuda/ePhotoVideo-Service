<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h2>Завантаження відео</h2>
<?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'content')->textInput()?>


      <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зберегти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
        
        <?php ActiveForm::end(); ?>
        <h2>Пам'ятка</h2>
        <p> Відео можна завантажувати тільки з сервісу YouTube </p>
        <p> Щоб завантажити відео потрібно YouTube </p>
        <p> 1. Відкрийте відео на YouTube яке бажаєте званатжити </p>
        <p> 2. Натисніть "Поділитись" </p>
        <p> 3. Скопіюйте "хєш-код" посилання відео(Дивись наступний малюнок) </p>
        <p> 4. Скопійований "хєш-код" вставте у текстове поле і натисніть відправити </p>