<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penduduk-form',
	'focus'=>array($model,'nik'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NIK'); ?>
		<?php echo $form->textField($model,'nik',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama Lengkap'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tempat Lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal Lahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'tanggal_lahir',
		    //'scriptFile'=>'jquery-ui.min.js',
		    //'scriptUrl'=>Yii::app()->theme->baseUrl.'/assets/jui/js/',
		    'language'=>'id',
		    // additional javascript options for the date picker plugin
		    'options'=>array(
		        'showAnim'=>'fold',
		        'changeMonth'=>true,
		        'changeYear'=>true,
		    ),
		    'htmlOptions'=>array(
		        'style'=>'height:20px;'
		    ),
		)); ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kewarganegaraan'); ?>
		<?php echo $form->textField($model,'kewarganegaraan',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'kewarganegaraan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sidik_jari'); ?>
		<?php echo $form->textField($model,'sidik_jari',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sidik_jari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jenis_kelamin'); ?>
		<?php echo $form->textField($model,'id_jenis_kelamin'); ?>
		<?php echo $form->error($model,'id_jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_golongan_darah'); ?>
		<?php echo $form->textField($model,'id_golongan_darah'); ?>
		<?php echo $form->error($model,'id_golongan_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_agama'); ?>
		<?php echo $form->textField($model,'id_agama'); ?>
		<?php echo $form->error($model,'id_agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_kawin'); ?>
		<?php echo $form->textField($model,'id_status_kawin'); ?>
		<?php echo $form->error($model,'id_status_kawin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_tinggal'); ?>
		<?php echo $form->textField($model,'id_status_tinggal'); ?>
		<?php echo $form->error($model,'id_status_tinggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pendidikan'); ?>
		<?php echo $form->textField($model,'id_pendidikan'); ?>
		<?php echo $form->error($model,'id_pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pekerjaan'); ?>
		<?php echo $form->textField($model,'id_pekerjaan'); ?>
		<?php echo $form->error($model,'id_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cacat'); ?>
		<?php echo $form->textField($model,'id_cacat'); ?>
		<?php echo $form->error($model,'id_cacat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_kependudukan'); ?>
		<?php echo $form->textField($model,'id_status_kependudukan'); ?>
		<?php echo $form->error($model,'id_status_kependudukan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_temporary'); ?>
		<?php echo $form->textField($model,'is_temporary'); ?>
		<?php echo $form->error($model,'is_temporary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disimpan'); ?>
		<?php echo $form->textField($model,'disimpan'); ?>
		<?php echo $form->error($model,'disimpan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diperbarui'); ?>
		<?php echo $form->textField($model,'diperbarui'); ?>
		<?php echo $form->error($model,'diperbarui'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->