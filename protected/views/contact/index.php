<section class="jb-section jb-screen-height">
    <h1>Contact</h1>

    <?php $form = $this->beginWidget('CActiveForm'); ?>
        <?php if (!empty($form->errorSummary($model))): ?>
            <div class="alert alert-danger" role="alert"><p><?php echo $form->errorSummary($model); ?></p></div>
        <?php endif; ?>
        <?php if (isset($_POST['ContactForm'])): ?>
            <div class="alert alert-success" role="alert"><p><?php echo $model->successMessage(); ?></p></div>
        <?php endif; ?>
        <div class="form-group">
            <?php echo $form->label($model, 'Full name'); ?>
            <?php echo $form->textField($model, 'fullName', array('class' => 'form-control')) ?>
        </div>
        <div class="form-group">
            <?php echo $form->label($model, 'Email'); ?>
            <?php echo $form->textField($model, 'email', array('class' => 'form-control')) ?>
        </div>
        <div class="form-group">
            <?php echo $form->label($model, 'Message'); ?>
            <?php echo $form->textArea($model, 'message', array('class' => 'form-control', 'rows' => 5)) ?>
        </div>

        <?php echo CHtml::submitButton('Send message', array('class' => 'btn btn-block jb-btn jb-primary-bg-color')); ?>
    <?php $this->endWidget(); ?>
</section>