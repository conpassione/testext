#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	dogname varchar(255) DEFAULT '' NOT NULL,
	mobile varchar(255) DEFAULT '' NOT NULL,
	dogbirthdate varchar(255) DEFAULT '' NOT NULL,
	dograce varchar(255) DEFAULT '' NOT NULL,
	dogsex varchar(255) DEFAULT '' NOT NULL,
	teamstory text,
	tx_extbase_type varchar(255) DEFAULT '' NOT NULL
);
