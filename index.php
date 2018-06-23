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
            $PLACEHOLDERS = array(
                "What have you accomplished?",
                "Did you do something today?",
                "What was the last amazing thing you id?",
            );
            
            $person = array(
                "key" => "value",
                "name" => "Blaise",
                "age" => 19,
            );
            
            $_FAKEPOST = array(
                "log" => "slfjsljfks",
                "time" => "12:45am",
            );
            
            $person["name"]  // "Blaise"
            $person["age"]  // 19
            $person["age"] = $person["age"] + 1  // Adds 1 to age
            $person["age"]  // 20
            date_default_timezone_set('Asia/Manila');
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                var_dump($_POST);  // hashmap, dictionary, hash, asociative_array
                // firebase.save_to_database({
                //         'log' => $_POST["log"];
                //         'message' => $_POST["time"];
                // });
            }
            
            if(isset($_GET['log'])) {
                echo date('h:ia');
                echo "<br/>";
                echo $_GET['log'];
            }
//            for($a = 0; $a < 5; $a++) {
//                if(isset($_GET['log'.$a])) {
//                    echo $_GET['log'.$a];
//                    echo $a;
//                }
//                $a++;
//            }
            
        ?>
        <h1 id="time"><?php echo date("h:ia"); ?></h1
        <form action="index.php" method="POST">
            <input type="text" id="log" name="log" placeholder="<?php echo $PLACEHOLDERS[array_rand($PLACEHOLDERS)]; ?>" />
            <input type="hidden" name="time" value="<?php echo date("h:ia"); ?>" />
            <input type="submit" />
        </form>
        </div>
        
    </section>
</body>
</html>