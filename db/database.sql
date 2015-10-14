create database if not exists cycloo character set utf8 collate utf8_unicode_ci;
use cycloo;

grant all privileges on cycloo.* to 'cycloo_user'@'localhost' identified by 'secret';
