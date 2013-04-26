    <div id="content">
    	<div id="table">
        	<div id="nav">Zamówienia</div>
            <div id="tabela">
                <div id="page">
                	{$box}
                    	<div style="clear:both"></div>
                    	{if isset($zamowienia)}
                        <div class="name">
                            <div style="float:left; width:200px;">Nazwa Pizzy</div>
                            <div style="float:left; width:100px;" align="center">Data</div>
                            <div style="float:left; width:80px;" align="center">Kwota</div>
                            <div style="float:left; width:80px;" align="center">Status</div>
                            <div style="float:left; width:80px;" align="center">Płatność</div>
 	                    </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>   
                    	{section name=i loop=$zamowienia}
                        <div id="lista_pizza">
                        <div class="oferta" style="width:200px; text-align:left;">{$zamowienia[i].pizza}({$zamowienia[i].rozmiar})</div>
                        <div class="oferta">{$zamowienia[i].date|date_format:"%d/%m/%Y"}</div>
                        <div class="oferta" style="width:80px;">{$zamowienia[i].kwota} zł</div>
                        <div class="oferta" style="width:80px;">{if $zamowienia[i].status == -1}Odrzucono{else if  $zamowienia[i].status == 0}W toku{else}Zaakceptowano{/if} </div>
                        <div class="oferta">{if $zamowienia[i].platnosc == 1} Przy odbiorze {else}<form action="" method="post"><input type="hidden" name="id" value="{$zamowienia[i].id}"/><input name="zaplac" type="submit" value="Zapłać" /></form>{/if}</div>

                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                        {/section}
                        {else}
                            <div style="width:600px;">
                            <div style="border-right:#F60 1px solid; width:50px; float:left; background-image:url(./images/info.gif); background-repeat:no-repeat; background-position:left; line-height:60px;">&nbsp;</div>
                            <div style="float:left; padding-left:10px;min-height:60px; line-height:60px;font-weight:bold; text-decoration:underline;">Brak zamówień!</div>
                            </div>
                        {/if}
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
