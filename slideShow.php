<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/jssor.core.js" type="text/javascript"></script>
        <script src="js/jssor.utils.js" type="text/javascript"></script>
        <script src="js/jssor.slider.js" type="text/javascript"></script>
        <script>
            jQuery(document).ready(function($) {

                var options = {
                    $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                    $SlideDuration: 900, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $DirectionNavigatorOptions: {
                        $Class: $JssorDirectionNavigator$, //[Requried] Class to create direction navigator instance
                        $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };

                var jssor_slider1 = new $JssorSlider$("slider1_container", options);
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                    if (parentWidth)
                        jssor_slider1.$SetScaleWidth(parentWidth);
                    else
                        window.setTimeout(ScaleSlider, 30);
                }

                //Scale slider immediately
                ScaleSlider();

                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $(window).bind('resize', ScaleSlider);
                }
                //responsive code end
            });
        </script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="page-header col-md-12 col-sm-6">
                <h2 class="glyphicon glyphicon-star-empty" style="color: #269abc;" >PHIM ĐỀ XUẤT</h2>
                </div>
            <div class="col-md-12 col-sm-6">
            <div id="slider1_container" style="position: relative; width: 960px; height: 380px; overflow: hidden;">
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; width: 960px; height: 380px; top: 0px;
                     left: 0px; overflow: hidden;">
                    <div>
                        <div class="item col-md-3 col-sm-6  owl-item" > 
                            <div class="inner"> 
                                <a class="poster" href="#" > 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/mat-dang-cuoc-doi-the-women-of-our-home-2011.jpg" > 

                                </a>  
                                <span class="status">125/125</span>  
                                <a class="name" href="#" >Mật Đắng Cuộc Đời</a> 
                                <dfn>The Women of Our Home</dfn> 
                                <dfn>2011</dfn> </div> 
                        </div>
                        <div class="item col-md-3 col-sm-6  " > 
                            <div class="inner">
                                <a class="poster" href="#" >
                                    <img src="http://cdn.phim3s.net/images/films/thumb/tu-than-trong-nha-home-sweet-home-2013.jpg"> 

                                </a>  
                                <span class="status">Bản Đẹp</span>   
                                <a class="name" href="#" >Tử Thần Trong Nhà</a> 
                                <dfn>Home Sweet Home</dfn> 
                                <dfn>2013</dfn> 
                            </div> 
                        </div>
                        <div class="item  col-md-3 col-sm-6 owl-item"> 
                            <div class="inner"> 
                                <a class="poster" href="#" title="Đất Mẹ - Home land"> 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/dat-me-home-land-2014.jpg" > 
                                </a>  
                                <span class="status">Tập 12</span>   
                                <a class="name" href="#" >Đất Mẹ</a> 
                                <dfn>Home land</dfn> 
                                <dfn>2014</dfn> 
                            </div> 
                        </div> 
                        <div class="item  col-md-3 col-sm-6  owl-item" > 
                            <div class="inner"> 
                                <a class="poster" href="#" > 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/mat-dang-cuoc-doi-the-women-of-our-home-2011.jpg" > 

                                </a>  
                                <span class="status">125/125</span>  
                                <a class="name" href="#" >Mật Đắng Cuộc Đời</a> 
                                <dfn>The Women of Our Home</dfn> 
                                <dfn>2011</dfn> </div> 
                        </div>

                    </div>

                    <div>
                        <div class="item col-md-3 col-sm-6  owl-item" > 
                            <div class="inner"> 
                                <a class="poster" href="#" > 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/mat-dang-cuoc-doi-the-women-of-our-home-2011.jpg" > 

                                </a>  
                                <span class="status">125/125</span>  
                                <a class="name" href="#" >Mật Đắng Cuộc Đời</a> 
                                <dfn>The Women of Our Home</dfn> 
                                <dfn>2011</dfn> </div> 
                        </div>
                        <div class="item col-md-3 col-sm-6  " > 
                            <div class="inner">
                                <a class="poster" href="#" >
                                    <img src="http://cdn.phim3s.net/images/films/thumb/tu-than-trong-nha-home-sweet-home-2013.jpg"> 

                                </a>  
                                <span class="status">Bản Đẹp</span>   
                                <a class="name" href="#" >Tử Thần Trong Nhà</a> 
                                <dfn>Home Sweet Home</dfn> 
                                <dfn>2013</dfn> 
                            </div> 
                        </div>
                        <div class="item  col-md-3 col-sm-6 owl-item"> 
                            <div class="inner"> 
                                <a class="poster" href="#" title="Đất Mẹ - Home land"> 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/dat-me-home-land-2014.jpg" > 
                                </a>  
                                <span class="status">Tập 12</span>   
                                <a class="name" href="#" >Đất Mẹ</a> 
                                <dfn>Home land</dfn> 
                                <dfn>2014</dfn> 
                            </div> 
                        </div> 
                        <div class="item  col-md-3 col-sm-6  owl-item" > 
                            <div class="inner"> 
                                <a class="poster" href="#" > 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/mat-dang-cuoc-doi-the-women-of-our-home-2011.jpg" > 

                                </a>  
                                <span class="status">125/125</span>  
                                <a class="name" href="#" >Mật Đắng Cuộc Đời</a> 
                                <dfn>The Women of Our Home</dfn> 
                                <dfn>2011</dfn> </div> 
                        </div>
                    </div>
                    <div>
                        <div class="item col-md-3 col-sm-6  owl-item" > 
                            <div class="inner"> 
                                <a class="poster" href="#" > 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/mat-dang-cuoc-doi-the-women-of-our-home-2011.jpg" > 

                                </a>  
                                <span class="status">125/125</span>  
                                <a class="name" href="#" >Mật Đắng Cuộc Đời</a> 
                                <dfn>The Women of Our Home</dfn> 
                                <dfn>2011</dfn> </div> 
                        </div>
                        <div class="item col-md-3 col-sm-6  " > 
                            <div class="inner">
                                <a class="poster" href="#" >
                                    <img src="http://cdn.phim3s.net/images/films/thumb/tu-than-trong-nha-home-sweet-home-2013.jpg"> 

                                </a>  
                                <span class="status">Bản Đẹp</span>   
                                <a class="name" href="#" >Tử Thần Trong Nhà</a> 
                                <dfn>Home Sweet Home</dfn> 
                                <dfn>2013</dfn> 
                            </div> 
                        </div>
                        <div class="item  col-md-3 col-sm-6 owl-item"> 
                            <div class="inner"> 
                                <a class="poster" href="#" title="Đất Mẹ - Home land"> 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/dat-me-home-land-2014.jpg" > 
                                </a>  
                                <span class="status">Tập 12</span>   
                                <a class="name" href="#" >Đất Mẹ</a> 
                                <dfn>Home land</dfn> 
                                <dfn>2014</dfn> 
                            </div> 
                        </div> 
                        <div class="item  col-md-3 col-sm-6  owl-item" > 
                            <div class="inner"> 
                                <a class="poster" href="#" > 
                                    <img src="http://cdn.phim3s.net/images/films/thumb/mat-dang-cuoc-doi-the-women-of-our-home-2011.jpg" > 

                                </a>  
                                <span class="status">125/125</span>  
                                <a class="name" href="#" >Mật Đắng Cuộc Đời</a> 
                                <dfn>The Women of Our Home</dfn> 
                                <dfn>2011</dfn> </div> 
                        </div>

                    </div>
                </div>
                <!-- Direction Navigator Skin Begin -->
                <style>
                    /* jssor slider direction navigator skin 20 css */
                    /*
                    .jssord20l              (normal)
                    .jssord20r              (normal)
                    .jssord20l:hover        (normal mouseover)
                    .jssord20r:hover        (normal mouseover)
                    .jssord20ldn            (mousedown)
                    .jssord20rdn            (mousedown)
                    */
                    .jssord20l, .jssord20r, .jssord20ldn, .jssord20rdn
                    {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(img/d20.png) no-repeat;
                        overflow:hidden;
                    }
                    .jssord20l { background-position: -3px -33px; margin-top: -50px; }
                    .jssord20r { background-position: -63px -33px;margin-top: -50px;  }
                    .jssord20l:hover { background-position: -123px -33px; }
                    .jssord20r:hover { background-position: -183px -33px; }
                    .jssord20ldn { background-position: -243px -33px; }
                    .jssord20rdn { background-position: -303px -33px; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssord20l" style="width: 55px; height: 55px; top: 10px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssord20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
                </span>
                <!-- Direction Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">Responsive Slider</a>
            </div>
            </div>
        </div>
        <script src="js/js.1.11.2.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
