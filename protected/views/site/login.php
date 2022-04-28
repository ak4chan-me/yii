<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>
<div class="row justify-content-md-center" >
	<div class="col-md-auto border border-primary p-4" style="width:30%">
		<h1>Login</h1>

		<p>Harap login dengan kredensial Anda:</p>

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<div class="row">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
				<p class="hint">
					Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
				</p>
			</div>

			<div class="row rememberMe">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>

			<div class="mt-3">
				<?php echo CHtml::submitButton('Login'); ?>
			</div>
			<div class="mt-5">
				<p>
					Belum memiliki akun? Silahkan registrasi 			
					<?php echo CHtml::link('Disini',array('site/registrasi')); ?>

				</p>
			</div>
		<?php $this->endWidget(); ?>
	</div><!-- form -->
</div><!-- form -->
