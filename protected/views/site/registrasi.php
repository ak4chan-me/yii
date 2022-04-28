<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>
<div class="row justify-content-md-center">
	<div class="col-md-auto">
		<h1>Registrasi</h1>

		<p>Harap mengisikan biodata Anda:</p>
		<?php 
		if($pesan!==''){
			echo '<div class="alert alert-danger">'.$pesan.'</div>';
		}		
		?>
		<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<div class="form-group">
				<?php echo $form->labelEx($nama_yang_dikirimkan,'userId'); ?>
				<?php echo         $form->textField($nama_yang_dikirimkan,'userId',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))        ; ?>
				<small class="form-text text-muted">
					<?php echo $form->error($nama_yang_dikirimkan,'userId'); ?>
				</small>
			</div>

				 
			<div class="form-group">
				<?php echo $form->labelEx($nama_yang_dikirimkan,'userNama'); ?>
				<?php echo         $form->textField($nama_yang_dikirimkan,'userNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>80))        ; ?>
				<small class="form-text text-muted">
					<?php echo $form->error($nama_yang_dikirimkan,'userNama'); ?>
				</small>
			</div>

				 
			<div class="form-group">
				<?php echo $form->labelEx($nama_yang_dikirimkan,'userPassword'); ?>
				<?php echo         $form->textField($nama_yang_dikirimkan,'userPassword',array('class'=>"form-control"))        ; ?>
				<small class="form-text text-muted">
					<?php echo $form->error($nama_yang_dikirimkan,'userPassword'); ?>
				</small>
			</div>

				 

			

			<div class="row buttons">
				<?php echo CHtml::submitButton('Registrasi'); ?>
			</div>

		<?php $this->endWidget(); ?>
		</div><!-- form -->
    </div>
	
</div>