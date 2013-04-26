    <div id="content">
    	<div id="table">
        	<div id="nav">Logowanie</div>
            <div id="tabela">
                <div id="page">
                	
					<form id="Register" action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Login</span>
                                    <input type="text" name="login" id="name"  value="{$login}"  tabindex="1"/><br />                                
							</label>
                            
                            <label><span class="dane">Hasło</span>
                                    <input type="password"  name="haslo" id="haslo" class="input-email2" tabindex="2"/>
                            </label>
                            {$errorboxbig}
                            <div style="clear:both"></div>
							<label>
                            <span><input name="send" class="submit" type="submit" value="Zaloguj" tabindex="3"/></span>
                            </label>
					</form>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
