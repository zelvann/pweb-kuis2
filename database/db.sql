-- dbname = pweb

create table users(
  nama varchar(255) not null,
  pass varchar(255) not null,
  umur integer not null,
  gender char(1) not null check(gender = 'M' or gender = 'F'),
  email varchar(255) not null primary key,
  sekolah varchar(255) not null,
  profile_pic varchar(1024),
  tanggal_daftar date default current_date  
);