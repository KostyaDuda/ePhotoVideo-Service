<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Сворення вакансії</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $form = ActiveForm::begin(); ?>
<div class="container">
      <?= $form->field($model, 'title')->textInput()->label("Заголовок")?>
      <?= $form->field($model, 'location')->textInput()->label("Місто")?>
      <?= $form->field($model, 'desciption')->textInput()->label("Опис")?>
      <?= $form->field($model, 'price')->textInput(['placeholder'=>'$'])->label("Ціна")?>
     

      <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зберегти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
</div>
         <?php ActiveForm::end(); ?>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>

