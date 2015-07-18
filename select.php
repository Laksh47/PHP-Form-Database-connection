<?php

 // build SELECT query
 $query = "SELECT * FROM details";

 // Connect to MySQL
 if ( !( $database = mysql_connect( "localhost",
 "root", "" ) ) )
 die( "Could not connect to database" );

 // open Products database
 if ( !mysql_select_db( "citizen", $database ) )
 die( "Could not open demo database" );

 // query Products database
 if ( !( $result = mysql_query( $query, $database ) ) ) {
 print( "Could not execute query! <br />" );
 die( mysql_error() );
 }
 ?>

 <h3 style = "color: blue">
 Search Results</h3>

 <table border = "1" cellpadding = "3" cellspacing = "2"
 style = "background-color: #ADD8E6">

 <?php

 // fetch each record in result set
 for ( $counter = 0;
 $row = mysql_fetch_row( $result );
 $counter++ ){

 // build table to display results
 print( "<tr>" );

 foreach ( $row as $key => $value )
 print( "<td>$value</td>" );

 print( "</tr>" );
 }

 mysql_close( $database );
 ?>
 </table>

 <br />Your search yielded <strong>
 <?php print( "$counter" ) ?> results.<br /><br /></strong>

 <h5>Please email comments to
<a href = "mailto:deitel@deitel.com">
Deitel and Associates, Inc.
 </a>
 </h5>

 </body>
 </html>