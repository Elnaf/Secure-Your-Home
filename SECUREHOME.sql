CREATE DATABASE `SecureHome`;
use SecureHome;

CREATE TABLE Apartment(
  ApartID INTEGER PRIMARY KEY,
Firstname VARCHAR(100),
Lastname VARCHAR(20 ),
  UserID INTEGER REFERENCES User(UserID),
 AddressID INTEGER References Address(AdrressID)
); 

CREATE TABLE Room (
  RoomID INTEGER PRIMARY KEY,
DeviceType VARCHAR(100),
  ApartID INTEGER REFERENCES Apartment(ApartID)
  );
 