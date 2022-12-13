create database if not exists Secure_home;
use secure_home;
create table if not exists User(
userID Integer primary key,
firstName varchar(255),
lastName varchar(255) not null,
age integer check (age>=18),
phoneNumber varchar(10),
userName varchar(100) not null,
emailAddress varchar(50),
password varchar(50) not null,
userType varchar(10) not null,
check( emailAddress LIKE '%___@___%.__%'),
check( userType LIKE ('admin' or 'user')),
streetName varchar(100),
city varchar(100),
state varchar(100),
postalCode integer(6),
code VARCHAR(255)
);

create table if not exists PublicAuthority(
authorityID integer primary key,
name varchar(60) not null,
emailAddress varchar(60), 
check( emailAddress LIKE '%___@___%.__%'),
address varchar(250),
phoneNumber varchar(10)
);
create table if not exists Message(
mID integer primary key,
mTime time,
content text(3000),
authorityID integer references PublicAuthority(authorityID),
userID integer references User(userID)
);
create table if not exists Address(
addressID integer primary key,
streetName varchar(100),
city varchar(100),
state varchar(100),
postalCode integer(6)
);
create table if not exists Alert(
alertID integer primary key,
aDate date,
aTime time,
userID integer references User(userID)
);
create table if not exists DeviceStatus(
devicestatusID integer primary key,
dStatus bool not null default false,
timeActivated time,
timeDeactivated time,
deviceID integer references Device(deviceID),
userID integer references User(userID)
);
create table Device(
deviceID integer primary key,
deviceName varchar(100),
deviceType varchar(100),
sID integer references Sensor(sID)
);
create table if not exists Sensor(
sID integer primary key,
sName varchar(100),
sType varchar(100),
sStatus bool,
sDate date
);
create table if not exists SensorData(
DataID integer primary key,
sdTime time,
Reading decimal(2,2),
sID integer references Sensor(sID)
);