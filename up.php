<?php

 // build SELECT query
 $query = "UPDATE details SET fname='$_POST[fn]',lname='$_POST[ln]',email='$_POST[em]',pass='$_POST[ps]' WHERE uname='$_POST[un]';

//(NULL,'$_POST[fn]','$_POST[ln]','$_POST[em]','$_POST[un]','$_POST[ps]')";

 // Connect to MySQL
 if ( !( $database = mysql_connect( "localhost",
 "root", "" ) ) )
 die( "Could not connect to database" );

 // open Products database
 if ( !mysql_select_db( "citizen", $database ) )
 die( "Could not open citizen database" );

 // query citizen database
 if ( !( $result = mysql_query( $query, $database ) ) ) {
 print( "Could not execute query! <br />" );
 die( mysql_error() );
 }
else
 print("success");
 ?>

 </body>
 </html>