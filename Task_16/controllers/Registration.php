<?php

namespace controllers;
require __DIR__ . '/../../vendor/autoload.php';

use models\Users;

class Registration extends Users
{
    protected string $pageTitle = 'Registration';

    public function main($method): array
    {
        $arrReturn = [
            'pathToView' => 'v_reg',
            'title' => $this->pageTitle
        ];

        if ($method === 'POST') {
            $fields = (new \core\Arr)->extractFields($_POST, ['firstName', 'lastName', 'email', 'emailConfirm',
                'password', 'passwordConfirm']);

            $errors = (new \core\Validates)->validateRegistration($fields);
            if (empty($errors)) {
                $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
                unset($fields['emailConfirm'], $fields['passwordConfirm']);

                $this->userAdd($fields);
                $user = $this->usersOne($fields['email']);

                $arrReturn = [
                    'pathToView' => 'v_hello',
                    'title' => 'Hello',
                    'user' => $user
                ];
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