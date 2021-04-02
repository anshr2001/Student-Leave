CREATE TABLE `student`.studentdetails(
studentroll VARCHAR(40) NOT NULL,
studentid VARCHAR(40) NOT NULL,
studentpassword VARCHAR(40),
studentname VARCHAR(40),
gender VARCHAR(10),
age INT,
phone_no BIGINT,
pemail VARCHAR(40),
secanswer1 VARCHAR(200),
secanswer2 VARCHAR(200),

PRIMARY KEY(studentroll,studentid) 
);
INSERT INTO `student`.studentdetails VALUES ('cse18206','Harsha2001','anshr2001','Sreeharsha','Male',20,8885488509,'anshr2001@gmail.com','Jersey','Bajaj');
INSERT INTO `student`.studentdetails VALUES ('cse18012','Sanju2000','sanju@2000','Sanjay','Male',22,6303879214,'sanju_reddy@gmail.com','Bahubali','Honda Shine');

INSERT INTO `student`.studentdetails VALUES ('cse18132','Sankeerth1829','krishna_1829','Krishna Sankeerth','Male',21,6303849361,'kkrishna1829@gmail.com','Bigil','Ducati');
INSERT INTO `student`.studentdetails VALUES ('cse18435','Kushagra2001','kushkumar2001','Kushagra Kumar','Male',20,8467425451,'kushagraA@gmail.com','Arjun Reddy','Yamaha');

INSERT INTO `student`.studentdetails VALUES ('cse18346','Roshnic12','roshni','roshni','Female',23,9864512316,'roshnic12se@gmail.com','Drishyam2','Suzuki');

SELECT * FROM `student`.studentdetails;