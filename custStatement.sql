DROP USER IF EXISTS 'waveline_user'@'localhost';
CREATE USER 'waveline_user'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT SELECT, INSERT ON WavelineApparel.customer TO 'waveline_user'@'localhost';
GRANT UPDATE ON WavelineApparel.customer TO 'waveline_user'@'localhost';
FLUSH PRIVILEGES;

