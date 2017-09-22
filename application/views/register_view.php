<!-- <h1>REGISTER FORM</h1> -->
<?
if($data['registered']){
    echo $data['registered'];
}
else{
?>
<form action="/register" id='send' method='POST' onsubmit="return Validate()">
  <fieldset>
  	<label>email</label>
    <input type='email' name='email' placeholder='email' required><span></span>
    <br>
    <label>login</label>
    <input type='login' name='login' placeholder='login' required><span></span>
    <br>
    <label>real name</label>
    <input type='text' name='name' placeholder='real name' required><span></span>
    <br>
    <label>birth date</label>
    <input type='date' name='birthday' placeholder='birthday' required><span></span>
    <br>
    <label for="country">county</label>
    <select onchange="selected_select();" class="coutry_select" name="country" id="country" required>
    <option value=""></option>
    <?
        foreach ($data['form']['countries'] as $country) {
            echo "<option value='".$country['country_id']."'>".$country['name']."</option>";
        }
        
    ?>
    </select><span id="not_ok_mark"><img src="http://www.clker.com/cliparts/4/3/1/f/1195436930767206781not_ok_mark_h_kon_l_vdal_01.svg" width="15px" height="15px"></span>
    <br>
    <label>password</label>
    <input type='password' name='password' placeholder='password' required><span></span>
    <br>
    <label>confirmation</label>
    <input type='password' name='password_confirmation' placeholder='password confirmation' required><span></span>
    <br>
    <div id="pass_error"></div>
    <div id="login_error"><? echo $data['error']; ?></div>
    <label for="agreement" title="agree with terms and conditions"><span>agreement</span></label>
    <input type="checkbox" id="agreement" name="agreement" required>
	
  </fieldset>
</form>

<div class="sum">
  <input type="submit" value="Register" form='send' >
</div>
<?}?>
<script>
    var elem_ok = document.createElement('span');
    elem_ok.innerHTML = '<img src="http://htmlbook.ru/example/images/ok.png" alt="" >';
    var not_ok_mark = document.getElementById('not_ok_mark');

    var email = document.forms["send"]["email"];
    var login = document.forms["send"]["login"];
    var name = document.forms["send"]["name"];
    var birthday = document.forms["send"]["birthday"];
    var county = document.getElementById('country');
    var password = document.forms["send"]["password"];
    var password_confirmation = document.forms["send"]["password_confirmation"];

    var pass_error = document.getElementById("pass_error");

    password.addEventListener("blur", passwordVerify, true);

    
    function Validate(){
        if(password.value ==""){
            password.style.border = "1px solid red";
            password.textContent = "password is required";
            password.focus();
            return false;
        }
        if(password_confirmation.value != password.value){
            pass_error.innerHTML = "The two passwords do not match";
            password_confirmation.value = "";
            return false;
        }
        if(password.value.length<6 ){
            pass_error.innerHTML = "Short passwords are easy to guess. Try one with at least 6 characters.";
            password.value = "";
            password_confirmation.value = "";
            return false;
        }
    }
    function passwordVerify(){
        if(password.value != ""){
            password.style.border = "1px soled #5E6E66";
            password.pass_error.innerHTML = "";
        }
    }

    function selected_select(){
        county.parentNode.insertBefore(elem_ok, county.nextSibling);
        not_ok_mark.parentNode.removeChild(not_ok_mark);
    }
</script>
