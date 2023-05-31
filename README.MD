## Resort Management Project ##  

The project runs a management system for resorts through which the resort manager can look through guests and their bookings as well as resort staff and other administrative tasks. The project also achieves the goal of allowing our management to manage wages through aggregation and look at the resort rooms. At the same time, the guests may also have children or other minor guests with them. This allows to create restrictions for minors by checking for alcohol availability. The resort also has facilities that guests may use which is tracked by the Facility IDs and Guest IDs. 

**Tech Stack:** Oracle, PHP, HTML, SQL
    
**Files Included:**
1) DatabaseSetup.sql - This files creates the tables and fills them with dummy records that the project runs queries on.
2) main.php - This file includes the HTML GUI and the PHP, HTML and Oracle connection needed to run the queries.
3) ERD.png - The Entity-Relationship Diagram of the database system.
    
**The Schema of the Database Created:**   
    
Resorts (resortID: integer, resortName: string, contactNumber: string, resortAddress: string, rating: integer)
Staff (staffID: integer, staffName: string, staffAddress: string, department: string, position: string, joinDate: date, wage: integer, resortID: integer)
ResortsOfferRoomTypes(resortID: integer, roomTypeName: string)
Rooms (roomNumber: integer, wing: integer, squareFeet: integer, roomTypeName: string)
RoomTypes (roomTypeName: string, cost: integer, smokeFriendly: boolean)
Bookings (bookingID: integer, checkInDate: date, checkOutDate: date, totalGuests: integer, totalAmount: integer, roomNumber: integer, resortID: integer)
LoyaltyProgram (tier: string, freeBreakfast: Boolean, priorityBooking: Boolean, travelPartner: string)
Guests (guestID: integer, guestName: string, guestAddress: string, guestContact: string, tier: string)
GuestsMakeBooking(guestID: integer, bookingID: integer)
Facilities (facilitiesID: integer, facilityName: string, startTime: timestamps, endTime: timestamps capacity: integer, resortID:integer)
GuestsUseFacilities(guestID: integer, facilitiesID: integer)
Dining (facilitiesID: integer, cuisine: string, roomService: boolean, alcoholAvailability: boolean)
MinorRestriction (alcoholAvailability: boolean, minorsAllowed: boolean)
Recreation (facilityID: integer, type: string, equipment: string)
Minors (guestID: integer, childNumber: integer, minorName: string, minorAge: integer)
