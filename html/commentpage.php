
<?php
 $user = $_GET['user'];
 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/commentpage.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <title>ANONIMO</title>
</head>
<script>
    function sent(){
        Swal.fire("Sent!");
    }
</script>
<body>
    <nav class="navbar  navbar-expand-lg navbar-light name ">  
        <div class="navbar-header d-block">
            <a href="login.html" class="navbar-brand name ">ANONIMO</a>
        </div>
    </nav>
    <div class="jumbotron">
        <h2 class="fonts"><?php echo $user?> </h2>
        

    </div>
    <div class="mainPanel">
        <form action="../php/comment.php?user=<?php echo $user ?>" method="POST">
        <div class="input-group textAreaPanel">
            <textarea class="form-control " aria-label="With textarea" placeholder="Say something about me!" name="tweet"></textarea>
        </div>
        <div class="buttonArea">
            <button class="btn btn-primary send" onClick = "sent()">Send</button>
        </div>
        </form>
    </div>
    
    
</body>
</html>