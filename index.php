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
                "What was the last amazing thing you did?",
            );
            date_default_timezone_set('Asia/Manila');
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                var_dump($_POST);  // hashmap, dictionary, hash, asociative_array
                // firebase.save_to_database({
                //         'log' => $_POST["log"];
                //         'message' => $_POST["time"];
                // });
            }
            
        ?>
        <h1 id="time"><?php echo date("h:ia"); ?></h1
        <form action="index.php" method="POST">
            <input type="text" id="log" name="log" placeholder="<?php echo $PLACEHOLDERS[array_rand($PLACEHOLDERS)]; ?>"/>
            <input type="hidden" id = "date" name="time" value="<?php echo date("h:ia"); ?>" />
            <input type="submit" id = "submitBtn" onclick = "submitClick()"/>
        </form>
            <p id = "date2"></p>
            <ul id = "list"></ul>
        </div>
    </section>
    <script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>
    <script>
        var config = {
            apiKey: "AIzaSyDy_T-IkhbUUuJ7sy5WhjenLSd_XhASzz0",
            authDomain: "timeline-49852.firebaseapp.com",
            databaseURL: "https://timeline-49852.firebaseio.com",
            projectId: "timeline-49852",
            storageBucket: "timeline-49852.appspot.com",
            messagingSenderId: "524117651179"
        };
        firebase.initializeApp(config);
        
        var log = document.getElementById("log");
        var date = document.getElementById("date");
        var submitBtn = document.getElementById("submitBtn");
        var firebaseOutputRef = firebase.database().ref().child("list").child("input");
        firebaseOutputRef.on('value', function(datasnapshot) {
            list.innerText = datasnapshot.val();
        });

        function addZero(i) {
            if(i < 10) {
                i = "0" + i;
            }
            return i;
        }
        
        function submitClick() {
            var firebaseRef = firebase.database().ref();
            var messageText = log.value;
            firebaseRef.child("list").child("input").set(messageText);
            var d = new Date();
            var x = document.getElementById("date2");
            var h = addZero(d.getHours());
            var m = addZero(d.getMinutes());
            x.innerHTML = h + ":" + m;
        }
        
    </script>
</body>
</html>