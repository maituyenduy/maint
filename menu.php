<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/styleMenu.css" rel="stylesheet" type="text/css"/>
        <script src="js/js1.7.2.min.js" type="text/javascript"></script>
        <script>
	$(function() { 
		    $(function() {  
        		 var pull        = $('#pull');  
           		 menu        = $('nav ul');  
            	 menuHeight  = menu.height();  
      
        		$(pull).on('click', function(e) {  
           			 e.preventDefault();  
           		 menu.slideToggle();  
        		});  
    		});  

    		$(window).resize(function(){  
        		var w = $(window).width();  
        		if(w > 320 && menu.is(':hidden')) {  
           		 menu.removeAttr('style');  
        	}  
   		 });    
    });  


	</script>
    </head>
    <body>
        <div class="menu col-md-12">
            <nav class="clearfix">
		<ul class="clearfix">
                    <li ><a href="#">Home</a></li>
			<li><a href="#">Thể loại</a></li>
			<li><a href="#">Quốc gia</a></li>
			<li><a href="#">Phim lẻ</a></li>
			<li><a href="#">Phim bộ</a></li>
			<li><a href="#">Phim chiếu rạp</a></li>
                        <li><a href="#">Phim thuyết minh</a></li>
                        
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
        </div>
    </body>
</html>

