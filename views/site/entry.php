<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    $form = ActiveForm::begin();
    $form->field($model, 'name');
    $form->field($model, 'email');
    ?>
    <div class="form-group">
        <?php Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
    </div>
    <?php ActiveForm::end();?>
