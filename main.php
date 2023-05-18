<!--The HTML required to run the GUI and receive the user requests-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resort Management Project</title>
</head>
<body>
<h1>Resort Management Project</h1>
<hr>
<h2>Insert a Booking</h2>
<form id="insertForm" name="insertForm" method="post" action="main.php">
    <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
    <label>Booking ID*: </label><input type="text" name="insertBookingID" id="insertBookingID"><br>
    <label>Check In (mm/dd/yy): </label><input type="text" name="insertCheckIn" id="insertcheckIn"><br>
    <label>Check Out (mm/dd/yy): </label><input type="text" name="insertCheckOut" id="insertCheckOut"><br>
    <label>Total Guests: </label><input type="text" name="insertGuests" id="insertGuests"><br>
    <label>Amount ($): </label><input type="text" name="insertAmount" id="insertAmount"><br>
    <label>Room Number: </label><input type="text" name="insertRoomNumber" id="insertRoomNumber"><br>
    <label>Purpose: </label><input type="text" name="insertPurpose" id="insertPurpose"><br>
    <label>Resort ID: </label><input type="text" name="insertResortID" id="insertResortID"><br>
    <label>* Fields are Mandatory</label><br>
    <input type="submit" id="insertSubmit" name="insertSubmit">
</form>
<hr>
<h2>Update a Booking</h2>
<form id="updateForm" name="updateForm" method="post" action="main.php">
    <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
    <label>Booking ID: </label><input type="text" name="updateBookingID" id="updateBookingID"><br>
    <label>Check In (mm/dd/yy): </label><input type="text" name="updateCheckIn" id="updatecheckIn"><br>
    <label>Check Out (mm/dd/yy): </label><input type="text" name="updateCheckOut" id="updateCheckOut"><br>
    <label>Total Guests: </label><input type="text" name="updateGuests" id="updateGuests"><br>
    <label>Amount ($): </label><input type="text" name="updateAmount" id="updateAmount"><br>
    <label>Room Number: </label><input type="text" name="updateRoomNumber" id="updateRoomNumber"><br>
    <label>Purpose: </label><input type="text" name="updatePurpose" id="updatePurpose"><br>
    <label>Resort ID: </label><input type="text" name="updateResortID" id="updateResortID"><br>
    <label>All Fields are Mandatory</label><br>
    <input type="submit" id="updateSubmit" name="updateSubmit">
</form>
<hr>
<h2>Delete a Booking</h2>
<form id="deleteForm" name="deleteForm" method="post" action="main.php">
    <input type="hidden" id="deleteQueryRequest" name="deleteQueryRequest">
    <label>Booking ID*: </label><input type="text" name="deleteBookingID" id="deleteBookingID"><br>
    <label>* Fields are Mandatory</label><br>
    <input type="submit" id="deleteSubmit" name="deleteSubmit">
</form>
<hr>
<h2>Project from the Staff Table</h2>
<h4>Select the attributes to be Projected:</h4>
<form id="projectForm" name="projectForm" method="post" action="main.php">
    <input type="hidden" id="projectFormRequest" name="projectFormRequest">
    <input type="checkbox" name="projectStaffID" id="projectStaffID" value="Yes"><label>staffID</label><br>
    <input type="checkbox" name="projectStaffAddress" id="projectStaffAddress" value="Yes"><label>staffAddress</label><br>
    <input type="checkbox" name="projectDepartment" id="projectDepartment" value="Yes"><label>department</label><br>
    <input type="checkbox" name="projectPosition" id="projectPosition" value="Yes"><label>position</label><br>
    <input type="checkbox" name="projectJoinDate" id="projectJoinDate" value="Yes"><label>joinDate</label><br>
    <input type="checkbox" name="projectWage" id="projectWage" value="Yes"><label>wage</label><br>
    <input type="checkbox" name="projectResortID" id="projectResortID" value="Yes"><label>resortID</label><br>
    <input type="submit" id="displayProjectionSubmit" name="displayProjectionSubmit"></p>
