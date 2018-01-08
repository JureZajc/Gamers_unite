/*
Created		2.6.2017
Modified		9.6.2017
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/




Create table users (
	ID_users Int NOT NULL AUTO_INCREMENT,
	first_name Varchar(255),
	last_name Varchar(255),
	username Varchar(255),
	email Varchar(255) NOT NULL,
	pass Varchar(255) NOT NULL,
	admin Int,
 Primary Key (ID_users)) ENGINE = InnoDB;

Create table games (
	ID_games Int NOT NULL AUTO_INCREMENT,
	game_name Varchar(255),
	description Text,
 Primary Key (ID_games)) ENGINE = InnoDB;

Create table comments (
	ID_comments Int NOT NULL AUTO_INCREMENT,
	content Text NOT NULL,
	date_add Timestamp NOT NULL,
	ID_games Int NOT NULL,
	ID_users Int NOT NULL,
 Primary Key (ID_comments)) ENGINE = InnoDB;

Create table images (
	ID_images Int NOT NULL AUTO_INCREMENT,
	url Varchar(255),
	description Text,
	ID_games Int NOT NULL,
 Primary Key (ID_images)) ENGINE = InnoDB;

Create table users_scores (
	ID_users_scores Int NOT NULL AUTO_INCREMENT,
	ID_games Int NOT NULL,
	ID_users Int NOT NULL,
	high_score Int NOT NULL,
 Primary Key (ID_users_scores)) ENGINE = InnoDB;



Alter table users_scores add Foreign Key (ID_users) references users (ID_users) on delete  restrict on update  restrict;
Alter table comments add Foreign Key (ID_users) references users (ID_users) on delete  restrict on update  restrict;
Alter table users_scores add Foreign Key (ID_games) references games (ID_games) on delete  restrict on update  restrict;
Alter table comments add Foreign Key (ID_games) references games (ID_games) on delete  restrict on update  restrict;
Alter table images add Foreign Key (ID_games) references games (ID_games) on delete  restrict on update  restrict;



