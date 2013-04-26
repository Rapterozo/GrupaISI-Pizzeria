    <div id="content">
    	<div id="table">
        	<div id="nav">Zamówienia</div>
            <div id="tabela">
                <div id="page">
                	{$box}
                    	<div style="clear:both"></div>
                    	{if isset($zamowienia)}
                        <div class="name">
                            <div style="float:left; width:350px;">Nazwa Pizzy</div>
                            <div style="float:left; width:80px;" align="center">Kwota</div>
                            <div style="float:left; width:150px;" align="center">Akcja</div>
                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                    	{section name=i loop=$zamowienia}
                        
                        <div id="lista_pizza">
                        <div style="float:left; width:350px;">
                        	{$zamowienia[i].pizza}<br />
                            <span class="skladniki">{$zamowienia[i].rozmiar}</span><br />
							{$zamowienia[i].dane}<br /><span class="skladniki">{$zamowienia[i].telefon}</span>
                        
                        </div>

                        <div style="float:left; width:80px;" align="center">{$zamowienia[i].kwota} zł</div>
                        <div style="float:left; width:150px;" align="center">
                        	<form action="" method="post">
                            	<select name="status">
                                	<option value="-1">Odrzuć</option>
                                    <option value="1">Akceptuj</option>
                                </select>
                                <input type="hidden" name="id" value="{$zamowienia[i].id}"/>
                                <input type="hidden" name="email" value="{$zamowienia[i].email}"/>
                                <input name="send" type="submit" value="OK" />
                        </form>
                        </div>

                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                        {/section}
                        {else}
                        Brak zamówień
                        {/if}
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
