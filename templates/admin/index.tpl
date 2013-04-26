  <script src="https://raw.github.com/DmitryBaranovskiy/raphael/300aa589f5a0ba7fce667cd62c7cdda0bd5ad904/raphael-min.js"></script>
  <script src="/js/morris.js"></script>
  <script src="/js/prettify.js"></script>
  <script src="/js/example.js"></script>
  <link rel="stylesheet" href="/css/prettify.css">
  <link rel="stylesheet" href="/css/morris.css">
    <div id="content">
    	<div id="table">
        	<div id="nav">Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	Witaj w Panelu administracyjnym ;)
                    <div style="clear:both"></div>
                    <div id="graph"></div>
                    <pre id="code" class="prettyprint linenums" style="display:none;">
                    {literal}
                    var day_data = [
                      {"elapsed": "01.02.2013", "value": 34},
                      {"elapsed": "02.02.2013", "value": 24},
                      {"elapsed": "03.02.2013", "value": 3},
                      {"elapsed": "04.02.2013", "value": 12},
                      {"elapsed": "05.02.2013", "value": 13},
                      {"elapsed": "06.02.2013", "value": 22},
                      {"elapsed": "07.02.2013", "value": 5}
                    ];
                    Morris.Line({
                      element: 'graph',
                      data: day_data,
                      xkey: 'elapsed',
                      ykeys: ['value'],
                      labels: ['Zamówień'],
                      parseTime: false
                    });
                    {/literal}
                    </pre>
            	</div>
			</div>
        </div>