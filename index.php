
<?php require('quoteSelector.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Varun Suresh Kumar</title>
    <link rel="stylesheet" href="styles.css">
  </head>

 <body>
   <div>
     <h1>Varun Suresh Kumar</h1>
     <img src="images/varun_image.jpg" alt="Varun"/>

     <h2>About Me</h2>
     <p>Hello ! My name is Varun Suresh Kumar and I am currently located in Bangalore City (India).
     I passed out of high school two years ago and I am now an undergraduate student at HES.
     I am also a national level badminton player training to one day represent my country at the World Championships and the Olympics.
     I have taken a couple of programming courses in the past two semesters but all of my web development skills are self taught.
     I am looking forward to a great semester where I can sharpen my skills in the field of dynamic web applications.</p>

     <h2>Random Quote</h2>
     <p><?php echo $quote; ?></p>
   </div>
 </body>
</html>
