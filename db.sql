CREATE DATABASE IF NOT EXISTS 
`php_tutorials`
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS
`users`
(
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `f_name` VARCHAR(30),
  `l_Name` VARCHAR(30),
  `email` VARCHAR(60),
  `pwd` VARCHAR(100),
  `access_lvl` VARCHAR(20),
  `access_code` VARCHAR(20),
  `status` INT,
  `created` TIMESTAMP
);

INSERT INTO
`users`
(`f_name`, `l_name`, `email`, `pwd`, `access_lvl`, `access_code`, `status`)
VALUES
('Костя', 'Рубинский', 'kostia@example.com', '123', 'admin', '', '1'),
('Андрей', 'Малошевич', 'andrei@example.com', 'and', 'admin', '', '1'),
('Валя', 'Рубинская', 'valia@example.com', 'vr', 'user', '', '1'),
('Вова', 'Докучаев', 'vova@example.com', 'doc', 'user', '', '1');