create database if not exists Securehome;
drop table Device;
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