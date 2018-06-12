<?PHP
    session_start();
	// Get all constants from config file.
    include_once 'sql.php';
    // Authenticate that the user came from BlackBoard.

    $notes =  $_POST['notes'];
    $assig = $_POST['AssID'];
    $student = $_POST['StudentID'];
    $rating = $_POST['rating'];
    sql_Insert($assig,$student,$rating,$notes);
    echo "Thanks for your feedback!";
?>