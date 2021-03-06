<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Lokaverkefni GRU">

        <title>Lokaverkefni GRU</title>

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

        <!--[if lt IE 9]>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->

        <div class="custom-wrapper pure-g" id="menu">
            <div class="pure-u-1 pure-u-md-1-5">
                <div class="pure-menu">
                    <a href="#" class="pure-menu-heading custom-brand">Áríon banki</a>
                    <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-2-5">
                <div class="pure-menu pure-menu-horizontal custom-can-transform">
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item"><a href="umOkkur.php" class="pure-menu-link">Um okkur</a></li>
                        <li class="pure-menu-item"><a href="skilmalar.php" class="pure-menu-link">Skilmálar</a></li>
                        <li class="pure-menu-item"><a href="hafasamband.php" class="pure-menu-link">Hafa samband</a></li>
                    </ul>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-2-5">
                <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
                    <ul class="pure-menu-list">
                        <?php
                            session_start();

                            if(isset($_SESSION['nafn'])){
                                echo '<li class="pure-menu-item"><a href="user/home.php" class="pure-menu-link">';
                                    if($_SESSION['kyn'] == "Karlkyns"){
                                        echo "Skráður inn sem " . $_SESSION['nafn'] . "";
                                    }elseif($_SESSION['kyn'] == "Kvenkyns"){
                                        echo "Skráð inn sem " . $_SESSION['nafn'] . "";
                                    }else{
                                        echo "Skráð/ur inn sem " . $_SESSION['nafn'] . "";
                                    }
                                    echo '</a></li>';
                                echo '<li class="pure-menu-item"><a href="user/skraut.php" class="pure-menu-link">Útskráning</a></li>';
                            }else{
                                echo '<li class="pure-menu-item"><a href="nyrAdgangur.php" class="pure-menu-link">Nýr aðgangur eða skráðu þig inn</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner">
            <h1 class="banner-head">
                Fáðu meira, <br>
                fyrir minna.
            </h1>
        </div>
        <div class="main">
            <div class="circle-content">
                <div class="pure-g">
                    <div class="pure-u-1-3">
                        <a href="#" class="fkn">
                            <div class="circle">
                                <img src="img/padlock.png" class="circle-icon">
                            </div>
                        </a>
                        <p class="font-ubuntu">Öryggi</p>
                    </div>
                    <div class="pure-u-1-3">
                        <a href="#">
                            <div class="circle">
                                <img src="img/reliable.png" class="circle-icon">
                            </div>
                        </a>
                        <p class="font-ubuntu">Áræðanleiki</p>
                    </div>
                    <div class="pure-u-1-3">
                        <a href="#">
                            <div class="circle">
                                <img src="img/gears.png" class="circle-icon">
                            </div>
                        </a>
                        <p class="font-ubuntu">Þjónustuver opið allan<br> sólahringinn</p>
                    </div>
                </div>
            </div>

            <div class="i-content pure-g">
                <div class="pure-u-1-2 frettir">
                    <div class="font-ubuntu">
                        <p>Fréttir</p>
                        <div id="frett-1" class="frett">
                            <p class="headline">Nýir á markaðinum</p>
                            <p class="frett-content">
                                Velkomin á þessa nýja síðu Áríon banka, ef þú vilt fræðast aðeins um hvað við gerum lestu þá síðuna <a href="umOkkur.html" class="frett-link">um okkur</a>.<br> Í stuttu máli erum við bankinn sem þig hefur alltaf dreymt um. Við höfum viðskiptavini okkar í fyrsta sæti fyrir framan alla, endilega lestu <a href="skylmalar.html" class="frett-link">skilmálana</a> okkar ef þú vilt vita hvernig við störfum. Við erum mjög nýir í þessum bransa, svo ef þú hefur einhverjar ábendingar sendu þær.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pure-u-1-2 gengi">
                    <div class="font-ubuntu">
                        <p>Hér fyrir neðan getur þú skoðað almennt gengi</p>
                    </div>                    
                    <div>
                        <table class="pure-table pure-table-bordered">
                            <thead id="table-head">
                                <tr>
                                    <th>Gjaldmiðill</th>
                                    <th>Kaup</th>
                                    <th>Sala</th>
                                    <th>Br.</th>
                                    <th>Upphæð</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>ISK</td>
                                <td>1.00</td>
                                <td>1.00</td>
                                <td>0.00</td>
                                <td><input type="number" id="isk"/></td>
                            </tr>
                            <tr class="pure-table-odd">
                                <td>USD</td>
                                <td>129.37</td>
                                <td>130.15</td>
                                <td>-0.02</td>
                                <td><input type="number" id="usd"/></td>
                            </tr>
                            <tr>

                                <td>GBP</td>
                                <td>197.34</td>
                                <td>198.53</td>
                                <td>-0.90</td>
                                <td><input type="number" id="gbp"/></td>
                            </tr>
                            <tr class="pure-table-odd">
                                <td>EUR</td>
                                <td>140.48</td>
                                <td>141.32</td>
                                <td>0.00</td>
                                <td><input type="number" id="eur"/></td>
                            </tr>
                            <tr>
                                <td>JPY</td>
                                <td>1.06</td>
                                <td>1.06</td>
                                <td>-0.23</td>
                                <td><input type="number" id="jpy"/></td>
                            </tr>
                        </table>
                        <p id="gengi-note">*Ath. að þetta er <span style="color: red; font-weight: bold">ekki</span> almennt gengið í dag</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--Öll scripts fara fyrir neðan þetta comment-->
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/gengi.js"></script>
    </body>
</html>
