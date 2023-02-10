<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ranga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reserve.css">
</head>
<body>

<div class="grid-container">

    <?php include "header.php"; ?>
    
    <div class="main">
        
        <div class="reservationform">
            <form action="/">
                <h1>Reservation Form</h1>     
                <p>Name</p>
                <input type="text" name="fname" placeholder="First name" />
                <input type="text" name="lname" placeholder="Last name" />
                
                <p>Email</p>
                <input type="email" name="email" placeholder="email@address.com"/>

                <p>Phone</p>
                    <input type="text" name="phone" placeholder="### ### ####"/>
        
                <p>Reservation Date</p>
                    <input type="date" name="bdate"required/>
                    <i class="fas fa-calendar-alt"></i>
          
                <p>Reservation Time</p>
                    <input type="time" name="btime" required/>
     
                <p>How many people will you be with?</p>
                    <input type="integer" name="amount"/>
     
                <p>Additional notes</p>
                    <textarea rows="3"></textarea>
        
                <div class="btn-block">
                    <button type="submit" href="/">Send</button>
                </div>
            </form>
        </div>

    </div>
    
    <?php include "footer.php"; ?>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>