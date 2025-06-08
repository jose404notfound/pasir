-- Create the database 'auth_db' with UTF-8 encoding if it doesn't exist,
-- switch to using 'auth_db',
-- and create a 'users' table to store user credentials and creation timestamps.

CREATE DATABASE IF NOT EXISTS auth_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE auth_db;

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Use the 'auth_db' database
-- Insert the initial administrator user with a hashed password

INSERT INTO users (username, password) VALUES
('jgonrui097', '$2y$10$X3Q0eFfujlT0fD2rZvzexehXaGIQNwp16DQQbQPtdeR6fr5qJ4mlu');



