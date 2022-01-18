<?php

namespace controllers;

use models\Users;

class Registration extends Users
{
    protected string $pageTitle = 'Registration';

    public function signUp(): array
    {
        $arrReturn = [
            'pathToView' => 'v_reg',
            'title' => $this->pageTitle
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fields = (new \core\Arr)->extractFields($_POST, ['firstName', 'lastName', 'email', 'emailConfirm',
                'password', 'passwordConfirm']);

            $errors = (new \core\Validates)->validateRegistration($fields);
            if (empty($errors)) {
                $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
                unset($fields['emailConfirm'], $fields['passwordConfirm']);

                $this->userAdd($fields);

                header("Location: ../");
                exit();
            } else {
                $arrReturn['errors'] = $errors;
                $arrReturn['fields'] = $fields;
            }
        } else {
            $errors = [];
            $fields = [];
            $arrReturn['errors'] = $errors;
            $arrReturn['fields'] = $fields;
        }

        return $arrReturn;
    }
}