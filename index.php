<!DOCTYPE html>
<html>
<head>
    <title>Timeline</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <section id="dump">
        <div id='wrapper'>
        <?php
//            $a = 0;
            date_default_timezone_set('Asia/Manila');
            echo "<h1 id = 'time'>The time is .date('h:ia')</h1>".date("h:ia");
            echo "<form action = 'index.php'>";
            echo "<input type = 'text' id = 'log' name = 'log' placeholder = 'What have you accomplished?'/>";
            echo "<input type = 'text' id = 'log' name = 'log2' placeholder = 'What have you accomplished2?'/>";
            echo "<input type = 'submit'/>";
            echo "</form>";
            if(isset($_GET['log']) && ($_GET'log2')) {
                echo $_GET['log'];
                echo $_GET['log2']; 
            }
//            for($a = 0; $a < 5; $a++) {
//                if(isset($_GET['log'.$a])) {
//                    echo $_GET['log'.$a];
//                    echo $a;
//                }
//                $a++;
//            }
            
        ?>
        </div>
    </section>
</body>
</html>