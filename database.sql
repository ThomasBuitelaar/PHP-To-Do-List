CREATE TABLE `tasks` (
	`list_id` INT(11) NOT NULL AUTO_INCREMENT,
	`task_id` INT(11) NOT NULL AUTO_INCREMENT,
	`task_name` VARCHAR(255) NOT NULL,
	`task_description` text NOT NULL,
	PRIMARY KEY (`task_id`),
	KEY `list_id` (`list_id`)
);

CREATE TABLE `lists` (
	`list_id` INT(11) NOT NULL AUTO_INCREMENT,
	`list_name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`list_id`)
);