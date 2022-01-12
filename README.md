# Inn
Create user registration application.

Create HTML form with 'First Name', 'Last Name', 'Email', 'Confirm Email', 'Password', 'Confirm Password' fields. Perform client-side validation that Email is valid email. Password should contain at leas one small character, at least one capital character, at least one digit, at least one special character and be not less than 6 characters long. 'Confirm Email' and 'Confirm Password' fields should correspond to their parent fields. If user submits non-valid data, the form should be reloaded, but non-valid field together with 'Password' and 'Confirm Password' should be cleared.

Create 'users' table to save new user. Use MySQL database. The table should have following fields:

• id - unsigned int, primary index, auto increment;

• email - varchar, unique, non-empty;

• first_name - varchar, non-empty;

• last_name - varchar, non-empty;

• password - char. The size is based on hash algorithm that you choose;

• created_date - timestamp, current_timestamp;

Use PDO with transactions to interact with database. If an error occurred when adding a user account to the database, display a message about it to the user interface.

Implement MVC pattern for this application where views hold your HTML templates, models hold business logic (interaction with the database) and controllers connect models with views.
E-mail: Admin@gmail.com, password: Admin2@
