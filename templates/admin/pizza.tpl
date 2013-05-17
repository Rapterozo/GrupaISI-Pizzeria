    <div id="content">
    	<div id="table">
        	<div id="nav">Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	<h1>Dodaj Pizze</h1>
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
                        <li id="lista_pizza">
                            <div style="float:left; width:400px;">{$pizza[i].nazwa}<br /><span style="font-size:10px; color:#666;">{$pizza[i].skladniki}</span></div>
                            <div style="float:left; width:200px;">
                            <form action="" method="post">
                            <select name="wybor">
                            	<option value="edit">Edytuj</option>
                                <option value="del">Skasuj</option>
                            </select>
                            <input type="hidden" name="id" value="{$pizza[i].id}" />
                            <input  name="send" class="submit" type="submit" value="Wyślij"/>
                            </form>
                            </div>
						</li>
                        {/section}
                    </ul>
                    <div style="clear:both"></div><br />
            	</div>
			</div>
        </div>