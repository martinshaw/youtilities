drop table if exists cycle_lockers;

create table cycle_lockers (
  id mediumint not null auto_increment,
  location varchar(255),
  latitude varchar(255),
  longitude varchar(255),
  primary key (id)
);
