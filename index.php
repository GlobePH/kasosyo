<html>
    <head>
        <link rel = "stylesheet" href = "css/bootstrap.min.css"/>
        <link rel = "stylesheet" href = "css/bootstrap-theme.min.css"/>
        <link rel = "stylesheet" href = "css/styles.css"/>
        <title> Kasosyo - Website for Sari-Sari Stores</title>
    </head> 
    <body>
        <nav class = "navbar navbar-default navbar-fixed-top">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <a class = "navbar-brand">Kasosyo</a>
                </div>
                <ul class = "nav navbar-nav navbar-right">
                    <li> <a href = "#">Login</a>
                    <li> <a href = "#">Sign Up</a>
                </ul>
            </div>
        </nav>
        <div class="panel">
            <div class="panel-body">
                <form action="views/search.php" style="padding-top: 200px; padding-bottom: 15px;">
                    <input type="text" name="key" class="form-control" style="border-radius: 0;" placeholder="What are you looking for?"/>
                    <br/>
                    <button type="submit" name="submit">Search</button>
                    <button type="submit" name="browse">Lucky Me</button>
                </form>
            </div>
        </div>
    </body>
    <script src = "js/bootstrap.min.js"/>
</html>