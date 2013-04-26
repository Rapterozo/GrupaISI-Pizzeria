$(document).ready(function(){
	
var messageList = $(".lista_koszyk > ol");
var loading = $("#loading");
	function updateKoszykCena(){
		$.ajax({
			type: "POST", url: "../ajax_pizza.php", data: "action=cena",
			complete: function(data){
	
				if(data.responseText == "") // mamy cos w koszyku
				{
					$("#kwota").attr({ value:"0 zł" });
				}else // koszyk pusty
				{
					$("#kwota").attr({ value:data.responseText + " zł" });
					
				}
			}
		
		});
	}
	function updateKoszyk(){
		//messageList.hide();
		loading.fadeIn("slow");

		$.ajax({
			type: "POST", url: "../ajax_pizza.php", data: "action=update",
			complete: function(data){
				loading.fadeOut("slow");
	
				if(data.responseText != "") // mamy cos w koszyku
				{
					$("#koszyk").fadeOut("slow");
					$("#twoj_koszyk").fadeIn("slow");
					messageList.html(data.responseText);

					$(".wyczysc_koszyk").fadeIn("slow");
				}else // koszyk pusty
				{
					$(".wyczysc_koszyk").fadeOut("slow");
					$("#koszyk").fadeIn("slow");
					$("#twoj_koszyk").fadeOut("slow");
					messageList.html(data.responseText);
					
				}
				updateKoszykCena();
			}
		
		});
	}
jQuery(window).load(function() {
     updateKoszyk();
});

		$('.zamow').live("click",function() 
		{

			var ID = $(this).attr("id");
			if(ID)
				{
					$("#koszyk").fadeOut("slow");
					
					$.ajax({
						type: "POST",
						url: "../ajax_pizza.php",
						data: "action=insert&pizza="+ ID, 
						cache: false,
						complete: function(data){
							updateKoszyk();
						}
					});
				}
			return false;
		});
		$('.wyczysc_koszyk').live("click",function() 
		{

				
					$.ajax({
						type: "POST",
						url: "../ajax_pizza.php",
						data: "action=wyczysc", 
						cache: false,
						complete: function(data){
							updateKoszyk();
						}
					});

			return false;
		});
});





