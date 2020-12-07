<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cascade.css">
    <style>
        body {
            background-color: #f3f5f9;
        }
        
        p {
            text-indent: 5%;
            color: black;
            text-size: 50;
        }
        
        li {
            list-style-type: circle;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: rgb(25, 0, 255);
        }
        
        .image {
            -ms-flex: 25%;
            flex: 25%;
            max-width: 50%;
            padding: 0 4px;
        }
        
        .wrapper.main_content.countries {
            text-indent: 20%;
        }

        .wrapper .main_content li :active {
            color: rgb(25, 0, 255);
        }

        .wrapper .main_content li :visited {
            color: rgb(25, 0, 255);
        }

        .video {
            position: absolute;
            top: 2%;
            right: 10%;
            overflow: scroll;
            background-attachment: fixed;
        }
        
        .button {
            position: -webkit-sticky;
            background-color: #4b4276;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>
                <a href="homenew.php">
                    <font color="aliceblue"><b>A2Z</b></font>
                </a>
            </h2>
            <ul>
                <li><a href="homenew.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="gallerynew.php"><i class="fa fa-youtube-play"></i>  Gallery</a></li>
                <li><a href="aboutnew.php"><i class="fas fa-address-card"></i>About</a></li>
                
                <?php
                    if(isset($_SESSION['user']))
                    {
                    echo(" <li><a><i class='fa fa-sign-in'></i>Hi " .$_SESSION['user']. "</a></li>");
                    echo('<li><a href="new_logout.php?logout">Logout</a></li>');
                    }

                    else
                    {
                    echo "<li><a href='login.php'><i class='fa fa-sign-in'></i>  login</a></li>";
                    }
                ?>
                <li><a href="https://www.google.com/maps/place/Coimbatore+Institute+of+Technology/@11.0283259,77.0250919,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba858979f85136b:0xdd9ca28d3c37cf8a!8m2!3d11.0283259!4d77.0272806" target="_blank"><i class="fas fa-map-pin"></i>Find us on</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">

            <br>
            <h1><b><center><font color="rgb(25, 0, 255)">A2Z TRIPS<sub style="font-size:15px">by rador groups</sub></font></center></b></h1>
            <br>
            <hr width="100%" size="2px" color="red">
            <br>

            <h2><b>COUNTRIES</b></h2><br>
            <ul>
                <li><a href="#australia">AUSTRALIA</a></li>
                <ul class="intend">
                    <li><a href="#kangaroo">KANGAROO ISLAND</a></li>
                    <li><a href="#greatbarrier">GREAT BARRIER REEF</a></li>
                </ul>
                <li><a href="#brazil">BRAZIL</a></li>
                <ul class="intend">
                    <li><a href="#parati">PARATI/PARATY</a></li>
                    <li><a href="#rio">RIO DE JANEIRO</a></li>
                    <ul class="intend">
                        <li><a href="#cristo">CRISTO REDENTOR </a></li>
                        <li><a href="#maracana">MARACANA</a></li>
                    </ul>
                </ul>
            </ul>
            <iframe class="video" align="right" width="560" height="315" src="https://www.youtube.com/embed/_Ue6LNYDM2c" frameborder="0" allow="accelerometer; autoplay; 
		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <br><br>
            <a href="bookaustralia.php" class="button">BOOK NOW</a>
            <br><br>

            <h3><u><b><a id="australia">AUSTRALIA</a></b></u></h3><br>
            <h4><b>ABOUT AUSTRALIA</b></h4><br>
            <p>Australia, officially the Commonwealth of Australia, is a sovereign country comprising the mainland of the Australian continent, the island of Tasmania, and numerous smaller islands. It is the largest country in Oceania and the world's sixth-largest
                country by total area. The population of 26 million is highly urbanised and heavily concentrated on the eastern seaboard. Australia's capital is Canberra, and its largest city is Sydney. The country's other major metropolitan areas are
                Melbourne, Brisbane, Perth, and Adelaide.</p><br>
            <h4><b>PLACES TO VISIT IN AUSTRALIA</b></h4><br>
            <ul>
                <li><b><h4><a id="kangaroo">KANGAROO ISLAND</a></h4></b></li><br>
                <p>Kangaroo Island, 13 kilometres (8 miles) off the coast of South Australia and 30 minutes by plane from Adelaide, is brimming with native animals, artisanal food, epic rock formations and even the world's best hotels, perched on the edge
                    of the sea. There's enough to do here to fill your days, but don't forget to follow the local's leave and simply enjoy the fresh air, beautiful food and unique wildlife.</p>
                <h4><b><br>
							<p><center>"THE BEAUTY [OF KANGAROO ISLAND] IS ITS ISOLATION, ESCAPING THE CROWDS,</center></p>
							<p><center>DISCONNECTING FROM TECHNOLOGY. THE LIFESTYLE REFLECTS THAT."</center></p>
						</b></h4><br>
                <h3><b>Don't miss</b></h3><br>
                <ul>
                    <li>Walk on the beach through a colony of sea lions</li>
                    <li>Be surrounded by wildlife, pounding ocean and strange rock formations</li>
                    <li>Stay at one of the world's top four hotels</li>
                </ul><br>
                <center><img class="image" src="kangarooisland.jpg">
                </center><br>

                <li><b><h4><a id="greatbarrier">GREAT BARRIER REEF</a></h4></b></li><br>
                <p>Home to diverse marine life of the most vivid colours, the Great Barrier Reef offers the opportunity for great adventure, both in luxury and on a budget. Whether you explore the stunning Whitsunday Islands, trek the ancient Daintree Rainforest
                    or relax on luxurious tropical islands such as Hayman and Lizard, a day on the reef is all about the unforgettable nature that surrounds you. Adopt Australia's easygoing attitude when you island-hop, or stay in one of the many coastal
                    getaways such as Cairns, Airlie Beach, Hervey Bay, Mission Beach and Port Douglas.</p>
                <h4><b><br>
							<p><center>"THE GREAT BARRIER REEF IS ONE OF THOSE PLACES YOU MUST VISIT, </center></p>
							<p><center>WHETHER YOU LOVE THE WATER OR JUST WANT TO SEE ONE OF THE GREAT</center></p> 
							<p><center>WONDERS OF THE WORLD."</center></p>
						</b></h4><br>
                <h3><b>Don't miss</b></h3><br>
                <ul>
                    <li>Sail through the 74 idyllic islands of the Whitsundays</li>
                    <li>Stay in island resorts among the clear, warm waters of the Great Barrier Reef and the Coral Sea</li>
                    <li>View and experience incredible marine life, from over and under the water</li>
                </ul><br>
                <center><img class="image" src="greatbarrier.jpg">
                </center><br>
                <h3 align="left"><u><b><a id="brazil">BRAZIL</a></b></u></h3><br>
                <h4><b>ABOUT BRAZIL</b></h4><br>
                <p>Famous for being home to one of the world’s top football teams, the Rio de Janeiro Carnival and the remarkable Iguazu Falls, Brazil is an exciting world travel destination. As South America’s largest country, Brazil covers a majority of
                    the continent’s northeastern region and borders all of its countries except for Chile and Ecuador. <br> From the Amazon rainforest in the North to the tropical beaches along the Atlantic, to the Pantanal wetlands and the vibrant metropolises
                    of the Southeast there are plenty of interesting places to visit in Brazil.</p><br>
                <h4><b>PLACES TO VISIT IN BRAZIL</b></h4><br>
                <ul>
                    <li><b><h4><a id="parati">PARATI/PARATY</a></h4></b></li><br>
                    <p>A paradise of tropical forests, waterfalls, emerald sea and coastal mountains, Parati is a popular tourist attraction located along Brazil’s Green Coast in the Rio de Janeiro state. Also spelled Paraty, this beautiful city is a former
                        Portuguese colony established on the shores of the Bay of Ilha Grande. The heart of Parati is its historic center with cobbled streets and multicolored colonial houses, many of which now serve as bed-and-breakfast accommodations
                        called pousadas. One of the most popular attractions are the colonial defense forts that still boast original walls and cannons.</p>
                    <br>
                    <h4><b>Culture and tourism</b></h4><br>
                    <ul>
                        <li>There are many musical and cultural events, the most prominent of which is the FLIP – Festa Literaria Internacional de Paraty (International Literary Festival of Paraty). The town is also known for its local festivals on Catholic
                            holy dates, such as the Feast of the Holy Ghost.</li><br>

                        <li>The annual Paraty Bourbon Jazz Festival has occurred every May since 2009. The traditional music event has already brought names like Stanley Jordan, Gary Brown, Ed Motta, Leo Gandelman, Eumir Deodato, Joshua Redman, Pau Brasil
                            Group, Dianne Reaves, Mike Stern, Naná Vasconcellos, Nuno Mindelis, Jacques Morelenbaum, Stanley Clarke, and many other leading names in jazz, blues, soul and R & B from Brazil and the world.</li><br>

                        <li>The event usually has two stages, located in the Plaza de Matriz and the Santa Rita Church in the historic center of the city, as well as buskers (street performers) and Orleans Street Jazz Band circling the streets of the Historic
                            Center and DJ Crizz that opens and closes programming every day.</li><br>

                        <li>The Casa da Cultura Paraty (Paraty House of Culture) occupies an historic house originally built in 1754 which opened to the public in 2004[9] and holds a permanent exhibition on local history and culture. In the Salon of Indigenous
                            Culture, visitors can see the “carpets” made of colored sawdust and flower petals used during the festival of Corpus Christi in June. The largest is almost 92 square feet (8.5 m2). The “carpet” is protected by glass so that
                            visitors walk on it as they enter.</li><br>

                        <li>Paraty played the part of the Bahian town of Ilhéus in the 1983 Bruno Barreto film Gabriela, Cravo e Canela, starring Sônia Braga and Marcello Mastroianni.</li><br>
                    </ul>
                    <center><img class="image" src="paraty.jpg">
                        < </center> <br>
                            <li><b><h4><a id="rio">RIO DE JANEIRO</a></h4></b></li><br>
                            <p>There is no destination on earth more animated and exciting than Rio de Janeiro. Located in southeastern Brazil, Rio de Janeiro is the most visited city of South America due to its famous mountains, landmarks, beaches and Carnival
                                festival. Rio de Janeiro is situated on one of the world’s largest harbors surrounded by natural attractions that include the Sugarloaf and Corcovado mountains and famous beaches like Copacabana and Ipanema. The city’s
                                iconic landmark is the enormous Christ the Redeemer statue sitting atop Corcovado mountain. Carnival celebrations here are among the largest in the world, with vibrant parades, costumes, dancing, music, fireworks and street
                                parties.
                            </p><br>
                            <p>With its white sandy beaches, soaring mountains and picturesque harbor, it’s no wonder that Rio de Janeiro is known as the “cidade maravilhosa”, or marvelous city. Facing the South Atlantic coast, the second-largest city in
                                Brazil is blessed with one of the most beautiful natural settings for a metropolis in the world.<br></p>
                            <p> The dazzling landscape is just one of the reasons that visitors flock to Rio. During carnival season, the streets fill with music and ornately costumed dancers, attracting revelers from all over the globe. At any time of year,
                                visitors won’t want to miss the top tourist attractions in Rio de Janeiro.</p> <br>
                            <center><img class="image" src="rio.jpg" width="100%">
                            </center> <br>
                            <ul>
                                <li><b><h4><a id="cristo">CRISTO REDENTOR (Christ the Redeemer)</a></h4></b></li><br>
                                <p>The giant statue of Christ overlooking the city from the 709-meter summit of Corcovado is almost as widely recognized a symbol of Rio as the distinctive shape of Sugarloaf. The world-famous landmark was erected between
                                    1922 and 1931, financed almost entirely by contributions from Brazilian Catholics.</p><br>
                                <p>The Art Deco statue was created by Polish-French sculptor Paul Landowski and built by the Brazilian engineer Heitor da Silva Costa, in collaboration with the French engineer Albert Caquot. Made of reinforced concrete and
                                    soapstone, the figure itself is 30 meters tall with arms stretching 28 meters; it weighs 635 metric tons. Inside its eight-meter-high base is a chapel, where it's not uncommon to find weddings and baptisms taking place.
                                    The Corcovado rack railway chugs from Rua do Cosme Velho up the 3.5-kilometer track to the statue, through the Tijuca National Park. You can see this monument without the usual crowds and by early morning light on a
                                    guided Early Access to Christ Redeemer Statue with Optional Sugarloaf Mountain Tour. A tour upgrade includes a cable car ride up Sugarloaf Mountain for more stunning views.</p><br><br>
                                <center><img class="image" src="cristo.jpg">
                                </center><br>
                                <li><b><h4><a id="maracana">MARACANA</a></h4></b></li><br>
                                <p>A must-see for football (soccer) fans when a game is scheduled, Brazil's largest stadium was home to the opening and closing ceremonies of the 2016 Summer Olympic Games. It was completely renovated for the FIFA World Cup
                                    2014 and holds more than 78,000 fans. The stadium is used for matches between Rio's major football clubs, the Flamengo, Botafogo, Fluminense, and Vasco da Gama, as well as for concerts. The brief tour would be of interest
                                    to avid fans, but others should give it a miss.<br></p>
                                <p> The shore of Lagoa Rodrigo de Freitas, near Copacabana and Ipanema, where many other Olympic events took place, is lined by parks and sports clubs, and its waters are popular for regattas and other water sports.<br><br></p><br>
                                <center><img class="image" src="maracana.jpg">
                                </center> <br>
        </div>
    </div>
</body>

</html>