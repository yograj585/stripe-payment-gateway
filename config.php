<?php 
$itemName = "Tulips flower"; 
$itemPrice = 25;  
$currency = "USD";  
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51PeBw9RwkzwhX9v6t2eJ4c6deDLXny1cGj3FksPQcxkSpsrau1tY6Rh8RC4ZgPk72aUB0ZU2yydowSRTHQn3SCQA002Xb64PSn'); 
define('STRIPE_SECRET_KEY', 'sk_test_51PeBw9RwkzwhX9v6kiDFdnd41Sqco3Xxjme55Z6LHkO925h84bdU5MladWGUyH4X7t2CkT51cq3HpCPdxbIcGvGo00Q89otDIh'); 

define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'stripe-payment'); 
 
$data= STRIPE_PUBLISHABLE_KEY;
echo $data;
?>