drop table ResortsOfferRoomTypes;
drop table MinorRestriction;
drop table Minors;
drop table Wage;
drop table Staff;


drop table RoomSize;
drop table GuestsMakeBooking;
drop table Bookings;
drop table Rooms;


drop table GuestsUseFacilities;
drop table Dining;
drop table Recreation;
drop table Facilities;
drop table RoomTypes;
drop table Guests;
drop table LoyaltyProgram;

drop table Resorts;
PURGE RECYCLEBIN;

CREATE TABLE Resorts (
                         resortID INT not null ,
                         resortName CHAR(20),
                         contactNumber CHAR(10),
                         resortAddress CHAR(30),
                         rating INT,
                         CONSTRAINT Resorts_pk PRIMARY KEY (resortID)
);
INSERT ALL
    INTO Resorts (resortID, resortName, contactNumber, resortAddress, rating) VALUES (01, 'Resortopia', '2422932934', 'White Valley, Kelowna', 4)
    INTO Resorts (resortID, resortName, contactNumber, resortAddress, rating) VALUES (02, 'Resortotal', '2322982234', 'Robson St, Vancouver', 5)
    INTO Resorts (resortID, resortName, contactNumber, resortAddress, rating) VALUES (03, 'Resortoken', '2722982334', 'Pine St, Toronto', 5)
    INTO Resorts (resortID, resortName, contactNumber, resortAddress, rating) VALUES (04, 'Resortavern', '2724913534', 'Kinsaw St, Calgary', 3)
    INTO Resorts (resortID, resortName, contactNumber, resortAddress, rating) VALUES (05, 'Resortacy', '2452492534', 'Preoln St, Montreal', 5)
SELECT * from dual;


CREATE TABLE Staff(
                      staffID INT,
                      staffName CHAR(20),
                      staffAddress CHAR(30),
                      department CHAR(20),
                      position CHAR(20),
                      joinDate DATE,
                      wage INT,
                      resortID INT,
                      CONSTRAINT fk_staff FOREIGN KEY (resortID) REFERENCES Resorts(resortID) ON DELETE CASCADE
);

INSERT ALL
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (001, 'Sidhant Kapila', 'Gilmore St, Brampton', 'Cleaning', 'Janitor', '23-JUN-19', 40000, 01)
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (002, 'Sampan Bansal', 'W 10 Ave, Okanagan', 'Dining', 'Chef', '18-FEB-12', 70000, 03)
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (003, 'Dhiren Kewal', 'Drake St, Toronto', 'Management', 'Assistant', '28-AUG-19', 90000, 02)
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (004, 'Deep Parekh', 'Pronty St, Quebec City', 'Cleaning', 'Janitor', '17-MAR-21', 45000, 03)
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (005, 'Ronit Kothari', 'Demble St, Brampton', 'Admin', 'Logistics', '29-JUL-19', 65000, 05)
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (005, 'Sshrey Sheth', 'Lower St, Brampton', 'Admin', 'Logistics', '29-JUL-19', 70000, 01)
    INTO Staff(staffID, staffName, staffAddress, department, position, joinDate, wage, resortID) VALUES (005, 'Divit Mehta', 'Agronomy Rd, Vancouver', 'Dining', 'Sous Chef', '29-JUL-19', 75000, 01)
SELECT * from dual;

CREATE TABLE RoomTypes(
    roomTypeName CHAR(20) not null,
    cost INT,
    smokeFriendly INT,
    CONSTRAINT roomTypes_pk PRIMARY KEY (roomTypeName)
);

INSERT ALL
    INTO  RoomTypes(roomTypeName, cost, smokeFriendly) VALUES ('Suite', 120, 1)
    INTO  RoomTypes(roomTypeName, cost, smokeFriendly) VALUES ('Executive Suite', 180, 0)
    INTO  RoomTypes(roomTypeName, cost, smokeFriendly) VALUES ('Deluxe Suite', 220, 0)
    INTO  RoomTypes(roomTypeName, cost, smokeFriendly) VALUES ('Super Deluxe Suite', 240, 1)
    INTO  RoomTypes(roomTypeName, cost, smokeFriendly) VALUES ('Presidential Suite', 350, 1)
SELECT * from dual;

CREATE TABLE  ResortsOfferRoomTypes (
    resortID INT,
    roomTypeName CHAR(20),
    CONSTRAINT ResortsOfferRoomTypes_pk PRIMARY KEY (resortID, roomTypeName),
    CONSTRAINT ResortsOfferRoomTypes_fk FOREIGN KEY (resortID) REFERENCES Resorts(resortID) ON DELETE CASCADE,
    CONSTRAINT ResortsOfferRoomTypes_fk2 FOREIGN KEY (roomTypeName) REFERENCES RoomTypes(roomTypeName) ON DELETE CASCADE
);

