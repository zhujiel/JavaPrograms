CREATE TABLE IF NOT EXISTS hotels
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Name varchar(255) NOT NULL,
   Default_price int NOT NULL,
   Capacity int NOT NULL
);

CREATE TABLE IF NOT EXISTS hotels_booked_capacities
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Hotel_id int NOT NULL,
   Dates DATE,
   Booked_capacity int NOT NULL,
   FOREIGN KEY (Hotel_id) REFERENCES hotels(ID)
);

CREATE TABLE IF NOT EXISTS users
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Name varchar(255) not null,
   Username varchar(255) not null,
   Password  varchar(255) not null,
   Role varchar(20) not null
);

CREATE TABLE IF NOT EXISTS pricing
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Hotel_id int NOT NULL,
   Date_from DATE,
   Date_to DATE,
   Daily_price int,
   FOREIGN KEY (Hotel_id) REFERENCES hotels(ID)
);

CREATE TABLE IF NOT EXISTS bookings
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   User_id int NOT NULL,
   Hotel_id int NOT NULL,
   Date_from DATE,
   Date_to DATE,
   Total_price int,
   FOREIGN KEY (User_id) REFERENCES users(ID),
   FOREIGN KEY (Hotel_id) REFERENCES hotels(ID)
);