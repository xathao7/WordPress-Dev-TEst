<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Code Test PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
  </head>
  <body>
    <div class="top">
      <div class="top-header">
      </div>
      <div class="nav">
  <nav class="navbar">
    <i class="fas fa-2x fa-bars"></i>
  </nav>
      </div>
    </div>
    <header class="header-title">
      <h1><span class="headText">Top 5 </span>
        <span class="headTestWeb"> Web Design </span>
        <span class="headText"> Podcasts</span></h1>
    </header>
    <?php
        //Getting the json file
        $jsondata = file_get_contents("sample-api-response.json");
        //getting Json data and convert to an array
        $json = json_decode($jsondata, true);
        $count = 1;
        $output = "<div class='row'>";
        //getting individual Poducast info
        foreach($json['podcasts'] as $podcast ){
        //first column displaying images
        $output .= "<section class='podSection'>";
        $output .= "<div class='count'><h2 class='number'>" .$count . "</h2></div>";
        $output .= "<div class='column'>";
        $output .= "<span><img class='podImg' src='".$podcast['image']."' /></span>";
        $output .= "</div>";
        //2nd column displaying(title,author,ep, and social icon)
        $output .= "<div class='column'>";
        $output .= "<h3 class='title'>".$podcast['title']."</h3>";
        $output .= "<h4 class='publisher'>".$podcast['publisher']."</h4>";
        $output .= "<h5 class='episodes'>".$podcast['total_episodes']."</h5>";
        $output .= "<hr style='color:#777777;'>";
        $output .= "<a class='social-icon'><img src='images/apple.svg' alt='apple logo'> ITUNES </a>";
        $output .= "<a class='social-icon' ><img src='images/link.svg' alt='apple logo'> WEB </a>";
        $output .= "<a class='social-icon'><img src='images/rss.svg' alt='apple logo'> RSS </a>";
        $output .= "</div>";
        //third column displaying description
        $output .= "<div class='column'>";
        $output .= "<p class='description'>".$podcast['description']."</p>";
        $output .= "</div>";
        $output .= "</section>";
        $count++;
        }
        $output.="</div>";
        echo $output;
     ?>
  </body>
</html>
