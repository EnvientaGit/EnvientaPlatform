<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Makerspace order</title>
</head>
<body>
  <style>
    
  </style>

  Name: {{$user->realname}}<br/>
  Address: {{$user->customerAddress}}<br/>
  Phone: {{$user->customerPhone}}<br/>
  Billing address: {{$user->customerBillingAddress}}<br/><br/>

  Product name: {{$productName}}<br/>
  Product url: {{$productUrl}}<br/>
</body>
</html>
