
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RussunEcommerce</title>
  
  <link href="<?= base_url('RussunStyle.css') ?>" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
<?= $this->include('navbar-not') ?>


<?= $this->renderSection('content') ?>



<footer>
        <!-- <div class="d-flex text-new justify-content-start
        flex-sm-column ">
            <p>SIGN UP FOR UPDATES</p>
            <p>Sign up for exclusive early sale access and tailored new arrivals.</p>
            <input type="text" placeholder="Your Email Address"> 
            <button>JOIN</button>
        </div> -->
    <div class="d-flex justify-content-around">
        <div class="d-flex text-new flex-nowrap flex-column">
            <p class="bold">CUSTOMER SERVICES</p>
            <a href=""><p>Contact</p></a>
            <a href=""><p>Track Offer</p></a>
            <a href=""><p>Delivery Return</p></a>
            <a href=""><p>Payment</p></a>
            <a href=""><p>Make a Return</p></a>
        </div>
    
        <div class="d-flex text-new flex-nowrap flex-column">
            <p class="bold">INFO</p>
            <a href=""><p>Gift Voucher</p></a>
            <a href=""><p>Size Guide</p></a>
            <a href=""><p>Carrers At Moodniky</p></a>
            <a href=""><p>About Us</p></a>
            <a href=""><p>Legal Policies</p></a>
        </div>
    
        <div class="d-flex text-new flex-nowrap flex-column">
            <p class="bold">Follow Us</p>
            <a href=""><p>Facebook</p></a>
            <a href=""><p>Instagram</p></a>
            
        </div>
    
        <div class="d-flex text-new flex-nowrap flex-column">
            <p class="bold">Contact Us</p>
            <p>hello@modnikky.com</p>
            <p>+7 910 832 26XX</p>
            <p>Visit us at Shalalaeva 23,
                Bologoe, Russia</p>
    
        </div>
    
    
    </div>
    
    </footer>
</script>

<?= $this->renderSection('script') ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">

</script>
</body>

</html>
