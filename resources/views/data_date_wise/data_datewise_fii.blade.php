@extends('layouts.master')
@section('content')

<h2>HTML Forms</h2>

<form action="/action_page.php">
 
  <!-- FII -->

  <label for="fname">FII</label><br>
  <label for="fname">Future Index Long</label><br>
  <input type="text" id="future_index_long_fii" name="future_index_long_fii" value=""><br>
  <label for="lname">Future Index Short</label><br>
  <input type="text" id="future_index_short_fii" name="future_index_short_fii" value=""><br>

  <label for="lname">Long Index Long Short %</label><br>
  <input type="text" id="long_index_long_short_fii" name="long_index_long_short_fii" value=""><br>

  
  <label for="fname">Future Stock Long</label><br>
  <input type="text" id="future_stock_long_fii" name="future_stock_long_fii" value=""><br>
  <label for="lname">Future Stock Short</label><br>
  <input type="text" id="future_stock_short_fii" name="future_stock_short_fii" value=""><br>

    <label for="lname">Option Index Call Long</label><br>
  <input type="text" id="option_index_call_fii" name="option_index_call_fii" value=""><br>

    <label for="lname">Option Index Put Long</label><br>
  <input type="text" id="option_index_put_fii" name="option_index_put_fii" value=""><br>


  <label for="lname">Option Index buy Call Put %</label><br>
  <input type="text" id="option_index_buy_call_fii" name="option_index_buy_call_fii" value=""><br>
  

  <label for="fname">Option Index Call Short</label><br>
  <input type="text" id="option_index_call_short_fii" name="option_index_call_short_fii" value=""><br>
  <label for="lname">Option Index Put Short</label><br>
  <input type="text" id="option_index_put_short_fii" name="option_index_put_short_fii" value=""><br>
  <label for="lname">Option Index Short Call Put %</label><br>
  <input type="text" id="option_index_short_call_put_fii" name="option_index_short_call_put_fii" value=""><br>

  <label for="lname">Option Stock Call Long	</label><br>
  <input type="text" id="option_stock_call_long_fii" name="option_stock_call_long_fii" value=""><br>

  <label for="lname">Option Stock Put Long</label><br>
  <input type="text" id="option_stock_put_long_fii" name="option_stock_put_long_fii" value=""><br>


  
  <label for="lname">Option Stock Call Short</label><br>
  <input type="text" id="option_stock_call_short_fii" name="option_stock_call_short_fii" value=""><br>

  	
  <label for="lname">Option Stock Put Short</label><br>
  <input type="text" id="option_stock_put_short_fii" name="option_stock_put_short_fii" value=""><br>

  <label for="lname">Total Long Contracts</label><br>
  <input type="text" id="tota_long_contracts_fii" name="tota_long_contracts_fii" value=""><br>


  
  <label for="lname">Total Short Contracts</label><br>
  <input type="text" id="total_short_contracts_fii" name="total_short_contracts_fii" value=""><br>



</body>
</html>

