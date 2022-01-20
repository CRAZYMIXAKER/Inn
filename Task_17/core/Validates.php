<?php

namespace core;

use models\Users;

class Validates extends Users
{
    protected string $emailPattern = '/^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    protected string $passwordPattern = '/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[@$!%*?&-_#]).{6,32}$/';

    public function validateRegistration(array &$fields): array
    {
        $errors = [];

        foreach ($fields as $key => $item) {
            if (empty($item)) {
                $errors[$key] = "Fill in the field $key";
            }
        }

        if ($this->usersOne($fields['email']) !== null) {
            $errors['email'] = 'This E-mail is already taken, please order another';
        }

        if ($fields['email'] != $fields['emailConfirm']) {
            $errors['emailConfirm'] = 'E-mail and E-mail Confirm must match';
        }

        if (!preg_match($this->emailPattern, $fields['email'], $matches)) {
            $errors['emailConfirm'] = 'Enter E-mail by template';
        }

        if ($fields['password'] != $fields['passwordConfirm']) {
            $errors['passwordConfirm'] = 'Password and Password Confirm must match';
        }

        if (!preg_match($this->passwordPattern, $fields['password'], $matches)) {
            $errors['passwordConfirm'] = 'Enter the password according to the pattern (at least 1 lowercase 
            Latin letter, at least 1 capital Latin letter, at least 1 digit, at least 1 special character and 
            password length, must be no less than 6 characters and no more than 32)';
        }

        foreach ($fields as $key => $item) {
            $fields[$key] = htmlspecialchars($item);
        }

        return $errors;
    }

    public function fileUpload($file): string
    {
        $error = '';

        if ($file['error'] == 2) {// file size limit
            $error = 'Exceeding the allowed file size';
        } elseif (is_executable($file['tmp_name'])) {// checking the executable
            $error = 'Executable file';
        } elseif (disk_free_space("/") < $file['size']) {// not enough space for the file
            $error = 'Not enough memory';
        }

        return $error;
    }
}