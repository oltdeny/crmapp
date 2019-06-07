<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(
    [
        'id' => 'add-customers-form'
    ]);

echo $form->errorSummary([$customer, $phone]);
echo $form->field($customer, 'name');
echo $form->field($customer, 'birth_date');
echo $form->field( $customer, 'notes' ) ;
echo $form->field($phone, 'number');
echo Html::submitButton( 'Submit', ['class' => 'btn btn-primary']);
ActiveForm::end();
