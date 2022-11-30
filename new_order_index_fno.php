<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Position</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body{ font: 18px sans-serif; }
.wrapper{ width:; padding: 20px; }
</style>
<script>
let input = document.querySelector('.fno');
function option() {
document.getElementById("strike_price").disabled = false;
document.getElementById("ce").disabled = false;
document.getElementById("pe").disabled = false;
}

function future() {
document.getElementById("strike_price").disabled = true;
document.getElementById("ce").disabled = true;
document.getElementById("pe").disabled = true;
}
</script>


<div class="wrapper btn-group btn-group-justified" role="group" aria-label="Justified button group">
   <a class="btn btn-primary" href="position.php" role="button">Position</a>
   <a class="btn btn-success" href="#" role="button">Orders</a>
   <a class="btn btn-primary" href="#" role="button">Watchlist</a>
   <a class="btn btn-primary" href="#" role="button">Funds</a>
 </div>
<h4 class="wrapper">New Position</h4>
<form class="wrapper" action="order_coniformation_index_fno.php" method="get">
<div class="btn btn-danger">
<tr>
<td><input onclick="option();" type="radio" name="symbol" value="OPTION" size="30" required>OPTION
&nbsp&nbsp&nbsp&nbsp<input onclick="future();"type="radio" name="symbol" value="FUTURE" size="30" required>FUTURE
</td>
</tr>
</div>
<br>
<br>
<div class="btn btn-success">
<tr>
<td><input type="radio" name="asset" value="NIFTY" size="30" required>NIFTY
&nbsp&nbsp&nbsp&nbsp<input  type="radio" name="asset" value="BANKNIFTY" size="30" required>BANKNIFTY
&nbsp&nbsp&nbsp&nbsp<input  type="radio" name="asset" value="FINNIFTY" size="30" required>FINNIFTY
</td>
</tr>
</div>
<br>
<br>
<div class="form-group">
<input class="form-control" name="expiry_date" type="text" placeholder="EXPIRY DATE"
onfocus="(this.type='date')"
onblur="(this.type='text')" required>
 </div> 
<div class="form-group">
<input id="strike_price" type="number" placeholder="STRIKE PRICE" name="strike_price" class="form-control" required>
</div>
<div class="form-group">
<input type="number" placeholder="QUANTITY" name="quantity" class="form-control" required>
</div>
<div class="form-group">
<input type="number" placeholder="PRICE(optional)" name="price" class="form-control">
            </div>
<div class="btn btn-danger">
<tr class="form-control">
<td class="form-control"><input id="ce" type="radio" name="ce_pe" value="CE" size="30" required>CALL
<input id="pe" type="radio" name="ce_pe" value="PE" size="30" required>PUT</td></div>&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="btn btn-success">
<td class="form-control"><input type="radio" name="buy_sell" value="BUY" size="30" required>BUY
<input  type="radio" name="buy_sell" value="SELL" size="30" required>SELL</td>
</tr>
</div>
<br>
<br>
<div class="form-group">
<tr>
<td>
<input type="submit" class="btn btn-primary" value="Place Order"></td>
<td>
<a class="btn btn-primary" href="index.php">Go to Home</a>
</td>
</div>