<?php

class AdminController extends DwGxController {


	public function actionCreate() {

        if(!DwzHelper::IsDwzAjaxRequest())
			throw new CHttpException(405,Yii::t('yii','Your method is not allowed.'));
		
		$model = new User;



		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

			if ($model->save()) {
				
					$this->dwzOk('保存成功！');
			}


		}
		$this->render('dwzcreate', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'User');


		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

			if ($model->save()) {
				
				$this->dwzOk('更新完成！');

			}else
				$this->dwzError($model);

		}

		$this->render('dwzupdate', array(
				'model' => $model,
				));
	}

	public function actionDelete($id=null) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			if($id===null&&isset($_POST['id']))
			{
				$id = explode(',',$_POST['id']);
			}
			User::model()->deleteByPk($id);
			

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
			else{
				if(DwzHelper::IsDwzAjaxRequest())
					$this->dwzOk('删除成功！',200,'','','');
				
					
			}
		} else
			$this->dwzError('Your request is invalid.',300);
	}



	public function actionAdmin() {
		if(!DwzHelper::IsDwzAjaxRequest())
			throw new CHttpException(405,Yii::t('yii','Your method is not allowed.'));
		

		$model = new User('search');
		$model->unsetAttributes();

		if (isset($_POST['User']))
			$model->setAttributes($_POST['User']);

		$this->render('dwzadmin', array(
			'model' => $model,
		));
	}


}