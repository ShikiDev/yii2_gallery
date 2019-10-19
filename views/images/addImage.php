<div class="row">
    <div class="col">
        <h2>Добавление изображения</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <?php $form = \yii\bootstrap\ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]);?>
            <?php echo $form->field($model,'img_file')->fileInput();?>
            <?php echo $form->field($model, 'email');?>
            <?php echo $form->field($model,'describe')->textarea(['rows' => 3]);?>
            <?php echo \yii\bootstrap\Html::submitButton('Сохранить',['class' => 'btn btn-primary']);?>
            <?php \yii\bootstrap\ActiveForm::end();?>
        </div>
    </div>
</div>