</form>
<h2>Display the Table</h2>
<form method="GET" action="main.php"> <!--refresh page when submitted-->
    <input type="hidden" id="displayTablesRequest" name="displayTablesRequest">
    <input type="submit" id="displayTables" name="displayTables"></p>
</form>
<hr>
<h2>All guests that use all facilities</h2>
<form method="GET" action="main.php"> <!--refresh page when submitted-->
    <input type="hidden" id="divisionRequest" name="divisionRequest">
    <input type="submit" id="displayDivisionSubmit" name="displayDivisionSubmit"></p>
</form>
<hr>
<h2>Guests that have free breakfast based on Tier</h2>
<form method="GET" action="main.php"> <!--refresh page when submitted-->
    <input type="hidden" id="joinRequest" name="joinRequest">
    <label>Tier: </label><input type="text" name="joinTier" id="joinTier"><br>
    <input type="submit" id="displayJoinSubmit" name="displayJoinSubmit"></p>
</form>
<hr>
<h2>Number of Rooms per Wing (Aggregation with group by)</h2>
<form method="GET" action="main.php"> <!--refresh page when submitted-->
    <input type="hidden" id="aggregation1Request" name="aggregation1Request">
    <label>Press this button to generate Results</label><br>
    <input type="submit" id="aggregation1Submit" name="aggregation1Submit"></p>
</form>
<hr>
<h2>Average Wage of Staff in Departments with >1 Employee (Aggregation with Having) </h2>
<form method="GET" action="main.php"> <!--refresh page when submitted-->
    <input type="hidden" id="aggregation2Request" name="aggregation2Request">
    <label>Press this button to generate Results</label><br>
    <input type="submit" id="aggregation2Submit" name="aggregation2Submit"></p>
</form>
<hr>
<h2> The Average Booking amount of more profitable Purposes of Visit for Bigger Groups <br>
    (Nested Aggregation with Group By) </h2>
<h4> Description: Average Amount of Bookings with >2 Guests according to Purpose <br>
    where Average Amount per Purpose of Visit is > Average Amount of all Bookings</h4>
<form method="GET" action="main.php"> <!--refresh page when submitted-->
    <input type="hidden" id="aggregation3Request" name="aggregation3Request">
    <label>Press this button to generate Results</label><br>
    <input type="submit" id="aggregation3Submit" name="aggregation3Submit"></p>
</form>
<hr>
<h2>Selection from Given Tables</h2>
<h4>Select the tables:</h4>
<form id="selectTableForm" name="selectTableForm" method="post" action="main.php">
    <input type="hidden" id="selectTableFormRequest" name="selectTableFormRequest">
    <input type="checkbox" name="SelectBookingsTable" id="SelectBookingsTable" value="Yes"><label>Bookings</label><br>
    <input type="checkbox" name="SelectGuestsTable" id="SelectGuestsTable" value="Yes"><label>Guests</label><br>
    <br>
    <label> If you Selected Bookings Table</label><br>
    <input type="checkbox" name="selectBookingID" id="selectBookingID" value="Yes"><label>bookingID</label><br>
    <input type="checkbox" name="selectCheckInDate" id="selectCheckInDate" value="Yes"><label>checkInDate</label><br>
    <input type="checkbox" name="selectCheckOutDate" id="selectCheckOutDate" value="Yes"><label>checkOutDate</label><br>
    <input type="checkbox" name="selectTotalGuests" id="selectTotalGuests" value="Yes"><label>totalGuests</label><br>
    <input type="checkbox" name="selectTotalAmount" id="selectTotalAmount" value="Yes"><label>totalAmount</label><br>
    <input type="checkbox" name="selectRoomNumber" id="selectRoomNumber" value="Yes"><label>roomNumber</label><br>
    <input type="checkbox" name="selectResortID" id="selectResortID" value="Yes"><label>resortID</label><br>
    <label> If you Selected Guests Table</label><br>
    <input type="checkbox" name="selectGuestID" id="selectGuestID" value="Yes"><label>guestID</label><br>
    <input type="checkbox" name="selectGuestName" id="selectGuestName" value="Yes"><label>guestName</label><br>
    <input type="checkbox" name="selectGuestAddress" id="selectGuestAddress" value="Yes"><label>guestAddress</label><br>
    <input type="checkbox" name="selectGuestContact" id="selectGuestContact" value="Yes"><label>guestContact</label><br>
    <input type="checkbox" name="selectTier" id="selectTier" value="Yes"><label>Tier</label><br>
    <label>Specify the Condition</label><br>
    <input type="text" name="Attribute1" id="Attribute1"><label> = </label><input type="text" name="var1" id="var1"><br>
    <input type="text" name="Attribute2" id="Attribute2"><label> > </label><input type="text" name="var2" id="var2"><br>

    <input type="submit" id="selectTableSubmit" name="selectTableSubmit"></p>
