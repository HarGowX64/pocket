<?php

class AppdController extends Controller
{

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			// 'captcha'=>array(
				// 'class'=>'CCaptchaAction',
				// 'backColor'=>0xFFFFFF,
			// ),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		
	}

	public function actionIndex()
	{
		$this->render("index");
	}
	public function actionBus(){
            $model = new CActiveDataProvider('Bus');
            $this->render("bus",array(
                'model'=>$model,
            ));
	}
	public function actionBus_p(){
            $model = Bus::model()->findbyPk($_GET['id']);
            $this->render("bus_p",array(
                'model'=>$model,
            ));
	}
	public function actionTake_out(){
            $dataprovider = new CActiveDataProvider('Takeout');
            $this->render("take_out",array(
                'dataprovider'=>$dataprovider,
            ));
	}
	public function actionTake_out_p(){
            $model = Takeout::model()->findbyPk($_GET['id']);
             $this->render("take_out_p",array(
                'model'=>$model,
            ));
	}
	public function actionOrganizations()
	{
		$this->render("organizations");
	}
	public function actionOrganizations_p()
	{
		$this->render("organizations_p");
	}
	public function actionAbout()
	{
		$this->render("about");
	}
	public function actionTimetable_p()
	{
		$this->render("timetable_p");
	}
	public function actionSel1()
	{
		$this->render("sel1");
	}
	public function actionSel2()
	{
		$this->render("sel2");
	}
	public function actionRobot()
	{
		$this->render("robot");
	}
	public function actionJobs()
	{
		$this->render("jobs");
	}
	public function actionJobs_p()
	{
		$this->render("jobs_p");
	}
	public function actionActivities()
	{
		$this->render("activities");
	}
	public function actionActivities_p()
	{
		$this->render("activities_p");
	}
	public function actionApply()
	{
		$this->render("apply");
	}
}
