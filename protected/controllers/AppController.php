<?php

class AppController extends NController {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            'index'=>'application.controllers.app.IndexAction',
            'activities'=>'application.controllers.app.ActivitiesAction',
            'activities_p'=>'application.controllers.app.ActivitiespAction',
            'robot'=>'application.controllers.app.RobotAction',
            'take_out'=>'application.controllers.app.TakeoutAction',
            'take_out_p'=>'application.controllers.app.TakeoutpAction',
            'bus'=>'application.controllers.app.BusAction',
            'bus_p'=>'application.controllers.app.BuspAction',
            'sel1'=>'application.controllers.app.Sel1Action',
            'sel2'=>'application.controllers.app.Sel2Action',
            'timetable_p'=>'application.controllers.app.TimetablepAction',
            'about'=>'application.controllers.app.AboutAction',
            'jobs'=>'application.controllers.app.JobsAction',
            'jobs_p'=>'application.controllers.app.JobspAction',
            'apply'=>'application.controllers.app.ApplyAction',
            'organizations'=>'application.controllers.app.OrganizationsAction',
            'organizations_p'=>'application.controllers.app.OrganizationspAction',
        );
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        
    }



}
