<?php
 echo "
<form action='mail.php' method='post'>
<fieldset>
<legend>Iletisim Formu</legend>
<input type='hidden' name='submitted' value='1'/>
<label for='name' > Ad-Soyad*</label><br>
<input type='text' name='name'  /> <br>
<label for='email' >E-mail*</label><br/>
<input type='text' name='email'  /> <br>
<label for='phone' >Telefon</label><br/>
<input type='text' name='phone'  /> <br>
<label for='message' >Mesajiniz*</label> <br/>
<textarea  name='message'> </textarea>
<input type='submit' name='Submit' value='Gonder' />
</fieldset>
</form>";
?>
