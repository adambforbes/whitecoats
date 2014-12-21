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
                // To display text options for treatment input auto-populate
                function showResult(str) {
                    if (str.length == 0) {
                        document.getElementById("livesearch").innerHTML = "";
                        document.getElementById("livesearch").style.border = "0px";
                        return;
                    }
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {  // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
                            document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                        }
                    }
                    xmlhttp.open("GET", "functions/livesearch.php?q=" + str, true);
                    xmlhttp.send();
                }

                // To add a users treat auto populate selection to the input field
                function initForm(form_id, element_name, init_txt)
                {
                    frm = document.getElementById(form_id);
                    frmElement = frm.elements[element_name];
                    frmElement.value = init_txt;
                    
                    // hide searchresults
                    document.getElementById("livesearch").innerHTML = "";
                    document.getElementById("livesearch").style.border = "0px";
                    
                    
                }
   
            </script>
        </head>

        <body>
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <?php include 'pagecomponents/siteheader.php'; ?>


        <head>
            <style>

                #t {
                    color: rgb(86, 90, 92);
                    height: 40px;
                    width: 375px;
                    -webkit-appearance: none;
                    -webkit-column-rule-color: rgb(86, 90, 92);
                    -webkit-font-smoothing: antialiased;
                    -webkit-locale: en;
                    //perspective-origin: 145px 22px;
                    -webkit-perspective-origin: 145px 22px;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                    -webkit-text-emphasis-color: rgb(86, 90, 92);
                    -webkit-text-fill-color: rgb(86, 90, 92);
                    -webkit-text-stroke-color: rgb(86, 90, 92);
                    transform-origin: 145px 22px;
                    -webkit-transform-origin: 145px 22px;
                    border: 1px solid rgb(196, 196, 196);
                    border-radius: 2px 0 0 2px;
                    font: normal normal normal normal 16px/normal Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    outline: rgb(86, 90, 92) none 0px;

                    transition: border-color 0.2s ease 0s;
                    -webkit-border-after: 1px solid rgb(196, 196, 196);
                    -webkit-border-before: 1px solid rgb(196, 196, 196);
                    -webkit-border-end: 1px solid rgb(196, 196, 196);
                    -webkit-border-start: 1px solid rgb(196, 196, 196);
                    -webkit-transition: border-color 0.2s ease 0s;
                    float: left;
                }/*#INPUT_5*/


                #c {
                    color: rgb(86, 90, 92);
                    display: block;
                    height: 44px;
                    width: 280px;
                    -webkit-appearance: none;
                    -webkit-column-rule-color: rgb(86, 90, 92);
                    -webkit-font-smoothing: antialiased;
                    -webkit-locale: en;
                    //perspective-origin: 61.5px 22px;
                    -webkit-perspective-origin: 61.5px 22px;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                    -webkit-text-emphasis-color: rgb(86, 90, 92);
                    -webkit-text-fill-color: rgb(86, 90, 92);
                    -webkit-text-stroke-color: rgb(86, 90, 92);
                    transform-origin: 61.5px 22px;
                    -webkit-transform-origin: 61.5px 22px;
                    background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
                    border: 1px solid rgb(196, 196, 196);
                    border-radius: 0 0 0 0;
                    font: normal normal normal normal 16px/normal Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    outline: rgb(86, 90, 92) none 0px;
                    padding: 10px 32px 10px 10px;
                    transition: border-color 0.2s ease 0s;
                    -webkit-border-after: 1px solid rgb(196, 196, 196);
                    -webkit-border-before: 1px solid rgb(196, 196, 196);
                    -webkit-border-end: 1px solid rgb(196, 196, 196);
                    -webkit-border-start: 1px solid rgb(196, 196, 196);
                    -webkit-transition: border-color 0.2s ease 0s;
                    float: left;
                }/*#SELECT_12*/

                #submitbutton {
                    color: rgb(255, 255, 255);
                    cursor: pointer;
                    height: 44px;
                    min-height: 0px;
                    white-space: nowrap;
                    width: 108px;
                    -webkit-appearance: none;
                    -webkit-column-rule-color: rgb(255, 255, 255);
                    -webkit-font-smoothing: antialiased;
                    -webkit-locale: en;
                    //perspective-origin: 54px 22px;
                    -webkit-perspective-origin: 54px 22px;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                    -webkit-text-emphasis-color: rgb(255, 255, 255);
                    -webkit-text-fill-color: rgb(255, 255, 255);
                    -webkit-text-stroke-color: rgb(255, 255, 255);
                    transform-origin: 54px 22px;
                    -webkit-transform-origin: 54px 22px;
                    -webkit-user-select: none;
                    background: rgb(255, 90, 95) none repeat scroll 0% 0% / auto padding-box border-box;
                    border-top: 1px solid rgb(255, 90, 95);
                    border-right: 1px solid rgb(255, 90, 95);
                    border-bottom: 1px solid rgb(224, 0, 7);
                    border-left: 1px solid rgb(255, 90, 95);
                    border-radius: 0 2px 2px 0;
                    font: normal normal bold normal 16px/22.8799991607666px Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    outline: rgb(255, 255, 255) none 0px;
                    padding: 9px 27px;
                    -webkit-border-after: 1px solid rgb(224, 0, 7);
                    -webkit-border-before: 1px solid rgb(255, 90, 95);
                    -webkit-border-end: 1px solid rgb(255, 90, 95);
                    -webkit-border-start: 1px solid rgb(255, 90, 95);
                    float: left;
                }/*#BUTTON_32*/

                #DIV_11 {
                    border-bottom-color: rgb(86, 90, 92);
                    border-left-color: rgb(86, 90, 92);
                    border-right-color: rgb(86, 90, 92);
                    border-top-color: rgb(86, 90, 92);
                    box-sizing: border-box;
                    color: rgb(86, 90, 92);
                    display: inline-block;
                    font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    font-size: 16px;
                    height: 44px;
                    line-height: 22.8799991607666px;
                    outline-color: rgb(86, 90, 92);
                    position: relative;
                    text-align: center;
                    vertical-align: bottom;
                    width: 30px;
                    -webkit-column-rule-color: rgb(86, 90, 92);
                    -webkit-font-smoothing: antialiased;
                    -webkit-locale: en;
                    //perspective-origin: 61.5px 22px;
                    -webkit-perspective-origin: 61.5px 22px;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                    -webkit-text-emphasis-color: rgb(86, 90, 92);
                    -webkit-text-fill-color: rgb(86, 90, 92);
                    -webkit-text-stroke-color: rgb(86, 90, 92);
                    transform-origin: 61.5px 22px;
                    -webkit-transform-origin: 61.5px 22px;
                    border: 0px none rgb(86, 90, 92);
                    border-top: 0px none rgb(86, 90, 92);
                    border-right: 0px none rgb(86, 90, 92);
                    border-bottom: 0px none rgb(86, 90, 92);
                    border-left: 0px none rgb(86, 90, 92);
                    border-color: rgb(86, 90, 92);
                    font: normal normal normal normal 16px/22.8799991607666px Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    outline: rgb(86, 90, 92) none 0px;
                    -webkit-border-after: 0px none rgb(86, 90, 92);
                    -webkit-border-before: 0px none rgb(86, 90, 92);
                    -webkit-border-end: 0px none rgb(86, 90, 92);
                    -webkit-border-start: 0px none rgb(86, 90, 92);
                    background-color: black;

                }/*#DIV_11*/

                #DIV_11:before {
                    content: '▾';
                    border-bottom-color: rgb(130, 136, 138);
                    border-left-color: rgb(130, 136, 138);
                    border-right-color: rgb(130, 136, 138);
                    border-top-color: rgb(130, 136, 138);
                    bottom: 1px;
                    box-sizing: border-box;
                    color: rgb(130, 136, 138);
                    display: block;
                    font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    font-size: 16px;
                    height: 43px;
                    line-height: 16px;
                    outline-color: rgb(130, 136, 138);
                    padding-top: 11.1999998092651px;
                    pointer-events: none;
                    position: absolute;
                    right: 0px;
                    text-align: center;
                    top: 0px;
                    width: 32px;
                    -webkit-column-rule-color: rgb(130, 136, 138);
                    align-self: stretch;
                    -webkit-font-smoothing: antialiased;
                    -webkit-locale: en;
                    //perspective-origin: 16px 21.5px;
                    -webkit-perspective-origin: 16px 21.5px;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                    -webkit-text-emphasis-color: rgb(130, 136, 138);
                    -webkit-text-fill-color: rgb(130, 136, 138);
                    -webkit-text-stroke-color: rgb(130, 136, 138);
                    transform-origin: 16px 21.5px;
                    -webkit-transform-origin: 16px 21.5px;
                    
                    border: 0px none rgb(130, 136, 138);
                    border-top: 0px none rgb(130, 136, 138);
                    border-right: 0px none rgb(130, 136, 138);
                    border-bottom: 0px none rgb(130, 136, 138);
                    border-left: 0px none rgb(130, 136, 138);
                    border-color: rgb(130, 136, 138);
                    font: normal normal normal normal 16px/16px Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    outline: rgb(130, 136, 138) none 0px;
                    padding: 11.1999998092651px 0px 0px;
                    -webkit-border-after: 0px none rgb(130, 136, 138);
                    -webkit-border-before: 0px none rgb(130, 136, 138);
                    -webkit-border-end: 0px none rgb(130, 136, 138);
                    -webkit-border-start: 0px none rgb(130, 136, 138);

                }/*#DIV_11:before*/

                
                #livesearch {        
                    width: 368px;
                    padding: 5px;
                    border: 1px solid rgb(196, 196, 196);
                    border-radius: 2px 0 0 2px;
                    font: normal normal normal normal 16px/normal Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    outline: rgb(86, 90, 92) none 0px;
                    transition: border-color 0.2s ease 0s;
                    line-height: 150%;                   
                }
                
                
                .livesearchlink:hover {
                    background-color:blue;
                    color:white;
                }
                
                
                #DIV_1 {
    border-bottom-color: rgb(255, 255, 255);
    border-left-color: rgb(255, 255, 255);
    border-right-color: rgb(255, 255, 255);
    border-top-color: rgb(255, 255, 255);
    box-sizing: border-box;
    color: rgb(0, 0, 0);
    font-weight: bold;
    margin-bottom: 25px;
    outline-color: rgb(255, 255, 255);
    text-align: left;
    text-rendering: optimizelegibility;
    border: 0px none rgb(255, 255, 255);
    border-top: 0px none rgb(255, 255, 255);
    border-right: 0px none rgb(255, 255, 255);
    border-bottom: 0px none rgb(255, 255, 255);
    border-left: 0px none rgb(255, 255, 255);
    border-color: rgb(255, 255, 255);
    font: normal normal bold normal 30px/19.7999992370605px Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin: 0px 0px 25px;
    outline: rgb(255, 255, 255) none 0px;
    line-height: 110%; 
    
}/*#DIV_1*/



            </style>
        </head>


        
         <?php
                            // put your code here


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

                            mysql_select_db('whitecoats');


                            $query = "SELECT * FROM treatment";
                            $result = mysql_query($query);

                            if (!$result) {
                                $message = 'Invalid query: ' . mysql_error() . "\n";
                                $message .= 'Whole query: ' . $query;
                                die($message);
                            }

                            
                            ?>
        

        <div class="main-container" >
            <div class="main wrapper clearfix" style="">

                <article style="float:none; margin-left:auto; margin-right:auto; width:80%;">

                    <br>
                    <br>

                    <header>
                        <h1><div id="DIV_1">Find international doctors that provide quality and affordable treatment.</div></h1>
                    </header>
                    <!-- Search Functionality  -->    
                    <div>
                    <Form Name ="doctorsearchform" ID = "doctorsearchform" Method ="GET" ACTION = "docs.php">

                        <INPUT TYPE = "text" Name="t" id="t"  size="30" onkeyup="showResult(this.value)" autocomplete="off" placeholder="What treatment do you need?">

                        <div id="DIV_11X"> 
                            <select name="c" id="c">
                                <option value="">Country (Optional)</option>
                                <option value="India">India</option>
                                <option value="Spain">Spain</option>
                                <option value="Costa Rica">Costa Rica</option>
                            </select>
                            
                        </div>
                        

                        <INPUT id="submitbutton" TYPE="Submit" VALUE ="Search">
                       
                        </form>
                    </div>
                        <div id="livesearch"></div>

                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <?php
                    while ($row = mysql_fetch_assoc($result)) {   
                                echo $row['treatmentName'];
                                echo "<br>";
                            }
?>
                 

                </article>
                <br>
                <br>
                <br>
                <br>


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
