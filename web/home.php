<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css">

        <title>John Larson</title>
    </head>
    <body>
        <h1>John's Website</h1>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="assignments.php">Assignments</a></li>
                </ul>
            </div>
</nav>
        <div>
        <img class="img-responsive" src="home.jpeg">
        <h2>Hey there</h2>
        <p>Welcome to my website. I'm John, a Brigham Young University-Idaho student 
        majoring in software engineering.</p>
        <p>I'm from the beautiful land of Colorado, USA.</p>
        <p>Some things I like to do aside from software development are writing, playing guitar,
        playing video games and reading manga. I also like hiking or doing anything outdoors.</p>
        <p>Check out my projects by clicking "Assignments" on the navbar.</p>
        <p><?php
        echo "The current server time is " . date("h:i:sa");
        ?></p>
        <p id="epicprank" onclick="this.innerHTML='Do you just do whatever people tell you?'">Click Me</p>
        </div>
    </body>
        


</html>