<?php

 $apiKey = "rzp_test_46s041A9yEAtYx";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey;  ?>" 
    data-amount="<?php echo $_POST['amount'] * 100; ?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END'; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Acme Corp"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="<?php  echo $_POST['name']   ?>"
    data-prefill.email="<?php  echo $_POST['email'] ?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
<a href="profile.php"><input type="button" value="Back"></a>
</form>




