<?php
/**
 * @var \yii\web\View $this
 * @var \yii\widgets\ActiveForm $form
 * @var \flip_id\yii2_queue\gii\Generator $generator
 */
?>
<?= $form->field($generator, 'jobClass')->textInput(['autofocus' => true]) ?>
<?= $form->field($generator, 'properties') ?>
<?= $form->field($generator, 'retryable')->checkbox() ?>
<?= $form->field($generator, 'ns') ?>
<?= $form->field($generator, 'baseClass') ?>