</form>
<hr>

<?php

$db_conn = NULL;
$success = True;
$show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

function debugAlertMessage($message) {
    global $show_debug_alert_messages;

    if ($show_debug_alert_messages) {
        echo "<script type='text/javascript'>alert('" . $message . "');</script>";
    }
}

function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
    //echo "<br>running ".$cmdstr."<br>";
    global $db_conn, $success;

    $statement = oci_parse($db_conn, $cmdstr);
    //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

    if (!$statement) {
        echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
        $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
        echo htmlentities($e['message']);
        $success = False;
    }

    $r = oci_execute($statement, OCI_DEFAULT);
    if (!$r) {
        echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
        $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
        echo htmlentities($e['message']);
        $success = False;
    }

    return $statement;
}

function executeBoundSQL($cmdstr, $list) {
    /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
In this case you don't need to create the statement several times. Bound variables cause a statement to only be
parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
See the sample code below for how this function is used */

    global $db_conn, $success;
    $statement = oci_parse($db_conn, $cmdstr);

    if (!$statement) {
        echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
        $e = OCI_Error($db_conn);
        echo htmlentities($e['message']);
        $success = False;
    }

    foreach ($list as $tuple) {
        foreach ($tuple as $bind => $val) {
            //echo $val;
            //echo "<br>".$bind."<br>";
            oci_bind_by_name($statement, $bind, $val);
            unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
        }

        $r = oci_execute($statement, OCI_DEFAULT);
        if (!$r) {
            echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
            $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
            echo htmlentities($e['message']);
            echo "<br>";
            $success = False;
        }
    }
}

// connects to the Oracle Database
function connectToDB() {
    global $db_conn;
    $db_conn = oci_connect("ora_deep1403", "a77633717", "dbhost.students.cs.ubc.ca:1522/stu");
    if ($db_conn) {
        debugAlertMessage("Database is Connected");
        // echo "Database is Connected";
        return true;
    } else {
        debugAlertMessage("Cannot connect to Database");
        echo "Database did not Connect";
        $e = OCI_Error(); // For OCILogon errors pass no handle
        echo htmlentities($e['message']);
        return false;
    }
}

// disconnects from the Oracle Database when done with user requests.
function disconnectFromDB() {
    global $db_conn;
    echo "database disconnected";
    debugAlertMessage("Disconnect from Database");
    oci_close($db_conn);
}

