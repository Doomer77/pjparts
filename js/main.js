$(document).ready(function() {

$(".outside").hover(function(){$(".list-servis").slideToggle(500)});

$('.block-category  > ul > li  > a').click(function(){
		if ($(this).attr('class') != 'active')
			{
			$('.block-category  > ul > li  > ul').slideUp(400);
			$(this).next().slideToggle(400);
				
				$('.block-category  > ul > li  > a').removeClass('active');
				$(this).addClass('active');
			}
			else
			{
				$('.block-category  > ul > li  > a').removeClass('active');
				$('.block-category  > ul > li  > ul').slideUp(400);
				
			}
});

$('#input-search').bind('textchange', function (){
		var input_search = $("#input-search"). val();
		if (input_search.length > 2)
		{
			$.ajax({
				type: "POST",
				url: "include/search.php",
				data: "text="+input_search,
				dataType: "html",
				cache: false,
				success: function(data){
					if (data > '')
					{
						$(".result-search").show().html(data);
					}else{
						$(".result-search").hide();
					}
				}
			});
		}else{
			$(".result-search").hide();
		}
}); 
});



