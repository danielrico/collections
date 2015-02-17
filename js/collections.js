jQuery(document).ready(function ($) {

  // "All" category is active on homepage
  $("body.home").find("header li:first-child").addClass("current-cat");

  // menu animation
  $("header").on("click", "#menu_trigger", function(){
    if($("body").hasClass("menu_active")){
      $("body").removeClass("menu_active").animate({marginLeft: "0"},400);
    }
    else{
      $("body").addClass("menu_active").animate({marginLeft: "200px"},400);
    }
  });

  // iframe animation
  $(".post").on("click", "h1 a, .thumbnail a", function(){
    $("#overlay")
      .fadeIn(300);
    $("body")
      .animate({marginLeft: "-66%"},800)
      .toggleClass("active");
    $("#display_source")
      .toggleClass("active")
      .animate({right: "0"},800)
      .appendTo("#overlay")
      // don't mess with the opened menu
      if($("body").hasClass("menu_active")){
        $("body").removeClass("menu_active");
      }
  });

  $("#overlay").on("click",function(){
    $("#display_source")
      .toggleClass("active")
      .animate({right: "-66%"},800)
      .appendTo("main");
    $("body")
      .animate({marginLeft: "0"},800)
      .toggleClass("active");
    $("#overlay")
      .fadeOut(300);
  });

  

});