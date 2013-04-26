    <div id="content">
    	<div id="table">
        	<div id="nav">Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	<h1>Dodaj składniki</h1>
                    {$box}
					<form action="" method="post" class="formularz">
                        <label>
                            <span class="dane">Nazwa pizzy:</span>
                            <input type="text" name="nazwa" value=""  tabindex="1" /><br />                                
						</label>   
                        <label>
                            <span class="dane">Cena małej pizzy:</span>
                            <input type="text" name="s" value=""  tabindex="2" /><br />                                
						</label>
                        <label>
                            <span class="dane">Cena sredniej pizzy:</span>
                            <input type="text" name="m" value=""  tabindex="3" /><br />                                
						</label>  
                        <label>
                            <span class="dane">Cena duzej pizzy:</span>
                            <input type="text" name="l" value=""  tabindex="4" /><br />                                
						</label> 

                        <h1>Wybierz składniki:</h1>
                               
						  
                            <ul class="skladniki">
                            {section name=i loop=$skladniki}
                            <li><input type="checkbox" name="skladniki[]" value="{$skladniki[i].nazwa}"  tabindex="4" />{$skladniki[i].nazwa}</li>
                            {/section}   
                            </ul>   
    
                        <div style="clear:both"></div>        
						<span><input name="send_pizza" class="submit" type="submit" value="Dodaj" tabindex="6"/></span>
					</form>
                    <div style="clear:both"></div><br />
                    <h1>Lista Pizz:</h1>
                    <ul class="pizza">
                    	{section name=i loop=$pizza}
                        <li><a href="/admin/pizza/id-{$pizza[i].id}">{$pizza[i].nazwa}</a><br /><span style="font-size:10px;">{$pizza[i].skladniki}</span></li>
                        {/section}
                    </ul>
                    <div style="clear:both"></div><br /><br />
                    By skasować pizze, naciśnij na nazwe.
            	</div>
			</div>
        </div>