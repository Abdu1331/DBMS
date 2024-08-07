CREATE DATABASE hospital_management;

USE hospital_management;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(10),
    contact VARCHAR(15)
);

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor VARCHAR(50),
    date DATE,
    time TIME,
    FOREIGN KEY (patient_id) REFERENCES patients(id)
);