INSERT ALL
    INTO  ResortsOfferRoomTypes(resortID, roomTypeName) VALUES (01, 'Suite')
    INTO  ResortsOfferRoomTypes(resortID, roomTypeName) VALUES (01, 'Deluxe Suite')
    INTO  ResortsOfferRoomTypes(resortID, roomTypeName) VALUES (02, 'Suite')
    INTO  ResortsOfferRoomTypes(resortID, roomTypeName) VALUES (03, 'Super Deluxe Suite')
    INTO  ResortsOfferRoomTypes(resortID, roomTypeName) VALUES (05, 'Presidential Suite')
SELECT * from dual;

CREATE TABLE Rooms (
    roomNumber INT,
    wing INT,
    roomTypeName CHAR(20),
    CONSTRAINT Rooms_pk PRIMARY KEY (roomNumber),
    CONSTRAINT Rooms_fk FOREIGN KEY (roomTypeName) REFERENCES RoomTypes(roomTypeName) ON DELETE CASCADE
);

INSERT ALL
    INTO Rooms(roomNumber, wing, roomTypeName) VALUES (110, 01, 'Suite')
    INTO Rooms(roomNumber, wing, roomTypeName) VALUES (321, 02, 'Executive Suite')
    INTO Rooms(roomNumber, wing, roomTypeName) VALUES (171, 03, 'Deluxe Suite')
    INTO Rooms(roomNumber, wing, roomTypeName) VALUES (123, 05, 'Super Deluxe Suite')
    INTO Rooms(roomNumber, wing, roomTypeName) VALUES (132, 01, 'Suite')
SELECT * from dual;

CREATE TABLE RoomSize(
    wing INT,
    squareFeet INT,
    CONSTRAINT RoomSize_pk PRIMARY KEY (wing)
);

INSERT ALL
    INTO RoomSize(wing, squareFeet) VALUES (01, 5000)
    INTO RoomSize(wing, squareFeet) VALUES (02, 2250)
    INTO RoomSize(wing, squareFeet) VALUES (03, 1300)
    INTO RoomSize(wing, squareFeet) VALUES (04, 2500)
    INTO RoomSize(wing, squareFeet) VALUES (05, 8000)
SELECT * from dual;

CREATE TABLE Bookings (
    bookingID INT,
    checkInDate DATE,
    checkOutDate DATE,
    totalGuests INT,
    totalAmount INT,
    roomNumber INT,
    purpose CHAR(30),
    resortID INT,
    CONSTRAINT Bookings_pk PRIMARY KEY (bookingID),
    CONSTRAINT Bookings_fk1 FOREIGN KEY (roomNumber) REFERENCES Rooms(roomNumber) ON DELETE CASCADE,
    CONSTRAINT Bookings_fk2 FOREIGN KEY (resortID) REFERENCES Resorts(resortID) ON DELETE CASCADE
);

INSERT ALL
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0001,'14-APR-19', '15-APR-19', 2, 400, 110, 'Vacation', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0038,'24-MAY-22', '29-MAY-22', 5, 1000, 321, 'Vacation', 4)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0201,'18-MAR-17', '21-MAR-17', 3, 300, 171, 'Vacation', 3)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0421,'12-SEP-18', '21-SEP-18', 2, 600, 123, 'Business', 1)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0031,'11-NOV-21', '17-NOV-21', 4, 900, 132, 'Business', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0032,'12-MAY-21', '16-MAY-21', 3, 900, 132, 'Business', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0033,'10-FEB-21', '15-FEB-21', 2, 700, 132, 'Entertainment', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0034,'20-JUN-21', '24-JUN-21', 4, 1000, 132, 'Entertainment', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0035,'29-JUL-21', '30-JUL-21', 3, 200, 132, 'Entertainment', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0036,'01-JAN-21', '07-JAN-21', 2, 500, 132, 'Event', 2)
    INTO Bookings(bookingID, checkInDate, checkOutDate, totalGuests, totalAmount, roomNumber, purpose, resortID)
    VALUES(0037,'11-AUG-21', '14-AUG-21', 3, 350, 132, 'Event', 2)
SELECT * from dual;

CREATE TABLE LoyaltyProgram(
    tier CHAR(10),
    freeBreakfast INT,
    priorityBooking INT,
    travelPartner CHAR(20),
    CONSTRAINT LoyaltyProgram_pk PRIMARY KEY (tier)
);

