SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: cis224_wk3 midterm
CREATE DATABASE IF NOT EXISTS cis224_wk3midterm DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE cis224_wk3midterm;

-- Table structure for table users_address
DROP TABLE IF EXISTS users_address;
CREATE TABLE users_address (
  AddressNo int(11) NOT NULL,
  First varchar(25) NOT NULL,
  Last varchar(30) NOT NULL,
  Street varchar(100) NOT NULL,
  City varchar(25) NOT NULL,
  State varchar(2) NOT NULL,
  Zip VARCHAR(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Data for table users_address
INSERT INTO users_address (AddressNo, First, Last, Street, City, State, Zip) VALUES
(1, 'Ismael', 'plik', '2659 Quinn Ln', 'Kinston', 'NC', '28501'),
(2, 'Joe', 'Patton', '105 Angel Ln', 'Goldsboro', 'NC', '28577');

-- Indexes for table users_address
ALTER TABLE users_address
  ADD PRIMARY KEY (AddressNo);

-- AUTO_INCREMENT for table users_address.
ALTER TABLE users_address
  MODIFY AddressNo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
