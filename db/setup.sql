-- This file creates the database required for the website to function

CREATE SCHEMA IF NOT EXISTS db_voting;

USE db_voting;

CREATE TABLE IF NOT EXISTS users (
                         userid int PRIMARY KEY ,
                         type varchar(255),
                         username varchar(255),
                         password varchar(255)
);

CREATE TABLE IF NOT EXISTS candidates (
                       candidateid int PRIMARY KEY ,
                       party varchar(255)
);

CREATE TABLE IF NOT EXISTS votes (
                            voteid int AUTO_INCREMENT PRIMARY KEY ,
                            voter varchar(255),
                            candidate varchar(255)
)AUTO_INCREMENT = 1;

