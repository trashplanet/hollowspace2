// Initialize the nav scripts
$("ul.navTemplate").ready(function(){
	$('ul.menu.navTemplate').addClass('styleOverlay');
    // close all nav
    function closeNav(){
        $(".navContainer, .navContainer *").removeClass("active");
    }
    $("body").click(function(event){
        // if you click out of the nav
        if($(event.target).parents(".navContainer").length < 1){
            closeNav();
        }
    });
    // if you click a link
    $("ul.navTemplate a[href]").click(function(){
        closeNav();
    });
    // toggle active class, used for mobile expand
    $(".navTemplateControl").click(function(){
        $(".navContainer").toggleClass("active");
    });
    // first level links
    $("ul.navTemplate > li:has(ul) > a").click(function(){
        // close all other second level
        $("ul.navTemplate > li:has(ul)").not($(this).parent("li")).removeClass("active");
        // close all thrid level
        $("ul.navTemplate li > ul > li:has(ul)").removeClass("active");
        $(this).parent("li").toggleClass("active");
    });
    // second level links
    $("ul.navTemplate li > ul > li:has(ul) > a").click(function(){
        // close all other thrid level
        $("ul.navTemplate li > ul > li:has(ul)").not($(this).parent("li")).removeClass("active");
        $(this).parent("li").toggleClass("active");
    });
    // add identifying class for nested list
    $(".navTemplate a").each(function(){
        if($(this).next().is("ul")){
            $(this).addClass("hasSubNav");
        }
    });
});