<?php
include('header.php');
?>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa; /* Light gray background */
  }

  .wallet-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .wallet {
    background-color: #ffffff; /* White background */
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    text-align: center;
    max-width: 400px;
    width: 100%;
  }

  .wallet i {
    font-size: 64px;
    color: #007bff; /* Blue color */
  }

  .wallet h2 {
    margin-top: 20px;
    color: #333333; /* Dark gray color */
  }

  .wallet p {
    color: #666666; /* Medium gray color */
    margin-bottom: 20px;
  }

  .wallet button {
    margin-top: 20px;
    padding: 12px 50px;
    background-color: #007bff;
    color: #ffffff; /* White text */
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 18px;
  }

  .wallet button:hover {
    background-color: #0056b3; /* Darker blue color on hover */
  }
</style>

</head>

<body>
  

<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>

  <div class="container pt-5">
    <div class="row justify-content-center">

        <div class="col-md-3 d-flex" style = "margin-left:10%;">
        <div class="wallet">
          <i class="fas fa-wallet mb-4"></i>
          
          
        </div>
      </div>

      <div class="col-md-6 d-flex" style = "margin-left:10%;">
        <div class="wallet">
          <div class="wallet-center">
            <h3 class="font-weight-bold text-uppercase mb-3">Your Balance:</h3>
            <p class="font-weight-bold">$0</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex" style = "margin-left:10%;">
      

    </div>
  </div>
  </div>
</div>
</div>
</div>

  <?php include('footer.php'); ?>
</body>

</html>
