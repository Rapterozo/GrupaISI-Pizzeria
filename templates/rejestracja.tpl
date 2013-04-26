    <div id="content">
    	<div id="table">
        	<div id="nav">Rejestracja</div>
            <div id="tabela">
                <div id="page">
					{if (!isset($blad) || $blad != 0 ) && !isset($userlogin)}
					<form id="Register"  action="" method="post" class="formularz">
                            <label>
                                <span class="dane">Login:</span>
                                <input type="text" name="login" id="name" class="input-name2 tipForm required" value="{$login}"  tabindex="1" original-title="Podaj swój login"/>                                
                            </label>        
                                    {$login_errorbox}
                            <label>
                                <span class="dane">Hasło:</span> 
                                <input type="password"  name="haslo" id="haslo" class="input-email2" tabindex="2"/>
							</label>
                            
                            <label>
                            		<span class="dane">Powtórz Hasło:</span>
                                    <input type="password"  name="haslo2" id="haslo2" class="input-email2" tabindex="3" />
							</label>
                            {$haslo_errorbox}
                            
                            <label>
                            		<span class="dane">Email:</span>
                                    <input type="text"  name="email" id="email" class="input-email2" value="{$email}" tabindex="4" />
                                    <div style="clear:both"></div>
                                    
							</label>
                            <div style="clear:both"></div>	
                            
                            
                            {$email_errorbox}
                            <font style="font-size:9px; padding:20px 0 15px 0;">Rejestracja jest równoznaczna z akceptacją <a href="/regulamin" title="Regulamin serwisu watch4free.pl">regulaminu</a>.</font><br /><br />
							<span class="dane"><input name="wyslane" class="submit" type="submit" value="Rejestruj"/></span>
					</form>

                    {else}
                    {$successbox}
                    {/if}
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>

