<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
   <meta charset="UTF-8">
   <title>OnTheRoad</title>
 <link rel="stylesheet" href="style0.css">
  <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar">
      <div class="logo"><a href="mainpage.php">OnTheRoad</a></div>
      <ul class="menu">
        <li><a href="#Weather">Weather</a></li>
        <li><a href="#place">Places</a></li>
        <li><a href="#food">Food</a></li>
        <li><a href="#Suggestion">Suggestion</a></li>
        <li><a href="#Review">Review</a></li>
        <form method="GET" action="search.php">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>     
      </ul>
    </div>
  </nav>
  <section id="Weather">
        <?php include 'Weather.php'; ?>
    </section>
   
</html>
<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "Tanawat_ai";
$dbname = "admin";
$conn = new mysqli($host, $username, $password, $dbname);
session_start();
// Get the search query from the form
$query = $_GET["query"];
$_SESSION['query'] = $query;
$label_p = "Place";
$label_f= "Food";

// Prepare a SQL statement to search for matching records
$sql_p = "SELECT * FROM travel WHERE  City LIKE '%".$query."%' AND Label LIKE '%".$label_p."%' " ;
$sql_f = "SELECT * FROM travel WHERE  City LIKE '%".$query."%' AND Label LIKE '%".$label_f."%' " ;
//$sql = "SELECT * FROM travel WHERE Country LIKE '%".$query."%' OR City LIKE '%".$query."%'" ;

// Execute the SQL statement and get the results
$result_p = $conn->query($sql_p);
$result_f = $conn->query($sql_f);

if ($result_p->num_rows > 0) {
    while ($row = $result_p->fetch_assoc()) {
        // Display the title and content of each matching record
        include_once("place.php");
        echo "<h2>".$row["City"].", ".$row["Country"]."</h2>";
        echo "<p>".$row["Content"]."</p>";
        $image_path = 'tmp/'.$row["image_file"];
        echo '<img src="' . $image_path . '" alt="Image Description">';    
    }
}
else {
    // Display a message if no matching records were found
    echo "No results found.";
} 

if ($result_f->num_rows > 0) {
    while ($row = $result_f->fetch_assoc()) {
        // Display the title and content of each matching record
        include_once("food.php");
        echo "<h2>".$row["City"].", ".$row["Country"]."</h2>";
        echo "<p>".$row["Content"]."</p>";
        $image_path = 'tmp/'.$row["image_file"];
        echo '<img src="' . $image_path . '" alt="Image Description">';    
    }
} 

else {
    // Display a message if no matching records were found
    echo "No results found.";
}

// Close the database connection
$conn->close();

?>
