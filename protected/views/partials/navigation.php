<nav class="navbar jb-navbar navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header jb-primary-bg-color">
            <button type="button" class="navbar-toggle jb-navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-navbar"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-menu-hamburger"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </button>
            <a class="navbar-brand"
               href="<?php echo Yii::app()->getBaseUrl(); ?>"><?php echo Yii::app()->name; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navbar">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'htmlOptions' => array(
                    'class' => 'nav navbar-nav'
                ),
                'items' => array(
                    // Important: you need to specify url as 'controller/action',
                    // not just as 'controller' even if default action is used.
                    array('label' => 'Home', 'url' => array('site/index')),
                    array('label' => 'Projects', 'url' => array('projects/index')),
                    array('label' => 'Articles', 'url' => array('articles/index')),
                    array('label' => 'Contact', 'url' => array('contact/index')),
                ),
            ));
            ?>
        </div>
    </div>
</nav>