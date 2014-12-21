<?php
            
    //retrieve tratment & doctors values from the URL
    $treatment = $_GET["t"];
    $country = $_GET["c"];         
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
            <title></title>

            <!-- load all common head tags, stylesheets & scripts -->
            <?php include 'pagecomponents/commonhead.php'; ?>

            <script>

            </script>
        </head>

        <body>
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <?php include 'pagecomponents/siteheader.php'; ?>
            
            
            

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <article>
                        <header>
                            <h1>
                                <?php 
                                echo $treatment. " Doctors"; 
                                if(!empty($country)) { 
                                     echo " in ". $country;   
                                 }
    
                                ?>

                            </h1>
                        </header>
                        <!-- Search Functionality  -->          

                        <a href="doctor.php"> Doctor Page</a>


                        <br>
                        <br>
                        <br>
                        <br>

                        <?php
                        // put your code here

                        $url = isset($_GET['url']) ? $_GET['url'] : null;
                        var_dump($url);


                        echo "Retrieving staff records for BlackMamba Inc employees...";
                        echo "<br><br>";

                        //local hosted db
                        $link = mysql_connect(
                                ':/Applications/MAMP/tmp/mysql/mysql.sock', 'root', 'root'
                        );

                        //AWS DB
                        //$link = mysql_connect(
                        //'blackmamba.cm3fn0yhwehj.us-east-1.rds.amazonaws.com',
                        //'adamforbes',
                        //'blackmamba'
                        //);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        mysql_select_db('blackmamba');


                        $query = "SELECT * FROM Persons";

                        $result = mysql_query($query);

                        if (!$result) {
                            $message = 'Invalid query: ' . mysql_error() . "\n";
                            $message .= 'Whole query: ' . $query;
                            die($message);
                        }
                        while ($row = mysql_fetch_assoc($result)) {
                            echo $row['PersonID'];
                            echo "<br><br>";
                            echo $row['LastName'];
                            echo "<br><br>";
                            echo $row['Address'];
                            echo "<br><br>";
                            echo $row['City'];
                            echo "<br><br>";
                        }
                        ?>

                        <section>
                            <h2>article section h2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                        </section>
                        <section>
                            <h2>article section h2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                        </section>
                        <footer>
                            <h3>article footer h3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                        </footer>
                    </article>

                    <aside>
                        <h3>aside</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                    </aside>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php include 'pagecomponents/sitefooter.php'; ?>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>

            <script src="js/main.js"></script>

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b, o, i, l, e, r) {
                    b.GoogleAnalyticsObject = l;
                    b[l] || (b[l] =
                            function() {
                                (b[l].q = b[l].q || []).push(arguments)
                            });
                    b[l].l = +new Date;
                    e = o.createElement(i);
                    r = o.getElementsByTagName(i)[0];
                    e.src = '//www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga'));
                ga('create', 'UA-XXXXX-X');
                ga('send', 'pageview');
            </script>
        </body>
    </html>







