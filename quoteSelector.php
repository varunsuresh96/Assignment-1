<?php
//Logic to select a random quote.

$quotes = ["\"I have missed more than 9,000 shots in my career. I have lost almost 300 games. On 26 occasions I have been entrusted to take the game winning shot...and I missed. I have failed over and over and over again in my life. And that's precisely why I succeed.\"
-Michael Jordan", "\"Your present circumstances don’t determine where you can go; they merely determine where you start.\"-
Nido Qubein", "\"He who would learn to fly one day must first learn to stand and walk and run and climb and dance; one cannot fly into flying.\"-
Friedrich Nietzsche"];

$quote=$quotes[rand(0,2)];
