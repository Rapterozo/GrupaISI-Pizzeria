
    <div id="content">
    	<div id="table">
        	<div id="nav">Menu LaCosta</div>
            <div id="tabela">
				<div id="page">
                		<div class="name">
                            <div style="float:left; width:200px;">Nazwa Pizzy</div>
                            <div style="float:left; width:100px;" align="center">Mala</div>
                            <div style="float:left; width:100px;" align="center">Średnia</div>
                            <div style="float:left; width:100px;" align="center">Duża</div>
                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                    	{section name=i loop=$pizza}
                        <div id="lista_pizza">
                        <div style="float:left; width:200px;">{$pizza[i].nazwa}<br /><span class="skladniki">{$pizza[i].skladniki|replace:",":", "}</span></div>
                        <div class="oferta"><a class="zamow" id="{$pizza[i].id}_{$pizza[i].nazwa}_s_{$pizza[i].s}" href="">{$pizza[i].s} zł</a></div>
                        <div class="oferta"><a class="zamow" id="{$pizza[i].id}_{$pizza[i].nazwa}_m_{$pizza[i].m}" href="">{$pizza[i].m} zł</a></div>
                        <div class="oferta"><a class="zamow" id="{$pizza[i].id}_{$pizza[i].nazwa}_l_{$pizza[i].l}" href="">{$pizza[i].l} zł</a></div>

                        </div>
                        {/section}
				</div>
            </div>
        </div>
