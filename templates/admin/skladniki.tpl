    <div id="content">
    	<div id="table">
        	<div id="nav">Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	<h1>Dodaj składniki</h1>
                    {$box}
					<form action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Nazwa składnika:</span>
                                    <input type="text" name="skladnik" id="name" class="input-name2 tipForm required" value=""  tabindex="1" original-title="Podaj swój login"/><br />                                
							</label>                           
						<span><input name="send_skladnik" class="submit" type="submit" value="Dodaj" tabindex="2"/></span>
					</form>
                    <div style="clear:both"></div><br />
                    <h1>Lista składników:</h1>
                    <ul class="skladniki">
                    	{section name=i loop=$skladniki}
                        <li><a href="/admin/skladniki/id-{$skladniki[i].id}">{$skladniki[i].nazwa}</a></li>
                        {/section}
                    </ul>
                    <div style="clear:both"></div><br /><br />
                    By skasować składnik, naciśnij na niego.
            	</div>
			</div>
        </div>