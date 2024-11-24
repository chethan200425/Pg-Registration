-- Step 1: Create the database
CREATE DATABASE RegistrationDB;

-- Step 2: Use the database
USE RegistrationDB;

-- Step 3: Create the table
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    address TEXT NOT NULL,
    joining_date DATE NOT NULL,
    sharing_type VARCHAR(20) NOT NULL,
    payment_option ENUM('upi', 'cash') NOT NULL
);

-- Step 4: Confirm the table structure
DESCRIBE Users;
INSERT INTO Users (first_name, last_name, phone_number, dob, address, joining_date, sharing_type, payment_option)
VALUES 
('John', 'Doe', '1234567890', '1995-06-15', '123 Main St, City', '2024-11-24', 'single', 'upi'),
('Jane', 'Smith', '9876543210', '1990-03-10', '456 Oak St, City', '2024-11-25', 'double', 'cash');
