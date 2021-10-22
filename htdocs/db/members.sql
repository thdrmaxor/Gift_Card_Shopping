create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    level int,
    point int,
    primary key(num)
);

alter table members modify num int not null;
insert into members(num, id, pass, name, email, level, point) values(1, 'master', '0000', 'admin', 'admin@localhost', 0, 9999);
alter table members modify num int not null auto_increment;