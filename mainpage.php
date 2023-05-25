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
    <section id="place">
        <?php include 'place.php'; ?>
    </section>
    <section id="food">
        <?php include 'food.php'; ?>
    </section> 
  <div class="button">
    <a href="#Home"><i class="fas fa-arrow-up"></i></a>
  </div>
 
</body>
</html>