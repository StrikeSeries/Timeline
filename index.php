</html>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Timeline</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'none')
          e.style.display = 'block';
       else
          e.style.display = 'none';
    }
  </script>

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
        ?>
        <h1 id="time"><?php echo date("h:ia"); ?></h1
        <form action="index.php" method="POST">
            <input type="text" id="log" name="log" placeholder="<?php echo $PLACEHOLDERS[array_rand($PLACEHOLDERS)]; ?>"/>
            <input type="hidden" id = "date" name="time" value="<?php echo date("h:ia"); ?>" />
            <input type="submit" id = "submitBtn" onclick = "submitClick()"/>
        </form>
            <p id = "date2"></p>
        </div>
    </section>
    
    <!-- Collapsable Aggregate -->
  <div id="aggregate-container">
    <a id='aggregate-icon' href="#" onclick="toggle_visibility('aggregate-list');">
    <div><i class="fas fa-book fa-fw" style="background:#F2F9FE"></i></div>
    </a>

    <section id="aggregate-list">
      <div id='list2'>
        <ul id="list3">
<!--         <li>
          <ul>0900 - Drank Coffee</ul>
          <ul>0925 - coded dis</ul>
          <ul>0930 - coded dat</ul>
        </li> -->
      </ul>
      </div>
    </section>
  </div>
  <script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        var firebaseOutputRef = firebase.database().ref().child("list");
        firebaseOutputRef.on('value', function(snapshot) {
          snapshot.forEach(function(child) {
            console.log(child.key + ": " + child.val());
            $('#list3').prepend("<li>"+child.val()+"</li>");
          })
            // var listItems = datasnapshot.val();

            // console.log(listItems);

            // var keys = Object.keys(listItems);
            // var str = '';
            // for(var i in keys) {
            //   console.log(keys[i]);
            //   $('#list3').prepend("<li>"+keys[i]+"</li>");
            // }

            // console.log(listItems);
            // $(document).ready(function() {
            //   $('#submitBtn').click(function () {
            //     $('#list3').prepend("<li>"+log+"</li>");
            //   });
            // });

            
        });
        function addZero(i) {
            if(i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function submitClick() {
          $('#list3').html("");
            var firebaseRef = firebase.database().ref();
            var messageText = log.value;
            firebaseRef.child("list").push(messageText);
            var d = new Date();
            var x = document.getElementById("date2");
            var h = addZero(d.getHours());
            var m = addZero(d.getMinutes());
            
            // x.innerHTML = h + ":" + m;
        }

        
    </script>
</body>
</html>