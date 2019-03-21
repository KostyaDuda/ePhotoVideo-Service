<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h2>Сворення обговорення</h2>
<?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'title')->textInput()?>
      <?= $form->field($model, 'text')->textInput()?>
    
      <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зберегти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
         <?php ActiveForm::end(); ?>