<div class="feature"> 
	<h3>G&auml;stebuch</h3>
	
    <p>
     
    </p> 
</div> 
<div class="story"> 
	<h3></h3> 
	<p>

	<form action="homepage_de.php?content=10&<?=SID?>&action=2" method="post">
		<?php
		if(isset($_GET['action']) AND $_GET['action'] == 2)
		{
			$resultValue = saveMessageInDB(); //sagt, ob gespeichert oder fehler, wenn fehler, die nummer des feldes
			switch($resultValue)
			{
			case 0;
			?>
			<p>Ihr Name: <br><input type="text" name="name" /></p>
			<p>Ihr Vorname: <br><input type="text" name="prename" /></p>
			<p>Ihr Text<br>
			<textarea name="text" ROWS="8" COLS="30" ></TEXTAREA></p>
			<p>Ihr e-mail: <br><input type="text" name="mail" /></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Erfolgreich gespeichert</font>
			<?php
			break;
			case 1;
			?>
			<p>Ihr Name: <br><input type="text" name="name" /></p>
			<p>Ihr Vorname: <br><input type="text" name="prename" value="<?=$_POST['prename']?>"/></p>
			<p>Ihr Text<br>
			<textarea name="text" ROWS="8" COLS="30"  ><?=$_POST['text']?></TEXTAREA></p>
			<p>Ihr e-mail: <br><input type="text" name="mail" value="<?=$_POST['mail']?>"/></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Name zu lang</font>
			<?php
			break;
			case 2;
			?>
			<p>Ihr Name: <br><input type="text" name="name" value="<?=$_POST['name']?>" /></p>
			<p>Ihr Vorname: <br><input type="text" name="prename"/></p>
			<p>Ihr Text<br>
			<textarea name="text" ROWS="8" COLS="30" ><?=$_POST['text']?></TEXTAREA></p>
			<p>Ihr e-mail: <br><input type="text" name="mail" value="<?=$_POST['mail']?>"/></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Vorname zu lang</font>
			<?php
			break;
			case 3;
			?>
			<p>Ihr Name: <br><input type="text" name="name" value="<?=$_POST['name']?>" /></p>
			<p>Ihr Vorname: <br><input type="text" name="prename" <?=$_POST['prename']?>/></p>
			<p>Ihr Text<br>
			<textarea name="text" ROWS="8" COLS="30"><?=$_POST['text']?></TEXTAREA></p>
			<p>Ihr e-mail: <br><input type="text" name="mail"/></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Mailadresse zu lang</font>
			<?php
			break;
			}
		}
		else
		{
		?>
			<p>Ihr Name: <br><input type="text" name="name" /></p>
			<p>Ihr Vorname: <br><input type="text" name="prename" /></p>
			<p>Ihr Text<br>
			<textarea name="text" ROWS="8" COLS="30" ></TEXTAREA></p>
			<p>Ihr e-mail: <br><input type="text" name="mail" /></p>
			<p><input type="submit" /></p>
		<?php
		}
		?>		  	
		</form>
		<hr>
		<?php
		loadMessagesFromDB('dbSpanien')
		?>
	 
	</p> 
	<p>
	 
	</p>
	 
</div>
