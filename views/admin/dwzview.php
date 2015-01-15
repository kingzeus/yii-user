
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



	<div class="pageFormContent" layoutH="56">

		<dl>
		<?php echo $form->labelEx($model,'username'); ?>
		<dd><?php echo $form->textField($model, 'username', array('readOnly'=>'readOnly')); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'password'); ?>
		<dd><?php echo $form->passwordField($model, 'password', array('readOnly'=>'readOnly')); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'email'); ?>
		<dd><?php echo $form->textField($model, 'email', array('readOnly'=>'readOnly')); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'activkey'); ?>
		<dd><?php echo $form->textField($model, 'activkey', array('readOnly'=>'readOnly')); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'createtime'); ?>
		<dd><?php echo $form->textField($model, 'createtime',array('readOnly'=>'readOnly')); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'lastvisit'); ?>
		<dd><?php echo $form->textField($model, 'lastvisit',array('readOnly'=>'readOnly')); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'superuser'); ?>
		<dd><?php echo $form->textField($model, 'superuser',array('readOnly'=>'readOnly','value'=>$model->GetAdminStatus())); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
		<dl>
		<?php echo $form->labelEx($model,'status'); ?>
		<dd><?php echo $form->textField($model, 'status',array('readOnly'=>'readOnly','value'=>$model->GetUserStatus())); ?>
		<?php echo $form->info(); ?></dd>
		</dl>
	   
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->