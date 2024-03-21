CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'mneri'@'%' IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON wordpress.* TO 'mneri'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root12345';