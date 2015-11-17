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
        <link rel="stylesheet" type="text/css" href="../css/main.css">

    </head>
    <body>
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->

        <div class="custom-wrapper pure-g" id="menu">
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pure-menu">
                    <a href="../index.html" class="pure-menu-heading custom-brand">Áríon banki</a>
                    <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pure-menu pure-menu-horizontal custom-can-transform">
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item"><a href="../index.html" class="pure-menu-link">Heim</a></li>
                        <li class="pure-menu-item"><a href="../umokkur.html" class="pure-menu-link">Um okkur</a></li>
                        <li class="pure-menu-item"><a href="../hafasamband.html" class="pure-menu-link">Hafa samband</a></li>
                    </ul>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
                    <ul class="pure-menu-list">
                        <?php
                            include "dbcon.php";

                            $kt = $_POST['login-kt'];
                            $command = "SELECT nafn FROM notandi WHERE kennitala = $kt";
                            try
                            {
                                $result = $connection->query($command);
                            }
                            catch(PDOException $ex)
                            {
                                echo "Error fetching record: " . $ex->getMessage();
                            }
                            while($row = $result->fetch())
                            {
                                $nafn[] = array($row['nafn']);
                            }
                            echo "<li class='pure-menu-item'><a href='skylmalar.html' class='pure-menu-link' id='selected'>Þú ert skráð/ur inn sem: ". $nafn[0][0] ."</a></li>";
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <div class="main pure-g">
            <div class="pure-u-1-2">
                
            </div>
            <div class="pure-u-1-2">
                
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
