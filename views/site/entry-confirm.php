<?php
    use yii\helpers\Html;
?>
<p>Terima Kasih sudah menginputkan form</p>
<ul>
    <li><label>Name </label> : <?= Html::encode($model->name); ?></li>
    <li><label>Name </label> : <?= Html::encode($model->email); ?></li>
</ul>