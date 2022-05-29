CREATE DATABASE IF NOT EXISTS actuality;
use actuality;
CREATE TABLE IF NOT EXISTS user (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(128) NOT NULL UNIQUE,
    password VARCHAR(128) NOT NULL,
    username VARCHAR(50) NOT NULL,
    role ENUM("user", "admin", "moderator") NOT NULL DEFAULT "user",
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS news (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    contenu VARCHAR(128) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_by INT NOT NULL,
    FOREIGN KEY (created_by) REFERENCES user(id)
);

CREATE TABLE IF NOT EXISTS comment (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    commentaire VARCHAR(256) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_by INT NOT NULL,
    FOREIGN KEY (created_by) REFERENCES user(id),
    link_to INT NOT NULL,
    FOREIGN KEY (link_to) REFERENCES news(id)
);