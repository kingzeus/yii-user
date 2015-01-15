
<div class="pageContent">

<?php $form = $this->beginWidget('DwGxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
	'htmlOptions'=>array(
         'class' => 'pageForm required-validate',
         'onsubmit'=>'return validateCallback(this,dialogAjaxDone)'
    )

));
?>


	<div class="pageFormContent nowrap" layoutH="56">

		<dl>
		<?php echo $form->labelEx($model,'username'); ?>
		<dd><?php echo $form->textField($model, 'username', array('maxlength' => 20)); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'password'); ?>
		<dd><?php echo $form->passwordField($model, 'password', array('maxlength' => 128)); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'email'); ?>
		<dd><?php echo $form->textField($model, 'email', array('maxlength' => 128)); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'activkey'); ?>
		<dd><?php echo $form->textField($model, 'activkey', array('maxlength' => 128)); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'createtime'); ?>
		<dd><?php echo $form->textField($model, 'createtime'); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'lastvisit'); ?>
		<dd><?php echo $form->textField($model, 'lastvisit'); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'superuser'); ?>
		<dd><?php echo $form->textField($model, 'superuser'); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'status'); ?>
		<dd><?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
	   
	</div>


<?php 
	$this->widget('ext.dwz.DwzFormBar',array('buttons'=>array(
		'更新'=>array('active'=>true,'type'=>'submit'),
		'取消'=>array('class'=>'close'),
	)));


$this->endWidget(); ?></div><!-- form -->