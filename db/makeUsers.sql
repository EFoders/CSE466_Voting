-- This file creates the data entries required for the website to function properly
-- Could it be done in a loop?? Yea probably,
-- but I don't feel like doing that and I want in in a SQL file, OK?

USE db_voting;

DELETE FROM users;

DELETE FROM candidates;

INSERT INTO users
VALUES(1,'VOTER','user1','password');

INSERT INTO users
VALUES(2,'VOTER','user2','password');

INSERT INTO users
VALUES(3,'VOTER','user3','password');

INSERT INTO users
VALUES(4,'VOTER','user4','password');

INSERT INTO users
VALUES(5,'VOTER','user5','password');

INSERT INTO users
VALUES(6,'VOTER','user6','password');

INSERT INTO users
VALUES(7,'VOTER','user7','password');

INSERT INTO users
VALUES(8,'VOTER','user8','password');

INSERT INTO users
VALUES(9,'VOTER','user9','password');

INSERT INTO users
VALUES(10,'VOTER','user10','password');

INSERT INTO candidates
VALUES(1,'Evan');

INSERT INTO candidates
VALUES(2,'Arron');

INSERT INTO candidates
VALUES(3,'Seth');