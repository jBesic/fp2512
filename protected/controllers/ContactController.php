<?php

class ContactController extends Controller
{
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->setPageTitle(Yii::app()->name . " | Contact");

        // Contact form
        $model = new ContactForm();
        if (!$model->hasErrors()) {

        }

        $this->render('index', array('model' => $model));
    }
}