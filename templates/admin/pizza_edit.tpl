    <div id="content">
    	<div id="table">
        	<div id="nav">Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	<h1>Edytuj pizze</h1>
                    {$box}
					<form action="" method="post" class="formularz">
                        <label>
                            <span class="dane">Nazwa pizzy:</span>
                            <input type="text" name="nazwa" value="{$pizza.nazwa}"  tabindex="1" /><br />                                
						</label>   
                        <label>
                            <span class="dane">Cena małej pizzy:</span>
                            <input type="text" name="s" value="{$pizza.s}"  tabindex="2" /><br />                                
						</label>
                        <label>
                            <span class="dane">Cena sredniej pizzy:</span>
                            <input type="text" name="m" value="{$pizza.m}"  tabindex="3" /><br />                                
						</label>  
                        <label>
                            <span class="dane">Cena duzej pizzy:</span>
                            <input type="text" name="l" value="{$pizza.l}"  tabindex="4" /><br />                                
						</label> 

                        <h1>Wybierz składniki:</h1>
                               
						  
                            <ul class="skladniki">
                            {section name=i loop=$skladniki}
                            <li><input type="checkbox" name="skladniki[]" value="{$skladniki[i].nazwa}" tabindex="4" {if "Skladniki:{$pizza.skladniki}"|strpos:$skladniki[i].nazwa}checked="checked"{/if} />{$skladniki[i].nazwa}</li>                            {/section}   
                            </ul>   
    
                        <div style="clear:both"></div>     
                        <input type="hidden" name="id" value="{$pizza.id}" />   
						<span><input name="send_pizza" class="submit" type="submit" value="Edytuj" tabindex="6"/></span>
					</form>
                    <div style="clear:both"></div><br />

            	</div>
			</div>
        </div>
        