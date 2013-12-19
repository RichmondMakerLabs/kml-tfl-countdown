KML-TFL-Countdown
=================

Building a simple page to display London Bus Countdown for local stops near our meeting room.

Ideal Display Features with examples in brackets & in no particular order:-
* Bus Number (371)
* Countdown Time (16 min)
* Destination (Richmond or Kingston)
* Bus Stop Name (Ashburnham Road)
* Bus Stop Code (51750)
* Current Time
* 

Notes:-
* Ashburnham Road to Richmond - 51750
* Ashburnham Road to Kingston - 56822
* Mariner Gardens to Richmond - 57780
* Mariner Gardens to Kingston - 57522

Links for Reference:-
* TFL Developers Area - http://www.tfl.gov.uk/businessandpartners/syndication/
* TFL Developers Area Feed List - http://www.tfl.gov.uk/businessandpartners/syndication/16493.aspx
* Live bus and river bus arrivals interface documentation PDF - http://www.tfl.gov.uk/assets/downloads/businessandpartners/tfl-live-bus-and-river-bus-arrivals-api-documentation.pdf
* JSON / API Countdown - http://countdown.tfl.gov.uk/stopBoard/75288
* CSV Live Countdown - http://countdown.api.tfl.gov.uk/interfaces/ura/instant_V1?StopCode1=51750,56822,57780,57522&LineName=371&ReturnList=StopPointName,LineName,DestinationText,EstimatedTime,ExpireTime
* *CSV Live Countdown Long Version - http://countdown.api.tfl.gov.uk/interfaces/ura/instant_V1?StopCode1=51750,56822,57780,57522&LineName=371&ReturnList=StopPointName,StopID,StopCode1,StopCode2,StopPointState,StopPointType,StopPointIndicator,Towards,Bearing,Latitude,Longitude,VisitNumber,TripID,VehicleID,RegistrationNumber,LineID,LineName,DirectionID,DestinationText,DestinationName,EstimatedTime,MessageUUID,MessageText,MessageType,MessagePriority,StartTime,ExpireTime,BaseVersion
