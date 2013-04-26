    <div id="content">
    	<div id="table">
        	<div id="nav">Logowanie - Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	{$box}
					<form id="Register" action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Login</span>
                                    <input type="text" name="login" id="name" class="input-name2 tipForm required" value="{$login}"  tabindex="1" original-title="Podaj swój login"/><br />                                
							</label>
                            {$login_errorbox}
                            <label><span class="dane">Hasło</span>
                                    <input type="password"  name="haslo" id="haslo" class="input-email2" tabindex="2"/>
                            </label>
                            
						<span><input name="send" class="submit" type="submit" value="Zaloguj" tabindex="3"/></span>
					</form>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>