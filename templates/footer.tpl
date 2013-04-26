    	<div id="table_right">
        	<div id="nav"></div>
            <div id="tabela">
            	<div id="page">
            	{if $isLogged}
                	Witaj, {$profile['username']}. <a href="/login.html?logout=yes">Wyloguj się</a><br /><a href="/admin.html">Panel Administracyjny</a>
                    {if $smarty.session.admin && $isLogged}

                    <h1>Panel administracyjny:</h1>
                    <ul>
                    	<li><a href="/admin/pizza">Dodaj pizze</a></li>
                       <li><a href="/admin/skladniki">Dodaj składniki</a></li>
                       <li><a href="/admin/zamowienia">Zamówienia</a></li>
                    </ul>

                    {/if}
                <br /><br />{/if}

                <div id="koszyk" align="center">Koszyk jest pusty</div>
                <div id="twoj_koszyk"><h1>Twój koszyk</h1></div>
                <div class="lista_koszyk">
                    <ol>
                    </ol>
                </div>
        
                <div align="center"><div id="loading"><img src="./images/loading.gif" alt="Loading..." /></div></div>
                <a class="wyczysc_koszyk" href="">Wyczyść koszyk</a>
                <hr />
					<form action="/zamowienia.html" method="post" class="form_zamow">
                            <label>
                            <div class="dane">Numer telefonu</div>
                                    <input type="text" name="telefon" id="name" value="{$profile['telefon']}" tabindex="10" />                               
							</label>

                            <label><div class="dane">Dane adresowe</div>
                                    <textarea  name="dane"  tabindex="11"/>{$profile['dane']}</textarea>
                            </label>
                            <label>
                            	<div class="dane">Kwota do zapłaty</div>
                                <input type="text" readonly="readonly" name="kwota" value="0 zł" id="kwota" />
                            </label>
                            <label>
                            	<div class="dane">Sposób płatności:</div>
                                <select name="platnosc">
                                	<option value="1">Przy odbiorze</option>
                                    <option value="0">Przelew</option>
                                </select>
                            </label>
						<label><input name="send" class="submit" type="submit" value="Zamów" tabindex="12"/></label>
					</form>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
<div id="content">
    	<div id="bottom">
        	<div id="nav">Godziny otwarcia</div>
            <div id="tabela"></div>
        </div>
    	<div id="bottom-center">
        	<div id="nav">Dojaz do lokalu</div>
            <div id="tabela"></div>
        </div>
    	<div id="bottom">
        	<div id="nav">Kontakt</div>
            <div id="tabela"></div>
        </div>
        <div id="footer">
        	<p>Copyright © <b>La-costa.pl</b> 2013.</p>
        </div>
    </div>

</div>
</body>
</html>
