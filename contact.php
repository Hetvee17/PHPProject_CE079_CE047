<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Us</title>
        <?php require 'utils/styles.php'; ?><!--css -->
        <?php require 'utils/scripts.php'; ?><!--js -->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header -->
        <div class = "content"><!--body -->
            <div class = "container"
                <div class = "col-md-12"><!-- 12 grid columns-->
                    <h1>Contact Us</h1><!-- title-->
                    <p>Fell Free to Contact us...!</p>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Hetvee  & Ruchita </h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: hetvee.sakaria@gmail.com / ruchitaoza9@gmail.com<br>
                    </p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Name">Name:</label>
                            <input type="text" name="name" id="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div><!--body -->
        <?php require 'utils/footer.php'; ?><!--footer -->
    </body>
</html>
