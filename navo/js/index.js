$(window).scroll(function(){   
    var window_height = window.innerHeight;

    var iphone1 = document.getElementById("iphone1");
    var rect = iphone1.getBoundingClientRect();

    var feature1 = document.getElementById("feature1");
    var feature1_rect = feature1.getBoundingClientRect();

    var feature2 = document.getElementById("feature2");
    var feature2_rect = feature2.getBoundingClientRect();

    var feature3 = document.getElementById("feature3");
    var feature3_rect = feature3.getBoundingClientRect();


    var container = document.getElementById("features");
    var container_rect = container.getBoundingClientRect();
    //iphone1.style.width = "300px";

    if(  container_rect.top< window_height/2 && container_rect.bottom > 600){
       iphone1.style.opacity = 100;
        if(feature1_rect.top<window_height/2 && feature2_rect.top>window_height/2){  
            iphone1.src = "img/SearchV22.png";
        }
        if(feature2_rect.top<window_height/2 && feature3_rect.top>window_height/2){
            iphone1.src = "img/Navigation.png";

            
        }
        if(feature3_rect.top<window_height/2){
            iphone1.src = "img/Shopping.png";

        }

    }else{

       iphone1.style.opacity = 0;
   }

});
