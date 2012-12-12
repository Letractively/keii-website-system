create table keii_group(
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    groupname VARCHAR(128) NOT NULL,
    group_description VARCHAR(200) NOT NULL
)

create table keii_user(    
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    groupid INTEGER NOT NULL,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
    corporation VARCHAR(128) NOT NULL,
    contact_number VARCHAR(200) NOT NULL ,
    contact_address VARCHAR(200) NOT NULL 
)

create table keii_category(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	parent_id INTEGER NOT NULL,
	category_name VARCHAR(128) NOT NULL,
	category_description VARCHAR(200) NOT NULL,
	permission tint NOT NULL
)

create table keii_comment(    
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    category_id INTEGER NOT NULL DEFAULT 0,
    author_id INTEGER NOT NULL,
    create_time TIMESTAMP,
    modify_time TIMESTAMP NOT NULL,
    comment_state  INTEGER NOT NULL,
    comment_content VARCHAR(300) NOT NULL,
    permission tint NOT NULL
)


create table keii_article(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    author_id INTEGER NOT NULL,
    category_id INTEGER NOT NULL DEFAULT 0,
    create_time TIMESTAMP NOT NULL,
   	modify_time TIMESTAMP NOT NULL,
   	article_title VARCHAR(50) NOT NULL,
   	article_description VARCHAR(200) NOT NULL,
    article_content text NOT NULL
)


create table keii_product(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	product_name VARCHAR(128) NOT NULL,
	product_parameter text NOT NULL
)

