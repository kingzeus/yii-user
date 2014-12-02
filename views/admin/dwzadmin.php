


<?php
	$pager = array();
	$pageSize=10;
	$currentPage=0;
	if(isset($_POST['numPerPage']))
	{
		$pager['pageSize'] = $_POST['numPerPage'];
		$pageSize = $_POST['numPerPage'];
	}
	if(isset($_POST['pageNum']))
	{
		$pager['currentPage'] = $_POST['pageNum']-1;
		$currentPage = $_POST['pageNum']-1;
	}
	 $this->widget('ext.dwz.DwzAjaxGridView', array(
	'id' => 'user-grid',
	'template'=>"{items}\n{pager}",
	'pageSize'=>$pageSize,
	 'currentPage'=>$currentPage,
	'pager'=>array	(
			'class'=>'DwzPager',
			'showWrap'=>true,
					),
	
	//'showToolbar'=>false,		// 是否显示工具条
	//'showCheckbox'=>false,		// 是否显示多选框
		'toolbar'=>array(
				CHtml::link(CHtml::tag('span',array(),yii::t('admin','Create')),Yii::app()->controller->createUrl('create'),array('class'=>'add','target'=>'dialog')),
				//CHtml::link(CHtml::tag('span',array(),yii::t('zii','Delete')),Yii::app()->controller->createUrl('delete',array('id'=>'{'.$model->getTableSchema()->primaryKey.'}')),array('class'=>'delete','target'=>'ajaxTodo','title'=>Yii::t('zii','Are you sure you want to delete this item?'))),
				CHtml::link(CHtml::tag('span',array(),yii::t('admin','Delete')),Yii::app()->controller->createUrl('delete',array()),array('class'=>'delete','rel'=>$model->getTableSchema()->primaryKey,'target'=>'selectedTodo','posttype'=>'string','title'=>Yii::t('zii','Are you sure you want to delete this item?'))),
				
				CHtml::link(CHtml::tag('span',array(),Yii::t('admin','Update')),Yii::app()->controller->createUrl('update',array('id'=>'{'.$model->getTableSchema()->primaryKey.'}')),array('class'=>'edit','target'=>'dialog')),
				),
	//'showOperationButton'=>false,		// 是否显示操作条
	//'operationReadOnly'=>true,		// 只读模式
	//'showSearchBar'=>false,		// 显示搜索条
	'dataProvider' => $model->search($pager),
	'showFilter'=>false,		// 显示过滤器
	'filter' => $model,
	//'enableSorting'=>false,		// 列排序
	'columns' => array(
		'id',
		'username',
		'email',
	    array(
	        'name'=>'createtime',
	        'type' => 'date',
	    ),
	    array(
	        'name'=>'lastvisit',
	        'type' => 'date',
	       ),
	    array(
	        'name'=>'superuser',
	        'value'=>'$data->GetAdminStatus()',
	    ),
		array(
		    'name'=>'status',
		    'value'=>'$data->GetUserStatus()',
		    ),
	),
)); ?>

