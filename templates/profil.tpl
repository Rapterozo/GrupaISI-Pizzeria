    <div id="content">
    	<div id="table">
        	<div id="nav">Profil</div>
            <div id="tabela">
                <div id="page">
                	<h1>Ilość zamówień: {$zamowienia_count}</h1>
                	<h1>Data rejestracji: {$profile['register']|date_format:"%Y/%m/%d"}</h1>
                
                	<h1>Edytuj dane:</h1>
                	{$box}
					<form id="Register" action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Numer telefonu:</span>
                                    <input type="text" name="telefon" id="name" value="{$profile['telefon']}"  tabindex="1"/><br />                                
							</label>
                            <label><span class="dane">Dane adresowe:</span>
                                    <textarea name="dane">{$profile['dane']}</textarea>
                            </label>
                            
						<span><input name="send" class="submit" type="submit" value="Edytuj" tabindex="3"/></span>
					</form>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
