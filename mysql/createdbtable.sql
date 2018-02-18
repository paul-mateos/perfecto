USE testdb;
CREATE TABLE IF NOT EXISTS users (id int NOT NULL, username varchar(30), password varchar(30), PRIMARY KEY (id));
INSERT INTO users (id, username, password)
VALUES (1, "Fawad", "Khan");
