<?php 
require_once 'config.php'; 
?>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Stripe</h3>
        <img src="images/Tulips.jpg" alt="no-logo" class="panel-image" style="height:200px; width:150px;"/>
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
        <!-- Display status message -->
        <div id="paymentResponse" class="hidden"></div>
        
        <!-- Display a payment form -->
        <form id="paymentFrm" class="hidden" style="width:30%;">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" class="p-Input-input" placeholder="Enter name" required="" autofocus="">
            </div>
            <br>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" id="email" class="p-Input-input" placeholder="Enter email" required="">
            </div>
            <br>
            <div id="paymentElement">
            <script src="https://js.stripe.com/v3/"></script>
            </div>
            <br>
            <!-- Form submit button -->
            <button id="submitBtn" class="btn btn-success">
                <div class="spinner hidden" id="spinner"></div>
                <span id="buttonText">Pay Now</span>
            </button>
        </form>
        
        <!-- Display processing notification -->
        <div id="frmProcess" class="hidden">
            <span class="ring"></span> Processing...
        </div>
        
        <!-- Display re-initiate button -->
        <div id="payReinit" class="hidden">
            <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
        </div>
    </div>
</div>
<script src="checkout.js" STRIPE_PUBLISHABLE_KEY="<?php echo STRIPE_PUBLISHABLE_KEY; ?>" defer></script>
  