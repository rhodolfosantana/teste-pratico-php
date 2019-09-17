create table sales(
    id_sales int NOT NULL AUTO_INCREMENT,
    sales_product int NOT NULL,
    value int NOT NULL,
    provider varchar(100) NOT NULL,

    PRIMARY KEY (id_sales),
	CONSTRAINT  FOREIGN KEY (sales_product) REFERENCES product(id_product)

);