INSERT ALL
    INTO LoyaltyProgram(tier, freeBreakfast, priorityBooking, travelPartner) VALUES ('Base', 0, 0, 'Resort')
    INTO LoyaltyProgram(tier, freeBreakfast, priorityBooking, travelPartner) VALUES ('Bronze', 0, 1, 'Uber')
    INTO LoyaltyProgram(tier, freeBreakfast, priorityBooking, travelPartner) VALUES ('Silver', 1, 0, 'Lyft')
    INTO LoyaltyProgram(tier, freeBreakfast, priorityBooking, travelPartner) VALUES ('Gold', 1, 1, 'Air Canada')
    INTO LoyaltyProgram(tier, freeBreakfast, priorityBooking, travelPartner) VALUES ('Platinum', 1, 1, 'Emirates')
SELECT * from dual;

CREATE TABLE Guests(
    guestID INT,
    guestName CHAR(20),
    guestAddress CHAR(30),
    guestContact CHAR(10),
    tier CHAR(10),
    CONSTRAINT Guests_pk PRIMARY KEY (guestID),
    CONSTRAINT Guests_fk1 FOREIGN KEY (tier) REFERENCES LoyaltyProgram(tier)
);

INSERT ALL
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (001, 'Anjori Sikri', 'Roseville NH', 2759372947, 'Base')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (002, 'Yuvraj Grover', 'Muskegon KY', 7492749371, 'Bronze')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (003, 'Shanay Shah', 'San Antonio MI', 8402834021, 'Silver')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (004, 'Ishaan Sheth', 'Sana Rosa MN', 6349872942, 'Base')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (005, 'Aditya Vasisht', 'Cupertino CA', 8402857820, 'Gold')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (006, 'Keshav Dalmia', 'Muskegon KY', 7492749123, 'Bronze')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (007, 'Ravikiran Arora', 'San Antonio MI', 8402834321, 'Silver')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (008, 'Sania Ria', 'Sana Rosa MN', 6349872987, 'Base')
    INTO Guests(guestID, guestName, guestAddress, guestContact, tier) VALUES (009, 'Sadhika Singh', 'Cupertino CA', 8402857789, 'Gold')
SELECT * from dual;

CREATE TABLE GuestsMakeBooking(
    guestID INT,
    bookingID INT,
    CONSTRAINT GuestsMakeBooking_pk PRIMARY KEY (guestID, bookingID),
    CONSTRAINT GuestsMakeBooking_fk1 FOREIGN KEY (guestID) REFERENCES Guests(guestID) ON DELETE CASCADE,
    CONSTRAINT GuestsMakeBooking_fk2 FOREIGN KEY (bookingID) REFERENCES Bookings(bookingID) ON DELETE CASCADE
);
INSERT ALL
    INTO GuestsMakeBooking(guestID, bookingID) VALUES (0001, 0038)
    INTO GuestsMakeBooking(guestID, bookingID) VALUES (0002, 0001)
    INTO GuestsMakeBooking(guestID, bookingID) VALUES (0003, 0201)
    INTO GuestsMakeBooking(guestID, bookingID) VALUES (0004, 0421)
    INTO GuestsMakeBooking(guestID, bookingID) VALUES (0005, 0031)
SELECT * from dual;

CREATE TABLE Facilities
(
    facilitiesID INT,
    facilitiesName CHAR(20),
    startTime CHAR(20),
    endTime Char(20),
    capacity INT,
    resortID INT,
    CONSTRAINT Facilities_pk PRIMARY KEY (facilitiesID),
    CONSTRAINT Facilities_fk FOREIGN KEY (resortID) REFERENCES Resorts(resortID) ON DELETE CASCADE
);

INSERT ALL
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (01, 'Gym1', '08:30 AM', '09:30 PM', 32, 01)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (02, 'Gym2', '08:30 AM', '10:30 PM', 15, 02)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (03, 'Gym3', '08:30 AM', '10:30 PM', 21, 03)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (04, 'Pool1','08:30 AM', '04:30 PM', 23, 03)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (05, 'Spa',  '08:30 AM', '06:30 PM', 50, 05)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (06, 'Restaurant1',  '08:30 AM', '06:30 PM', 50, 01)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (07, 'Restaurant2',  '08:30 AM', '06:30 PM', 50, 02)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (08, 'Restaurant3',  '08:30 AM', '06:30 PM', 50, 03)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (09, 'Restaurant4',  '08:30 AM', '06:30 PM', 50, 01)
    INTO Facilities(facilitiesID, facilitiesName, startTime, endTime, capacity, resortID) VALUES (10, 'Restaurant5',  '08:30 AM', '06:30 PM', 50, 02)
