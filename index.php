<html>
<head>
    <title>PHP Database Connecting</title>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <script src="bootstrap.min.js" type="text/javascript"></script>

    <style>
        h2{
            color:#121212;
        }
    </style>
</head>

<body>
<h2> Intact Automation Pvt Ltd</h2>
<div class="container">
    <form role="form" action="addorder.php" method="post">
        <div class="form-group">
            <label class="control-label col-xs-2">Name:</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2">Email:</label>
            <div class="col-xs-10">
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-2">Mobile:</label>
            <div class="col-xs-10">
                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-2">Vehicle No:</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" id="vehicleno" name="vehicleno" placeholder="Vehicle No">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-2">Service Type:</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" id="service" name="service" placeholder="Service Type">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-2">Other</label>
            <div class="col-xs-10">
                <textarea class="form-control" id="other" name="other" placeholder="Other request"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>

</div>


</body>
</html>