SHOW CREATE TABLE


	
CREATE TABLE `admin_code` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `code` varchar(30) NOT NULL,
 `qty` decimal(10,0) NOT NULL,
 PRIMARY KEY (`id`)
);



CREATE TABLE `admin_pass` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `password` varchar(20) DEFAULT NULL,
 `username` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`id`)
);




	
CREATE TABLE `issue` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `code` varchar(100) NOT NULL,
 `description` varchar(5000) NOT NULL,
 `date` date NOT NULL,
 PRIMARY KEY (`id`)
); 



CREATE TABLE `pcs` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `serial_no` varchar(20) NOT NULL,
 `batch_no` int(11) NOT NULL,
 `status` varchar(20) NOT NULL,
 `error` varchar(500) NOT NULL,
 `date` date NOT NULL,
 `time` time NOT NULL,
 PRIMARY KEY (`id`)
);



CREATE TABLE `pri` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `batch_no` int(20) DEFAULT NULL,
 `ser_cod` varchar(20) DEFAULT NULL,
 `r_mat` varchar(1000) DEFAULT NULL,
 `l_status` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`id`)
);



CREATE TABLE `purchasing` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `code` varchar(30) NOT NULL,
 `qty` decimal(10,0) NOT NULL,
 `supp_cod` varchar(20) DEFAULT NULL,
 `date` date DEFAULT NULL,
 PRIMARY KEY (`id`)
);




CREATE TABLE `userinfo` (
 `Id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(20) NOT NULL,
 `password` varchar(15) NOT NULL,
 `firstname` varchar(100) NOT NULL,
 `lastname` varchar(100) NOT NULL,
 `position` varchar(20) DEFAULT NULL,
 PRIMARY KEY (`Id`)
);



CREATE TABLE `sup_info` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(20) NOT NULL,
 `tele` int(20) NOT NULL,
 `mobi` int(20) NOT NULL,
 `address` varchar(200) NOT NULL,
 `email` varchar(200) NOT NULL,
 PRIMARY KEY (`id`)
);-





