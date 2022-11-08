CREATE DATABASE hims;
USE hims;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE register (
  id int(11),
  username varchar(50),
  email varchar(50),
  password varchar(50),
  trn_date datetime,
  dob date,
  poNumber int(10),
  countryCode int(12),
  nationality varchar(100),
  city varchar(100),
  postalCode int(12),
  postNo varchar(100),
  road varchar(200),
  newsAlert varchar(10),
  constraint register_PK PRIMARY KEY(id)
);

CREATE TABLE adminreg (
  userName varchar(100),
  password varchar(100),
  admin varchar(50),
  id varchar(10),
  constraint adminreg_PK PRIMARY KEY(userName)
);


CREATE TABLE branch (
  branchId char(20),
  branch_code int(11),
  branch_name varchar(50),
  branch_email varchar(20),
  parking_place varchar(255),
  tele_no int(11),
  fax int(11),
  location varchar(255),
  p_no char(10),
  street varchar(50),
  city varchar(30),
  postal_code int(11),
  working_time time,
  userId char(10),
  constraint branch_PK PRIMARY KEY(branchId)
);

INSERT INTO branch (branchId, branch_code, branch_name, branch_email, parking_place, tele_no, fax, location, p_no, street, city, postal_code, working_time, userId) VALUES
('HB0001', 1, 'Aluthgama', 'hope.01@hope.com', '\"HOPE\"Aluthgama Branch park', 115565623, 115565624, 'Aluthgama', '30/3', 'Main Rd', 'Aluthgama', 12080, '10:00:00', 'HIMS0001'),
('HB0005', 5, 'Rathnapura', 'hope.05@hope.com', '\"HOPE\"Rathnapura Branch park', 114465623, 114465624, 'Rathnapura', '8/A', 'Main Rd', 'Rathnapura', 70000, '10:00:00', 'HIMS0002'),
('HB0010', 10, 'Deniyaya', 'hope.10@hope.com', '\"HOPE\"Deniyaya Branch park', 415565623, 415565624, 'Deniyaya', '423/2', 'Wiharahena Rd', 'Deniyaya', 81500, '10:00:00', 'HIMS0004'),
('HB0020', 20, 'Matara', 'hope.20@hope.com', '\"HOPE\"Matara Branch park', 414465623, 414465624, 'Matra', '20/1', 'old Galle Rd', 'Matara', 81000, '10:00:00', 'HIMS0005'),
('HB0030', 30, 'Badulla', 'hope.30@hope.com', '\"HOPE\"Badulla Branch park', 473365623, 473365624, 'Badulla', '625/3', 'police station Rd', 'Badulla', 90000, '10:00:00', 'HIMS0003');

CREATE TABLE help (
  id int(11),
  name varchar(100),
  contact int(10),
  email varchar(100),
  massege varchar(255),
  feedback varchar(10),
  constraint help_PK PRIMARY KEY(email)
);

CREATE TABLE news_emails (
  id int(11),
  email varchar(100),
  constraint news_emails_PK PRIMARY KEY(id)
);

CREATE TABLE payment (
  email varchar(100),
  password varchar(100),
  insurancePlan varchar(250),
  payMethod varchar(250),
  constraint payment_PK PRIMARY KEY(email)
);

ALTER TABLE register
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
