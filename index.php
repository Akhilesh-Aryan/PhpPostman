<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postman - Easy Secure & Fast</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <?php include("side.php"); ?>
            <div class="col-lg-10 mt-3" style="position:absolute;right:0;top:56px;height:88.5vh;overflow:scroll">
                inbox mail is empty
            </div>
        </div>
    </div>
    <div class="modal fade" id="new">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light text-danger"><h4>compose new mail</h4></div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="mail_to" placeholder="To..." class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Enter Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea rows="7" name="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="save" value="Save" class="btn btn-dark">
                            <input type="submit" name="send" value="Send" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>