KML-TFL-Countdown
=================

Building a simple page to display London Bus Countdown for local stops near our meeting room.

Ideal Display Features (example)(ReturnList=):-
* Current Time	
* Bus Number (371) (LineID)
* Towards (Richmond /Kingston) (Towards)
* Bus Reg No (AB01ABC) RegistrationNumber
* Destination (Richmond or Kingston) (DestinationName)
* Bus Stop Name (Ashburnham Road) (StopPointName)
* Bus Stop Code (51750) (StopCode1)
* Countdown Time (16 min) (EstimatedTime)
* Latitude (Latitude)
* Longitude (Longitude)

Bus Stops to Include (at least the Ashburnham Road ones):-
* Ashburnham Road to Richmond - 51750
* Ashburnham Road to Kingston - 56822
* Mariner Gardens to Richmond - 57780
* Mariner Gardens to Kingston - 57522

Links for Reference:-
* Live Version (may not be latest version on here) - http://www.kml.dreamhosters.com/bus/buscode.php
* TFL Developers Area - http://www.tfl.gov.uk/businessandpartners/syndication/
* TFL Developers Area Feed List - http://www.tfl.gov.uk/businessandpartners/syndication/16493.aspx
* Live bus and river bus arrivals interface documentation PDF - http://www.tfl.gov.uk/assets/downloads/businessandpartners/tfl-live-bus-and-river-bus-arrivals-api-documentation.pdf
* JSON / API Countdown - http://countdown.tfl.gov.uk/stopBoard/75288
* CSV Live Countdown (updated)- http://countdown.api.tfl.gov.uk/interfaces/ura/instant_V1?StopCode1=51750,56822,57780,57522&ReturnList=LineID,Towards,RegistrationNumber,DestinationName,StopPointName,StopCode1,EstimatedTime,Latitude,Longitude,MessageUUID,MessageText,MessageType,MessagePriority,StartTime,ExpireTime 
*CSV Live Countdown Long Version - http://countdown.api.tfl.gov.uk/interfaces/ura/instant_V1?StopCode1=51750,56822,57780,57522&LineName=371&ReturnList=StopPointName,StopID,StopCode1,StopCode2,StopPointState,StopPointType,StopPointIndicator,Towards,Bearing,Latitude,Longitude,VisitNumber,TripID,VehicleID,RegistrationNumber,LineID,LineName,DirectionID,DestinationText,DestinationName,EstimatedTime,MessageUUID,MessageText,MessageType,MessagePriority,StartTime,ExpireTime,BaseVersion
