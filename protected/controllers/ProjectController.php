<?php

class ProjectController extends Controller
{
    private $projectIdToTitle = array(
        "1" => "Project #1",
        "2" => "Project #2",
        "3" => "Project #3",
    );

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     * @param String $articleId Article ID.
     */
    public function actionIndex($id)
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->setPageTitle(Yii::app()->name . " | " . $this->projectIdToTitle[$id]);
        $this->render('index');
    }
}