<!DOCTYPE html>
<html lang="en">

<head>

    <title> The Leaf Trust Bank</title>
    <link rel = "icon" href = 
    "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.7b2h0p-4xu7gxQjMRp3JaQHaD3%26pid%3DApi&f=1" 
        type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">     

       <!--ICON-->
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
 
 
  h2{
   transform: translate(1%, 80%);
   font-family:'Brush Script MT (cursive)';
  }

 .button{
    position: absolute;
    top: 20px;
    left: 380px;
    transform: translate(-50%,-50%);
}

.btn{
    border: 4px solid white;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    border-radius: 30px;
}

.btn:hover{
    background-color: cyan;
    color: black;
    box-shadow: 0 0 20px cyan;
    border:4px solid black;
    border-radius: 30px;
}

img{
    border-radius: 50%;
    filter: brightness(120%);
   filter: contrast(120%);
   filter: drop-shadow(10px 10px 10px cyan);
}


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 70px;
   background-color: #04454c;
   color: white;
   text-align: center;
}

</style>
</head>
<body style="background-image:url(https://images.alphacoders.com/799/thumb-1920-799578.png);">
  <?php
  include 'navbar.php';
  ?>
      

      <div class="container-fluid">
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style='color:white'>
                    <marquee behavior="alternate"><h3>Welcome... To <i class="fa fa-leaf" aria-hidden="true"></i> The Leaf Trust Banking System...!!  It pays to Discover.</h3></marquee>
                    
                </div>
            </div>
            
        </div>

        <div class="row activity text-center">
          <div class="col-md act">

                <br>
                 <img src="https://m.economictimes.com/thumb/msid-64230667,width-1200,height-900,resizemode-4,imgsize-28918/mobile-transaction-thinksto.jpg" height="300" width="300">

                <div class="button">
                   
                <a href="transfermoney.php" class="btn"> Make a Transaction</a>
                </div>
            </div>

            <div class="col-md act">
                
                <br>
                <img src="https://cdn.iconscout.com/icon/free/png-256/checklist-384-454891.png" height="300" width="300">
                <div class="button" >
                <a href="transactionhistory.php"class="btn">Transaction History</a>
                </div>
            </div>

        </div>

    </div>
      
 
<div class="footer">
  <h4>© Copyright-2021 <i class="fa fa-leaf" aria-hidden="true"></i> The Leaf Trust Bank</h4>
  <p>Made by Samiksha Jadhav</p>
</div>
      
</body>
</html>


        
