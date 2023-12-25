<!DOCTYPE html>
<!-- Coding by MultiWebPress /////// https://multiwebpress.com/ -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Morito Restaurant</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="CheckOstyle.css">

    <div class="mainscreen">
      <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">--> 
        <div class="card">
          <div class="leftside">
            <img
              src="shape-6.jpg" class="product"/>
          </div>
          <div class="rightside">
            <form action="">
              <h1>CheckOut</h1>
              <h2>Payment Information</h2>
              <p>Cardholder Name</p>
              <input type="text" class="inputbox" name="name" required />
              <p>Card Number</p>

              <input type="text" class="inputbox" name="card_number" id="card_number" required />
  
              <p>Card Type</p>
              <select class="inputbox" name="card_type" id="card_type" required>
                <option value="">--Select a Card Type--</option>
                <option value="Visa">Visa</option>
                <option value="RuPay">RuPay</option>
                <option value="MasterCard">MasterCard</option>
              </select>

             <div class="expcvv">
  
              <p class="expcvv_text">Expiry</p>
              <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
  
              <p class="expcvv_text2">CVV</p>
              <input type="password" class="inputbox" name="cvv" id="cvv" required />
          </div>
              <p></p>
              <button type="submit" class="button">CheckOut</button>
              <a href="Menu.php" >
                <button type="submit" class="button">Back</button>
              </a>
            </form>
          </div>
        </div>
      </div>
    
  