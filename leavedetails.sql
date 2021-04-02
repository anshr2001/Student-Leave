CREATE TABLE `student`.leavedetails
(
leavestartdate DATE NOT NULL,
numdays INT,

leavetype VARCHAR(40),
studentroll VARCHAR(40) NOT NULL,

PRIMARY KEY(leavestartdate,studentroll),
FOREIGN KEY (studentroll) REFERENCES studentdetails(studentroll)
);

INSERT INTO `student`.leavedetails VALUES ('2021-04-06',2,'Medical Leave','cse18206');
INSERT INTO `student`.leavedetails VALUES ('2021-05-10',4,'Family Leave','cse18435');

INSERT INTO `student`.leavedetails VALUES ('2021-05-10',1,'On-Duty Leave','cse18012');
INSERT INTO `student`.leavedetails VALUES ('2021-04-08',4,'Emergency Leave','cse18132');

INSERT INTO `student`.leavedetails VALUES ('2021-04-21',3,'Family Leave','cse18206');

SELECT * FROM `student`.leavedetails;

