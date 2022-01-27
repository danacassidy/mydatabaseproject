<?php

include 'database.php';

// use of prepared statements - SQL
// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// ensure that form values were received
if (isset($_POST['newspaper']) && isset($_POST['state'])) {

    // sanitizeMySQL() is a custom function, written below
    $newspaper = sanitizeMySQL($conn, $_POST['newspaper']);
    $state = sanitizeMySQL($conn, $_POST['state']);
    $city = sanitizeMySQL($conn, $_POST['city']);
    $website_link = sanitizeMySQL($conn, $_POST['website_link']);


    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
  $query = "INSERT INTO localnewspapers (newspaper, state, city, website_link)
VALUES (?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'ssss',
        $newspaper,
        $state,
        $city,
        $website_link
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
    echo "New record for " . $newspaper . " entered successfully.";
} else {
    echo "Failed to enter new record!";
} // end of isset if-statement

?>
