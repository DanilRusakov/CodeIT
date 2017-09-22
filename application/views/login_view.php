<!-- <h1>REGISTER FORM</h1> -->
<?
?>
<form action="/login" id='send' method='POST' onsubmit="return Validate()">
  <fieldset>
  	<label>email or login</label>
    <input type='text' name='login' placeholder='email or login' required><span></span>
    <br>
    <label>password</label>
    <input type='password' name='password' placeholder='password' required><span></span>
    <br>
    <div id="error"><? echo $data['error']; ?></div>	
  </fieldset>
</form>
<div class="sum">
  <input type="submit" value="Log in" form='send' >
</div>
