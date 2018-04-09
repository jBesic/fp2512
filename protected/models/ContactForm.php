<?php

class ContactForm extends CFormModel
{
    public $fullName;
    public $email;
    public $message;

    public function rules()
    {
        return array(
            array('$fullName, $email, $email', 'required'),
            array('$email', 'email'),
        );
    }

    public function successMessage()
    {
        return 'Message is sent successfully.';
    }
}