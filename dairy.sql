CREATE TABLE 	DAIRY
(	Dname VARCHAR(15)  NOT NULL,
	Dnumber INT NOT NULL, 
	Mgr_ssn CHAR(9) NOT NULL,
	Mgr_start_date DATE,
	NO_OF_EMPLOYEES INT NOT NULL,
	PRIMARY KEY (Dnumber),
	UNIQUE (Dname));

CREATE TABLE 	Employee
(	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL, 
	Ssn CHAR(9) NOT NULL,
	Bdate DATE,
	Address	 VARCHAR(30),
	Gender CHAR,
	Salary DECIMAL(10,2),
	Super_ssn CHAR(9),
	Dno INT NOT NULL,
	education VARCHAR(15),
	branch VARCHAR(15),
	mob_no VARCHAR(10),
	PRIMARY KEY (Ssn),
	FOREIGN KEY (Super_ssn) REFERENCES Employee(Ssn)),
	FOREIGN KEY (Dno) REFERENCES DAIRY(Dnumber));
	
CREATE TABLE 	DAIRY_LOCATIONS
(	Dnumber INT NOT NULL, 
	Dlocation VARCHAR(15) NOT NULL,
	PRIMARY KEY (Dnumber, Dlocation),
	FOREIGN KEY (Dnumber) REFERENCES DAIRY(Dnumber));

CREATE TABLE 	MILKMAN
(	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL, 
	milkman_id CHAR(9) NOT NULL,
	Address	 VARCHAR(30),
	Salary DECIMAL(10,2),
	Dno INT NOT NULL,
	mob_no VARCHAR(10),
	PRIMARY KEY (milkman_id),
	FOREIGN KEY (Dno) REFERENCES DAIRY(Dnumber));
	
CREATE TABLE 	DEPENDENT
(	Essn CHAR(9) NOT NULL,
	Dependent_name VARCHAR(15) NOT NULL,
	Gender CHAR,
	Bdate DATE,
	Relationship VARCHAR(8),
	Salary DECIMAL(10,2),
	Dno INT NOT NULL,
	branch VARCHAR(15),
	mob_no VARCHAR(10),
	PRIMARY KEY (Essn, Dependent_name),
	FOREIGN KEY (Dno) REFERENCES DAIRY(Dnumber)),
	FOREIGN KEY (Essn) REFERENCES EMPLOYEE(Ssn));