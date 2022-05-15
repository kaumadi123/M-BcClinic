CREATE TABLE mother_register
(
sid int(9) NOT NULL auto_increment,
First_Name VARCHAR(50) NOT NULL,
Last_Name VARCHAR(40) NOT NULL,
userName VARCHAR(40) NOT NULL,
pass VARCHAR(40) NOT NULL,
Email_Id VARCHAR(100) NOT NULL,
Mobile_Number int(10) NOT NULL ,
Address VARCHAR(100) NOT NULL,
City VARCHAR(20) NOT NULL,
nic int(10) NOT NULL,
cid int(10) NOT NULL,
mid int(10) NOT NULL,
moh VARCHAR(50) NOT NULL,
pregnent VARCHAR(50) NOT NULL,
province VARCHAR(50) NOT NULL,
Country VARCHAR(20) NOT NULL,
PRIMARY KEY(sid)
);