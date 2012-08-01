<div id="aside">
	<aside>
		<div id="loginwrapper">
			<div id="textint">
				<label>
					<div class="date">
						  <span class="day"><?php echo date("d")?></span> 
						  <span class="month"><?php echo date("M")?></span> 
						  <span class="year"><?php echo date("Y")?></span>
					</div>
					<h2>LOGIN</h2>
				</label>
			</div>
			<div id="loginform">

				<form method="POST" action="<?php=$_SERVER['PHP_SELF'];?>">
					E-Mail:   <input class="field" type="email" name="username"/>
					Password: <input class="field" type="password" name="password"/>
							  <input type="hidden" name="token" value="<?php echo $token?>" />
							  <input type="submit" name="Login" value="Log In"/>
				</form>
				
			</div>
		</div>
	</aside>
</div><!--aside-->
