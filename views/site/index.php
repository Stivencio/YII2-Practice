<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

Hi

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'n1') ?>
<?= $form->field($model, 'n2') ?>

<div class="form-group">
    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
</div>

<?php
if($message){

    echo Html::tag('div',Html::encode($message),['class'=>'alert alert-danger'] );

}

?>

<?php ActiveForm::end(); ?>