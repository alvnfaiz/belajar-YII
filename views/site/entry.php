<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;

    $form = ActiveForm::begin(['id' => 'entry-form']);
    echo $form->field($model, 'name');
    echo $form->field($model, 'email');
    ?>
    <div class="form-group">
        <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
    </div>
    <?php ActiveForm::end();?>
