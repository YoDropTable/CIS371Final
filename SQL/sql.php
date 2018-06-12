<?PHP
    session_start();

    $dbConn=mysqli_connect("localhost:6306","student8","pass8","student8");
    $testDB=mysqli_connect("localhost:6306","read","read","world");

    function getComments($assignmentID){
        $myCmd = "select * from ourAssignments where assignmentID = '$assignmentID';";
        global $dbConn;
        return mysqli_query($dbConn, $myCmd);
    }

    function sql_Insert($assID,$studentID,$rating,$notes){
        $query = "insert into ourAssignments (assignmentID, studentID, rating,notes) values ('$assID', '$studentID', '$rating','$notes')";

        global $dbConn;
        return mysqli_query($dbConn, $query);
    }

    function sql_TestQuery(){
        $query = "select Name, Population, LifeExpectancy from Country where LifeExpectancy is not null order by 3 desc limit 10";

        global $testDB;
        return mysqli_query($testDB, $query);
    }

    function getRating($assig){
        global $dbConn;
        $query = "select rating,count(*) from ourAssignments where assignmentID = '$assig' GROUP BY rating;";
        return mysqli_query($dbConn, $query);

    }

?>