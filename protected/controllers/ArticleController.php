<?php

class ArticleController extends Controller
{
    private $articleIdToTitle = array(
        "1" => "Article #1",
        "2" => "Article #2",
        "3" => "Article #3",
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
        $this->setPageTitle(Yii::app()->name . " | " . $this->articleIdToTitle[$id]);
        $this->render('index');
    }
}