create table users(
    id_user int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    age int NOT NULL,
	colors_id int(11) NOT NULL,

    PRIMARY KEY (id_user),
	CONSTRAINT  FOREIGN KEY (colors_id) REFERENCES colors (id_color)

);
