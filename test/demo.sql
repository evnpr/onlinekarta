Create table data
(
id int primary key auto_increment,
data varchar(50),
weight int(2),
);

INSERT INTO `data` VALUES(1, 'India','1');
INSERT INTO `data` VALUES(2, 'United States','1');
INSERT INTO `data` VALUES(3, 'United Kingdom','1');
INSERT INTO `data` VALUES(4, 'Chennai','0');
INSERT INTO `data` VALUES(5, 'Delhi','0');
INSERT INTO `data` VALUES(6, 'Mumbai','0');
INSERT INTO `data` VALUES(7, 'kolkata','0');
INSERT INTO `data` VALUES(8, 'New York','0');
INSERT INTO `data` VALUES(9, 'Los Angeles','0');
INSERT INTO `data` VALUES(10, 'Chicago','0');
INSERT INTO `data` VALUES(11, 'San Francisco','0');
INSERT INTO `data` VALUES(12, 'Las Vegas','0');
INSERT INTO `data` VALUES(13, 'London','0');
INSERT INTO `data` VALUES(14, 'Liverpool','0');
INSERT INTO `data` VALUES(15, 'Sunderland','0');



CREATE TABLE `data_parent` 
(
  `pid` int(11) primary key auto_increment,
  `did` int(11) unique,
  `parent` int(11),
   Foreign key(did) references data(id)
) 


INSERT INTO `data_parent` VALUES(1, 1, 0);
INSERT INTO `data_parent` VALUES(2, 2, 0);
INSERT INTO `data_parent` VALUES(3, 3, 0);
INSERT INTO `data_parent` VALUES(4, 4, 1);
INSERT INTO `data_parent` VALUES(5, 5, 1);
INSERT INTO `data_parent` VALUES(6, 6, 1);
INSERT INTO `data_parent` VALUES(7, 7, 1);
INSERT INTO `data_parent` VALUES(8, 8, 2);
INSERT INTO `data_parent` VALUES(9, 9, 2);
INSERT INTO `data_parent` VALUES(10, 10, 2);
INSERT INTO `data_parent` VALUES(11, 11, 2);
INSERT INTO `data_parent` VALUES(12, 12, 2);
INSERT INTO `data_parent` VALUES(13, 13, 3);
INSERT INTO `data_parent` VALUES(14, 14, 3);
INSERT INTO `data_parent` VALUES(15, 15, 3);