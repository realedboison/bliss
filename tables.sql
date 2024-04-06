-- Create a table for bliss
CREATE TABLE bliss.admin (
    id VARCHAR(20),
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(50),
    image VARCHAR(255)
);

-- change table item name
ALTER TABLE bliss.admin
CHANGE COLUMN image profile VARCHAR(255);

-- remove all rows on a table
TRUNCATE TABLE admin;

-- change user type
UPDATE admin
SET user_type = 'admin'
WHERE name = 'Erd';