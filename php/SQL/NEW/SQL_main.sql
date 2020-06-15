CREATE DATABASE ECHOPPDB;
USE ECHOPPDB;
CREATE TABLE accounts(
    userID int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    pass varchar(1000) NOT NULL,
    email varchar(500) NOT NULL,
    active int(1) DEFAULT 0,
    PRIMARY KEY(userID)
);
CREATE TABLE people(
    userID int NOT NULL AUTO_INCREMENT,
    firstName varchar(200),
    lastName varchar(200),
    nickName varchar(200),
    gender varchar(10),
    age varchar(100),
    state varchar(100),
    city varchar(100),
    phoneNumber varchar(200),
    aboutme varchar(255),
    avatar varchar(500),
    wallpaper varchar(500),
    PRIMARY KEY(userID),
    FOREIGN KEY (userID) REFERENCES accounts(userID)
);

CREATE TABLE posts(
    postID int NOT NULL AUTO_INCREMENT,
    userID int NOT NULL,
    post_date varchar(50) NOT NULL,
    title varchar(100) NOT NULL,
    content varchar(7000) NOT NULL,
    rate varchar(1000) NOT NULL,
    links varchar(500) NOT NULL,
    photo varchar(200) NOT NULL,
    PRIMARY KEY(postID),
    FOREIGN KEY (userID) REFERENCES accounts(userID)
);

CREATE TABLE comments(
    commentID int not null AUTO_INCREMENT,
    postID int not NULL,
    userID int NOT NULL,
    comment_date datetime NOT NULL,
    message TEXT NOT NULL,
    rate_good int DEFAULT 0,
    rate_bad int DEFAULT 0,
    PRIMARY KEY(commentID),
    FOREIGN KEY (userID) REFERENCES accounts(userID)
);
