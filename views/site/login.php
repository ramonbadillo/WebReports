<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';

?>






<div class="main-content container-fluid">
    <div class="splash-container">
        <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading"><img src="myassets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"></div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>
                
                
                <div class="form-group">
                    <input id="database" type="text" placeholder="Database" class="form-control">
                </div>
                
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                
                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>
                    
                    <div class="form-group login-submit">
                        
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-xl', 'name' => 'login-button']) ?>
                        
                    </div>
                    
                    <?php ActiveForm::end(); ?>
                    
                    
                </div>
            </div>
            <div class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div>
        </div>
    </div>
