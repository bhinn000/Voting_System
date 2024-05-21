

INSERT INTO `sub_mayor_details` (`Sub_mayor_id`, `Sub_mayor_name`, `Address`, `Party`) VALUES ('50A-submayor-01', 'Hira Pandey', 'Mulpani', 'Apple');
INSERT INTO `sub_mayor_details` (`Sub_mayor_id`, `Sub_mayor_name`, `Address`, `Party`) VALUES ('50A-submayor-02', 'Nisha Dhana', 'Duwakot', 'Motorola');
INSERT INTO `sub_mayor_details` (`Sub_mayor_id`, `Sub_mayor_name`, `Address`, `Party`) VALUES ('50A-submayor-03', 'Indra Kumar', 'Bhadrabas', 'Samsung');
INSERT INTO `sub_mayor_details` (`Sub_mayor_id`, `Sub_mayor_name`, `Address`, `Party`) VALUES ('50A-submayor-04', 'Rajendra Pathak', 'Changunarayan', 'Mi');
INSERT INTO `sub_mayor_details` (`Sub_mayor_id`, `Sub_mayor_name`, `Address`, `Party`) VALUES ('50A-submayor-05', 'Saurav Burja', 'Kaushaltar', 'Oppo');
INSERT INTO `sub_mayor_details` (`Sub_mayor_id`, `Sub_mayor_name`, `Address`, `Party`) VALUES ('50A-submayor-06', 'Kartik Thapa', 'Thimi', 'Nokia');



CREATE TABLE sub_mayor_details (
  Sub_mayor_id VARCHAR(25) PRIMARY KEY,
  Sub_mayor_name VARCHAR(25) NOT NULL,
  Address VARCHAR(25) NOT NULL,
Party VARCHAR(10)
);

