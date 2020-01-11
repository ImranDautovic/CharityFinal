CREATE TABLE contact (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY  not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_message text(256) not null
    
);

INSERT INTO contact (user_first, user_last, user_email, user_message) VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'it was good');