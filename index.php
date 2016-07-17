<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vélib</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
    integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Diponibilité des vélib en temps réel</h1>
                <h2>Ville de <span id="contract-title"></span> station <span id="station-title"></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div id="chartContainer">
                    <!--chart-->
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <div class="form-group">
                        <label for="contract">Select contract:</label>
                        <select class="form-control" id="contract">
                            <option selected="selected">Paris</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="station">Select station:</label>
                        <select class="form-control" id="station">
                            <option selected="selected">7007</option>
                            <option>9021</option>
                            <option>5005</option>
                            <option>10042</option>
                        </select>
                    </div>
                    <button type="button" name="submit" id="ok">OK</button>
                </div>
            </div>
        </div>
        <div class="">

        </div>
    </div>


    <!--js-->
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/request.js"></script>
    <script src="js/chart.js"></script>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