// Fetches and shows the Bookings Table on the Web page
function displayBookingsTable($result) {
    echo "<hr>";
    echo "<br>Bookings Table:<br>";
    echo "<table>";
    echo "<tr><th>BookingID</th><th>CheckInDate</th><th>CheckOutDate</th><th>TotalGuests</th><th>TotalAmount</th>
                <th>RoomNumber</th><th>Purpose</th><th>ResortID</th></tr>";

    while ($row = oci_fetch_array($result, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td>
            <td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td>
            <td>" . $row[5] . "</td><td>" . $row[6] . "</td><td>" . $row[7] . "</td></tr>";
    }

    echo "</table>";
}

// Fetches and shows the results of the Division Query in a Table on the Web page
function displayDivisionTable($divisionResult) {
    echo "<hr>";
    echo "<br>Guests Table:<br>";
    echo "<table>";
    echo "<tr><th>GuestID</th><th>GuestName</th></tr>";
    while ($row = oci_fetch_array($divisionResult, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td></tr>";
    }
    echo "</table>";
}

// Fetches and shows the results of the Join Query in a Table on the Web page
function displayJoinTable($joinResult) {
    echo "<hr>";
    echo "<br>Guests Table:<br>";
    echo "<table>";
    echo "<tr><th>GuestID</th><th>GuestName</th><th>Tier</th><th>FreeBreakfast</th></tr>";
    while ($row = oci_fetch_array($joinResult, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td><td>" . $row[2] ."</td><td>" . $row[3] ."</td></tr>";
    }
    echo "</table>";
}

// Fetches and shows the results of the Projection Query in a Table on the Web page
function displayProjectionTable($projectionResult, $staff) {
        echo "<hr>";
        echo "<br>Staff Table:<br>";
        echo "<table>";
        $column = "<tr>";
        for ($x= 0; $x<count($staff); $x++){
           $column .= "<th>";
           $column .= $staff[$x];
           $column .= "</th>";
        }

       $column .= "</tr>";
       echo $column;
    while ($row = oci_fetch_array($projectionResult, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td><td>" . $row[2] ."</td><td>" . $row[3] ."</td>
        <td>" . $row[4] ."</td><td>" . $row[5] ."</td><td>" . $row[6] ."</td></tr>";
        }
    echo "</table>";
}

// Fetches and shows the results of the Selection Query in a Table on the Web page
function displaySelectionTable($selectionResult, $chosenColumns, $chosenTable) {
    echo "<hr>";
    echo "<br> $chosenTable<br>";
    echo "<table>";
    $column = "<tr>";
    for ($x= 0; $x<count($chosenColumns); $x++){
        $column .= "<th>";
        $column .= $chosenColumns[$x];
        $column .= "</th>";
    }

    $column .= "</tr>";
    echo $column;
    while ($row = oci_fetch_array($selectionResult, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td><td>" . $row[2] ."</td><td>" . $row[3] ."</td>
            <td>" . $row[4] ."</td><td>" . $row[5] ."</td></tr>";
    }
    echo "</table>";
}

// Fetches and shows the results of the first Aggregation Query in a Table on the Web page
function displayAggregation1Table($aggregation1_result) {
    echo "<hr>";
    echo "<br>Number of Rooms Per Wing<br>";
    echo "<table>";
    echo "<tr><th>Wing</th><th>Number of Rooms</th></tr>";
    while ($row = oci_fetch_array($aggregation1_result, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td></tr>";
    }
    echo "</table>";
}

// Fetches and shows the results of the second Aggregation Query in a Table on the Web page
function displayAggregation2Table($aggregation2_result) {
    echo "<hr>";
    echo "<br>Average Wage per Department (with more than 1 employee)<br>";
    echo "<table>";
    echo "<tr><th>Department</th><th>Average Wage</th></tr>";
    while ($row = oci_fetch_array($aggregation2_result, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td></tr>";
    }
    echo "</table>";
}

// Fetches and shows the results of the third Aggregation Query in a Table on the Web page
function displayAggregation3Table($aggregation3_result) {
    echo "<hr>";
    echo "<br>The Average Booking Amount for more profitable Purposes of Visit of Bigger Groups<br>";
    echo "<table>";
    echo "<tr><th>Purpose</th><th>Average Amount</th></tr>";
    while ($row = oci_fetch_array($aggregation3_result, OCI_BOTH)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td></tr>";
    }
    echo "</table>";
}

// Handles an Insert Request to the Bookings Table
function handleInsertRequest()
{
    global $db_conn;

    //Getting the values from user and insert data into the table
    $tuple = array(
        ":bind1" => $_POST['insertBookingID'],
        ":bind2" => date("d-M-y", strtotime($_POST['insertCheckIn'])),
        ":bind3" => date("d-M-y", strtotime($_POST['insertCheckOut'])),
        ":bind4" => $_POST['insertGuests'],
        ":bind5" => $_POST['insertAmount'],
        ":bind6" => $_POST['insertRoomNumber'],
        ":bind7" => $_POST['insertPurpose'],
        ":bind8" => $_POST['insertResortID']
    );

    $alltuples = array(
        $tuple
    );

    executeBoundSQL("insert into bookings values (:bind1, :bind2, :bind3, :bind4, :bind5,
                             :bind6, :bind7, :bind8)", $alltuples);
    oci_commit($db_conn);
    $result = executePlainSQL("SELECT * FROM Bookings");
    displayBookingsTable($result);
}

// Handles an Update an existing Booking Request in the Bookings Table
function handleUpdateRequest() {
    global $db_conn;

    $booking_ID = $_POST['updateBookingID'];
    $check_in = date("d-M-y", strtotime($_POST['updateCheckIn']));
    $check_out = date("d-M-y", strtotime($_POST['updateCheckOut']));
    $total_guests = $_POST['updateGuests'];
    $amount = $_POST['updateAmount'];
    $room_number = $_POST['updateRoomNumber'];
    $purpose = $_POST['updatePurpose'];
    $resort_ID = $_POST['updateResortID'];

    // you need the wrap the old name and new name values with single quotations
    executePlainSQL("UPDATE bookings SET totalGuests='" . $total_guests . "', totalAmount = '" . $amount . "',
     roomNumber='" . $room_number . "', resortID='" . $resort_ID. "' , checkInDate='" . $check_in . "'
    , checkOutDate='" . $check_out . "', purpose= '" . $purpose . "' WHERE bookingID ='" . $booking_ID . "'");
    oci_commit($db_conn);
    $result = executePlainSQL("SELECT * FROM Bookings");
    displayBookingsTable($result);
}

// Handles a delete an existing booking request in the Bookings Table
function handleDeleteRequest() {
    global $db_conn;

    $booking_ID = $_POST['deleteBookingID'];
    executePlainSQL("DELETE FROM bookings WHERE bookingID ='" . $booking_ID . "'");
    oci_commit($db_conn);
    $result = executePlainSQL("SELECT * FROM Bookings");
    displayBookingsTable($result);
}

// Handles the Division Query Request
function handleDivisionRequest(){
    global $db_conn;
    $divisionResult = executePlainSQL("select g.guestID, g.guestName
                        from guests g
                        where NOT EXISTS (select f.facilitiesID
                                          from Facilities f
                                          where NOT EXISTS (select guf.guestid
                                                            from GuestsUseFacilities guf
                                                            where f.facilitiesID = guf.facilitiesID
                                                              and guf.guestID = g.guestID))");
    echo $divisionResult;
    displayDivisionTable($divisionResult);
}

// Handles the Join Query Request
function handleJoinRequest(){
    $tier = $_GET['joinTier'];
    $joinResult = executePlainSQL("SELECT Guests.GuestID, Guests.GuestName, LoyaltyProgram.tier, LoyaltyProgram.freeBreakfast
                                       FROM Guests
                                       RIGHT JOIN LoyaltyProgram ON Guests.Tier=LoyaltyProgram.tier
                                       WHERE Guests.Tier='" . $tier . "'");
    echo $joinResult;
    displayJoinTable($joinResult);
}

// Handles the Projection Query Request
function handleProjectionRequest(){

    $staff = array();

    if(isset($_POST['projectStaffID']) &&
       $_POST['projectStaffID'] == 'Yes') {
       array_push($staff, "StaffId");
       }

    if(isset($_POST['projectStaffAddress']) &&
       $_POST['projectStaffAddress'] == 'Yes') {
       array_push($staff, "StaffAddress");
    }

    if(isset($_POST['projectDepartment']) &&
           $_POST['projectDepartment'] == 'Yes') {
           array_push($staff, "Department");
    }

    if(isset($_POST['projectPosition']) &&
           $_POST['projectPosition'] == 'Yes') {
           array_push($staff, "Position");
    }

    if(isset($_POST['projectWage']) &&
                       $_POST['projectWage'] == 'Yes') {
                       array_push($staff, "Wage");
    }

    if(isset($_POST['projectJoinDate']) &&
               $_POST['projectJoinDate'] == 'Yes') {
               array_push($staff, "JoinDate");
    }

    if(isset($_POST['projectResortID']) &&
                   $_POST['projectResortID'] == 'Yes') {
                   array_push($staff, "ResortID");
    }

    $proj = "SELECT ";

    for ($x= 0; $x<count($staff); $x++){
        $proj .= "Staff.";
        $proj .= $staff[$x];
        $proj .= ", ";
    }

    $proj = rtrim($proj, " , ");
    $proj .= " FROM Staff";

    $projectionResult = executePlainSQL($proj);
   echo $projectionResult;
    displayProjectionTable($projectionResult, $staff);
}

// Handles the Selection Query Request
function handleSelectionRequest(){
    global $db_conn;
    $chosenTable = '';

    if(isset($_POST['SelectBookingsTable']) &&
        $_POST['SelectBookingsTable'] == 'Yes') {
        $chosenTable = 'Bookings';
    }

    if(isset($_POST['SelectGuestsTable']) &&
        $_POST['SelectGuestsTable'] == 'Yes') {
        $chosenTable = 'Guests';
    }


    $chosenColumns = array();

    if(isset($_POST['selectBookingID']) &&
        $_POST['selectBookingID'] == 'Yes') {
        array_push($chosenColumns, "bookingID");

    }
    if(isset($_POST['selectCheckInDate']) &&
        $_POST['selectCheckInDate'] == 'Yes') {
        array_push($chosenColumns, "checkOutDate");

    }
    if(isset($_POST['selectCheckOutDate']) &&
        $_POST['selectCheckOutDate'] == 'Yes') {
        array_push($chosenColumns, "bookingID");
    }
    if(isset($_POST['selectTotalGuests']) &&
        $_POST['selectTotalGuests'] == 'Yes') {
        array_push($chosenColumns, "totalGuests");
    }
    if(isset($_POST['selectTotalAmount']) &&
        $_POST['selectTotalAmount'] == 'Yes') {
        array_push($chosenColumns, "totalAmount");
    }
    if(isset($_POST['selectRoomNumber']) &&
        $_POST['selectRoomNumber'] == 'Yes') {
        array_push($chosenColumns, "resortID");
    }
    if(isset($_POST['selectBookingID']) &&
        $_POST['selectBookingID'] == 'Yes') {
        array_push($chosenColumns, "bookingID");
    }
    if(isset($_POST['selectGuestID']) &&
        $_POST['selectGuestID'] == 'Yes') {
        array_push($chosenColumns, "guestID");
    }
    if(isset($_POST['selectGuestName']) &&
        $_POST['selectGuestName'] == 'Yes') {
        array_push($chosenColumns, "guestName");
    }
    if(isset($_POST['selectGuestAddress']) &&
        $_POST['selectGuestAddress'] == 'Yes') {
        array_push($chosenColumns, "guestAddress");
    }
    if(isset($_POST['selectGuestContact']) &&
        $_POST['selectGuestContact'] == 'Yes') {
        array_push($chosenColumns, "guestContact");
    }
    if(isset($_POST['selectTier']) &&
        $_POST['selectTier'] == 'Yes') {
        array_push($chosenColumns, "Tier");
    }

    $Att1 = $_POST['Attribute1'];
    $Att2 = $_POST['Attribute2'];
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];


    $proj = "SELECT ";

    for ($x= 0; $x<count($chosenColumns); $x++){
        $proj .= $chosenTable ;
        $proj .= ".";
        $proj .= $chosenColumns[$x];
        $proj .= ", ";
    }

    $proj = rtrim($proj, " , ");
    $proj .= " FROM ";
    $proj .= $chosenTable;

    $proj .= " WHERE ";
    $proj .= $Att1 ;
    $proj .= ' = ';
    $proj .= "'";
    $proj .= $var1 ;
    $proj .= "'";
    $proj .= ' AND ';
    $proj .= $Att2 ;
    $proj .= ' > ';
    $proj .= $var2 ;



    $selectionResult = executePlainSQL($proj);
    // echo $selectionResult;
    displaySelectionTable($selectionResult, $chosenColumns, $chosenTable);


}

// Handles the Aggregation with Group By Query Request
function handleAggregationWithGroupByRequest() {
    $aggregation1_result = executePlainSQL("SELECT wing, COUNT(*) FROM Rooms GROUP BY wing");
    displayAggregation1Table($aggregation1_result);
}

// Handles the Aggregation with Having Query Request
function handleAggregationWithHavingRequest() {
    $aggregation2_result = executePlainSQL("SELECT department, AVG(wage) FROM Staff GROUP BY department 
                                                    HAVING COUNT(*)>1");
    displayAggregation2Table($aggregation2_result);
}

// Handles the Nested Aggregation Query Request
function handleNestedAggregationRequest() {
    $aggregation3_result = executePlainSQL("SELECT purpose, AVG(B.totalAmount) FROM Bookings B 
                                                    WHERE B.totalGuests > 2 
                                                    GROUP BY B.purpose 
                                                    HAVING AVG(B.totalAmount) > 
                                                    (SELECT AVG(B2.totalAmount) FROM Bookings B2)");
    displayAggregation3Table($aggregation3_result);
}

// Handles and Directs all $POST requests to the right handler depending on user input
function handlePOSTRequest()
{
    if (connectToDB()) {
        if (array_key_exists('updateQueryRequest', $_POST)) {
            handleUpdateRequest();
        } else if (array_key_exists('deleteQueryRequest', $_POST)) {
            handleDeleteRequest();
        } else if (array_key_exists('insertQueryRequest', $_POST)) {
            handleInsertRequest();
        } else if (array_key_exists('projectFormRequest', $_POST)) {
            handleProjectionRequest();
        } else if (array_key_exists('selectTableFormRequest', $_POST)) {
            handleSelectionRequest();
        }
    }
}

// Handles and Directs all $GET requests to the right handler depending on user input
function handleGETRequest() {
    if (connectToDB()) {
        if (array_key_exists('displayTablesRequest', $_GET)) {
            displayBookingsTable();
        } else if (array_key_exists('divisionRequest', $_GET)) {
            handleDivisionRequest();
        } else if (array_key_exists('joinRequest', $_GET)) {
            handleJoinRequest();
        } else if (array_key_exists('aggregation1Request', $_GET)) {
            handleAggregationWithGroupByRequest();
        } else if (array_key_exists('aggregation2Request', $_GET)) {
            handleAggregationWithHavingRequest();
        } else if (array_key_exists('aggregation3Request', $_GET)) {
            handleNestedAggregationRequest();
        }
    }
}

// Handles the request by the user depending on the button pressed
if (isset($_POST['insertSubmit'])||isset($_POST['updateSubmit'])||
    isset($_POST['deleteSubmit'])||isset($_POST['displayProjectionSubmit'])||isset($_POST['selectTableSubmit'])) {
    handlePOSTRequest();
} else if (isset($_GET['displayTablesRequest'])||
    isset($_GET['displayDivisionSubmit'])||isset($_GET['displayJoinSubmit'])||
    isset($_GET['aggregation1Submit'])||isset($_GET['aggregation2Submit'])||
    isset($_GET['aggregation3Submit'])) {
    handleGETRequest();
}
?>
</body>
</html>
