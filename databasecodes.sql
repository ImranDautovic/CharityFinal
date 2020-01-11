CREATE TABLE donations (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY  not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_number int(25) not null,
    user_money int (25) not null
);

INSERT INTO donations (user_first, user_last, user_email, user_number, user_money) VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', '25', '23');
