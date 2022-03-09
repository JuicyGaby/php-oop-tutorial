<?php 

class UserValidator {
    //variable that holds the data of the user
    private $data;
    //if there's an error we can push it to this and display it
    private $error = [];

    private static $fields = ['username', 'email'];

    public function __construct($postData) {
    $this->data = $postData;
        
    }
    //validates the form
    public function validateForm () {
        foreach(self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in the data");
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();
        return $this->error;
    }
    //validates the Username
    private function validateUsername() {
        //trim method clears the white space
        $value = trim($this->data['username']);

        if (empty($value)) {
            $this->addError('username', 'username cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $value)){
                $this->addError('username','username must be 6-12 chars & alphanumeric');
            }
        }
    }
    //validates the email
    private function validateEmail() {
        $value = trim($this->data['email']);

        if (empty($value)) {
            $this->addError('email', 'email cannot be empty');
        } else {
            if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                $this->addError('email','email must be a valid email');
            }
        }
    }
    private function addError($key, $val) {
        $this->error[$key] = $val;
    }

}

 ?>