drop table if exists t_bike;

create table t_bike (
    bike_id integer not null primary key auto_increment,
    bike_name varchar(100) not null,
    bike_description varchar(2000) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
