$(document).ready(function(){

/*    if($(window).size()<500){

      var num_li=2   //看右邊有幾個點(幾個page)
      (function($) {

          $('#header__icon').click(function(e){
              e.preventDefault();
              $('body').toggleClass('with--sidebar');
          });
      $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
      });
      })(jQuery);
    }
    else{

	var num_li=$("li").length   //看右邊有幾個點(幾個page)
    }
*/
    var num_li=$("li").length
    var now_p=1

    if(location.hash){
        var newhash = window.location.hash.substring(1); 
        if( newhash == "1" ){
            now_p = 1;
        }else if( newhash == "2" ){
            now_p = 2;
        }else if( newhash == "3" ){
            now_p = 3;
        }else if( newhash == "4" ){
            now_p = 4;
        }else{
            now_p = 1;
        }
        console.log(newhash);
    }else{
        now_p = 1;
        console.log("no hash");
    }

    moving=1
    //$("#foot").hide()
    $("html,body").animate({"scrollTop":$(".hp-p0"+now_p).offset().top},function(){moving=0})
    window.location.hash = now_p;
    n=now_p;
    change_point();

    //滾動滑鼠滾輪時，移動到上一頁、下一頁的效果
    moving=0
    $(window).mousewheel(function(e){
        $("html,body").stop()
        if(moving==0){
            moving=1
            if(e.deltaY==-1){
                if(n<num_li){ 
                    n++
                }
            }else{
                if(n>1){
                    n--
                }
            }
        }
        $("html,body").animate({"scrollTop":$(".hp-p0"+n).offset().top},function(){moving=0})
        window.location.hash = n;
        change_point();
        //console.log(n)
    })

    $(window).keydown(function(e) {
        $("html,body").stop()
        if(moving==0){
            moving=1
            switch(e.which) {
                case 40: // down
                    if(n<num_li){
                        n++
                    }
                    break;
                case 38: // up
                    if(n>1){
                        n--
                    }
                    break;

                default: return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        }
        $("html,body").animate({"scrollTop":$(".hp-p0"+n).offset().top},function(){moving=0})
        window.location.hash = n;
        change_point();
        //console.log(n)
    })


    function change_point(){
        if( n==1 ){
            $(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            $(".hp-nav li:eq(0)").css("background-color","#810C95")
        }else if(n==2){
            $(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            $(".hp-nav li:eq(1)").css("background-color","#810C95")
        }else if(n==3){
            $(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            $(".hp-nav li:eq(2)").css("background-color","#810C95")
            //show page 3 element
            $("#hp-field-pic1").addClass("hp-field-pic1-translate").removeClass("hp-field-before")
            $("#hp-field-pic2").addClass("hp-field-pic2-translate").removeClass("hp-field-before")
            $("#hp-field-pic3").addClass("hp-field-pic3-translate").removeClass("hp-field-before")
            $("#hp-field-link1").addClass("hp-field-link-after").removeClass("hp-field-link-before")
            $("#hp-field-link2").addClass("hp-field-link-after").removeClass("hp-field-link-before")
            $("#hp-field-link3").addClass("hp-field-link-after").removeClass("hp-field-link-before")
            $("#hp-field-icon1").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-font1").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-icon2").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-font2").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-icon3").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-font3").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
        }else if(n==4){
            $(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            $(".hp-nav li:eq(3)").css("background-color","#810C95")
        }else{
            $(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            $(".hp-nav li:eq(4)").css("background-color","#810C95")
        }
    }
    //根據捲軸的位置改變右方導覽列游標的顏色
    $(window).scroll(function(){
         if(moving==0 && $(window).scrollTop()>=$(".hp-p01").offset().top && $(window).scrollTop()<$(".hp-p02").offset().top){
            //$(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            //$(".hp-nav li:eq(0)").css("background-color","#646464")
            n=1;
            change_point();
        }else if(moving==0 && $(window).scrollTop()>=$(".hp-p02").offset().top && $(window).scrollTop()<$(".hp-p03").offset().top){
            //$(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            //$(".hp-nav li:eq(1)").css("background-color","#646464")
            n=2;
            change_point();
            //n=2
        }else if(moving==0 && $(window).scrollTop()>=$(".hp-p03").offset().top && $(window).scrollTop()<$(".hp-p04").offset().top){
            //$(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            //$(".hp-nav li:eq(2)").css("background-color","#646464")
            n=3;
            change_point();

            //show page 3 element
            /*$("#hp-field-pic1").addClass("hp-field-pic1-translate").removeClass("hp-field-before")
            $("#hp-field-pic2").addClass("hp-field-pic2-translate").removeClass("hp-field-before")
            $("#hp-field-pic3").addClass("hp-field-pic3-translate").removeClass("hp-field-before")
            $("#hp-field-link1").addClass("hp-field-link-after").removeClass("hp-field-link-before")
            $("#hp-field-link2").addClass("hp-field-link-after").removeClass("hp-field-link-before")
            $("#hp-field-link3").addClass("hp-field-link-after").removeClass("hp-field-link-before")
            $("#hp-field-icon1").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-font1").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-icon2").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-font2").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-icon3").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            $("#hp-field-font3").addClass("hp-field-link-after2").removeClass("hp-field-link-before")
            *///n=3
        }else if(moving==0 && $(window).scrollTop()>=$(".hp-p04").offset().top){
            //$(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            //$(".hp-nav li:eq(3)").css("background-color","#646464")
            n=4;
            change_point();
            //n=4
        }
        //console.log("n="+n)
        /*if(n==5){
            $("#foot").show(800)
        }else{
            $("#foot").hide()
        }*/
    })
             
    //點選右方導覽列時會到指定圖片
    for(i=0;i<=num_li;i++){
        $(".hp-nav li:eq("+i+")").click({id:i},function(e){
            $("html,body").stop()
            $(".hp-nav li").css("background-color","white")//除了被點擊到的游標，其他都恢復成原來的顏色
            page=e.data.id+1
            n = page
            $("html,body").animate({"scrollTop":$(".hp-p0"+page).offset().top})
            $(".hp-nav li:eq("+e.data.id+")").css("background-color","#810C95")//被點擊到的游標變色，前面的selector用this也可以
            window.location.hash = page;
            change_point();
        })
    }
    //一進入網頁時，將導覽列垂直置中計算導覽列置中的位置
   center()
    
   //縮放網頁時，將導覽列垂直置中
    $(window).resize(function(){
        center()
    })
    
    //計算導覽列垂直置中的高度
    function center(){
        pos=$(window).height()/2-$(".hp-nav").height()/2
        $(".hp-nav").css("top",pos)
    }

/*menu button*/
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
/*    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

// Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');}
    	}
      }
    }
*/
    window.onhashchange = function(){
        // hash changed. Do something cool.
        if(location.hash){
             var hash = location.hash.substring(1);
             $("html,body").animate({"scrollTop":$(".hp-p0"+hash).offset().top},function(){moving=0})
             n=hash
             change_point();
             //console.log("new: "+hash);
             // load page
             // alert(hash);
        }else{
             // load home page
             // alert("home");
        }
    }

})

