CREATE DATABASE IF NOT EXISTS blog_db;

USE blog_db;

CREATE TABLE IF NOT EXISTS blog_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author_username VARCHAR(50) NOT NULL,  -- We save the unique username directly 
    FOREIGN KEY (author_username) REFERENCES auth_db.users(username) ON DELETE CASCADE  -- We link to the `username` column of `users``
);
