<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Table</title>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="public/assets/css/pricing.css" rel="stylesheet">
    <style>
    /* Style for the modal */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal content */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        /* 5% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* Close button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
</head>

<body class="content">
    <h1>Our Pricing</h1>

    <div class="price-table-wrapper">

        <div class="pricing-table featured-table">
            <h2 class="pricing-table__header" style="background: #00b7ff;">Basic</h2>
            <h3 class="pricing-table__price">1999₹</h3>
            <ul class="pricing-table__list">
                <li>3 month trial</li>
                <li>24 hour support</li>
            </ul>
            <button style="background: #00b7ff;" class="pricing-table__button join-now-btn">Join Now!</button>
        </div>
        <div class="pricing-table">
            <h2 class="pricing-table__header" style="background: #ff9a00;">Business</h2>
            <h3 class="pricing-table__price">2999₹</h3>
            <ul class="pricing-table__list">
                <li>6 month trial</li>
                <li>24 hour support</li>
            </ul>
            <button style="background: #ff9a00;" class="pricing-table__button join-now-btn">Join Now!</button>
        </div>
        <div class="pricing-table featured-table">
            <h2 class="pricing-table__header" style="background: #ff3800;">Premium</h2>
            <h3 class="pricing-table__price">4999₹</h3>
            <ul class="pricing-table__list">
                <li>1 year trial</li>
                <li>24 hour support</li>
            </ul>
            <button style="background: #ff3800;" class="pricing-table__button join-now-btn">Join Now!</button>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>For Subscription Contact below Numbers:-</h1>
            <div class="contacts-wrapper">
                <div class="contact">
                    <p class="nm">Rahul Deokar</p>
                    <p class="nc"><a href="https://api.whatsapp.com/send?phone=919823055383">9823055383</a></p>
                    <p class="email"><a href="mailto:mitecsharanu@gmail.com">mitecsharanu@gmail.com</a></p>

                    <p class="nm">Mansi Shirkhedkar</p>
                    <p class="nc"><a href="https://api.whatsapp.com/send?phone=919011041546">9011041546</a></p>
                    <p class="email"><a href="mailto:mitecsharanu@gmail.com">mitecsharanu@gmail.com</a></p>

                </div>
                <div class="contact">
                    <img src="public/assets/img/sharan_qr_codee.jpg" alt="Image Description" id="qrCodeImage">
                    <div class="upi-wrapper">
                        <div>
                            <p class="Upi" id="upiId">sharanabasappaghode@okaxis<span class="copy-icon"
                                    onclick="copyUPI()"><i class="fas fa-copy"></i></span></p>
                        </div>
                        <button class="share-button" onclick="shareContent()">Share</button>
                        <p class="txt">Don't Forget to Share Screenshot of the Payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            &copy; 2024 Designed by <a href="https://www.marketingintelligence.tech/" target="_blank"><strong>Mi
                    Tech</strong></a>
        </div>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btns = document.querySelectorAll(".join-now-btn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btns.forEach(function(btn) {
        btn.onclick = function() {
            modal.style.display = "block";
        }
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    <script>
    function copyUPI() {
        var upiIdText = document.getElementById("upiId");
        var tempInput = document.createElement("input");
        tempInput.value = upiIdText.textContent;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("UPI ID copied to clipboard!");
    }
    </script>
   <script>
    function shareContent() {
        // Get the UPI ID
        var upiIdText = document.getElementById("upiId").textContent;
        
        // Get the image source URL
        var imageUrl = document.getElementById("qrCodeImage").src;

        // Construct the message
        var message = "UPI ID: " + upiIdText ;

        // Replace this with your preferred sharing method
        // For example, you can open a messaging app with the message pre-filled
        // Here's an example using WhatsApp
        var whatsappUrl = "https://api.whatsapp.com/send?text=" + encodeURIComponent(message);
        window.open(whatsappUrl, "_blank");
    }
</script>


</body>

</html>