SELECT * from dual;

CREATE TABLE GuestsUseFacilities(
    guestID INT,
    facilitiesID INT,
    CONSTRAINT GuestsUseFacilities_pk PRIMARY KEY (guestID, facilitiesID),
    CONSTRAINT GuestsUseFacilities_fk1 FOREIGN KEY (guestID) REFERENCES Guests(guestID) ON DELETE CASCADE,
    CONSTRAINT GuestsUseFacilities_fk2 FOREIGN KEY (facilitiesID) REFERENCES Facilities(facilitiesID) ON DELETE CASCADE
);

INSERT ALL
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 01)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 02)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 03)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 04)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 05)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 06)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 07)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 08)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 09)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (001, 10)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 01)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 02)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 03)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 04)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 05)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 06)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 07)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 08)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 09)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (002, 10)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (003, 01)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (003, 02)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (004, 03)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (004, 04)
    INTO GuestsUseFacilities(guestID, facilitiesID) VALUES (005, 01)
SELECT * from dual;

CREATE TABLE Recreation(
    facilitiesID INT,
    type CHAR(20),
    equipment CHAR(20),
    CONSTRAINT Recreation_pk PRIMARY KEY (facilitiesID),
    CONSTRAINT Recreation_fk FOREIGN KEY (facilitiesID) REFERENCES Facilities(facilitiesID) ON DELETE CASCADE
);

INSERT ALL
    INTO Recreation(facilitiesID, type, equipment) VALUES (01, 'Gym1', 'Cardio')
    INTO Recreation(facilitiesID, type, equipment) VALUES (02, 'Gym2', 'Weights')
    INTO Recreation(facilitiesID, type, equipment) VALUES (03, 'Gym3', 'Cables')
    INTO Recreation(facilitiesID, type, equipment) VALUES  (04, 'Pool1', 'Floats')
    INTO Recreation(facilitiesID, type, equipment) VALUES (05, 'Pool2', 'Diving Boards')
SELECT * from dual;


CREATE TABLE Dining(
    facilitiesID INT,
    cuisine CHAR(20),
    roomService INT,
    alcoholAvailability INT,
    CONSTRAINT Dining_pk PRIMARY KEY (facilitiesID),
    CONSTRAINT dining_fk1 FOREIGN KEY (facilitiesID) REFERENCES Facilities(facilitiesID) ON DELETE CASCADE
);

INSERT ALL
    INTO Dining(facilitiesID, cuisine, roomService, alcoholAvailability) VALUES (06, 'Indian', 1, 1)
    INTO Dining(facilitiesID, cuisine, roomService, alcoholAvailability) VALUES (07, 'Chinese', 1, 1)
    INTO Dining(facilitiesID, cuisine, roomService, alcoholAvailability) VALUES (08, 'Thai', 0, 0)
    INTO Dining(facilitiesID, cuisine, roomService, alcoholAvailability) VALUES (09, 'Korean', 1, 1)
    INTO Dining(facilitiesID, cuisine, roomService, alcoholAvailability) VALUES (10, 'English', 0, 1)
select * from dual;

CREATE TABLE MinorRestriction(
    alcoholAvailability INT,
    minorsAllowed INT,
    CONSTRAINT MinorRestriction_pk PRIMARY KEY (alcoholAvailability)
);

INSERT ALL
    INTO MinorRestriction(alcoholAvailability, minorsAllowed) VALUES (0, 1)
    INTO MinorRestriction(alcoholAvailability, minorsAllowed) VALUES (1, 1)
select * from dual;

CREATE TABLE Minors(
    guestID INT,
    childNumber INT,
    minorName CHAR(20),
    minorAge INT,
    CONSTRAINT Minors_pk PRIMARY KEY (guestID, childNumber),
    CONSTRAINT Minors_fk FOREIGN KEY (guestID) REFERENCES Guests(guestID) ON DELETE CASCADE
);

INSERT ALL
    INTO Minors(guestID, childnumber, minorName, minorAge) VALUES (001, 01, 'Keshav', 16)
    INTO Minors(guestID, childnumber, minorName, minorAge) VALUES (001, 02, 'Sshrey', 9)
    INTO Minors(guestID, childnumber, minorName, minorAge) VALUES (003, 01, 'Divit', 13)
    INTO Minors(guestID, childnumber, minorName, minorAge) VALUES (004, 01, 'Rishi', 6)
    INTO Minors(guestID, childnumber, minorName, minorAge) VALUES (005, 01, 'Aaryan', 3)
SELECT * from dual;