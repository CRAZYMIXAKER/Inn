CREATE TABLE users
(
  id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email varchar(256) NOT NULL UNIQUE,
  first_name varchar(128) NOT NULL,
  last_name varchar(128) NOT NULL,
  password varchar(256) NOT NULL,
  created_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT users
(email, first_name, last_name, password)
VALUES
('Admin@gmail.com', 'fname', 'lname', '$2y$10$umBp0/Q5LuCxxlGyiWV/tOdowsMQuCc7FH6/WPKHWSqWKd6TP4Que'),
('Manager@gmail.com', 'fname2', 'lname2', '$2y$10$X9ut4139pnWczfE2CCI6bezuQmPa.61Gu0xfbqx0UWjDTCFH1c8Uq'),
('User@gmail.com', 'fname3', 'lname3', '$$2y$10$B4f1lCrxY45VUy.VY1Mbou2/0Fx1MwmSYmuTI/2JuplI/oCdf.fby');