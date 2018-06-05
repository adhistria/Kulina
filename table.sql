CREATE TABLE user_review2 (
    id int  AUTO_INCREMENT,
    order_id int,
    product_id int,
    user_id int,
	rating float,
	review varchar(255),
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
);
