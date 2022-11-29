1)
DROP TABLE purchasing;

2)
CREATE TABLE `purchasing` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `Pcode` varchar(30) NOT NULL,
 `Pqty` decimal(10,0) NOT NULL,
 `supp_cod` varchar(20) DEFAULT NULL,
 `Pdate` date DEFAULT NULL,
 PRIMARY KEY (`id`));
 
 3)
 DROP TABLE issue;
 
 4)
CREATE TABLE `issue` (
 `iid` int(11) NOT NULL AUTO_INCREMENT,
 `code` varchar(100) NOT NULL,
 `qty` decimal(10,0) DEFAULT NULL,
 `description` varchar(5000) NOT NULL,
 `date` date NOT NULL,
 PRIMARY KEY (`iid`)
);