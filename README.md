# Inn

php: 8.0
E-mail: user1@test.com, user2@test.com
password: your_hash_here1, your_hash_here2

Create authentication form.

Authentication form must contain email and password fields. You should perform client-side validation of correct email.
Password typing should be hidden. Enable submit button only if all fields are filled in together with correct email.
Don't use AJAX to send request to back-end. Authenticate user over the file below:

<?php


return [

'user1@test.com' => [

'name' => 'John',

'password' => 'your_hash_here1', // use password_hash() to generate password in your code

],

'user2@test.com' => [

'name' => 'Jane',

'password' => 'your_hash_here2', // use password_hash() to generate password in your code

],

];

If user authenticated successfully, greet him by message 'Welcome back, {user name}!'. If no, show the message 'Login is incorrect.'.

You should implement this application in OOP. Split logic and templates into separate files. Logic files should contain PHP code only, while templates should contain only HTML and JS. Use separate CSS files for styles.