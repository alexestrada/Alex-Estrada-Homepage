$(document).ready(function(){
    init();
});

function init() {
    set_globalVariables();
    draw_stage();
    $.event.add(window, "resize", draw_stage);
}

function set_globalVariables() {
    window.doc = new Object();
    window.doc.width = 0;
    window.doc.height = 0;
}

/* ========================================================================= */
/* ========================= CONTENT CONTAINER ============================= */
/* ========================================================================= */

function draw_stage() {
    document_getDimensions();
    
    // Position and resize Stage
    $("#stage").height(window.doc.height);
    
    // Position and resize Page
    $("#page").css({
		'top':			'50%',
		'left':			'50%',
		'margin-left':	(-1 * ($("#page").outerWidth() / 2)),
		'margin-top':	(-1 * ($("#page").outerHeight() / 2))
    });
}

function document_getDimensions() {
    var winW = 630, winH = 460;
    if (document.body && document.body.offsetWidth) {
        winW = document.body.offsetWidth;
        winH = document.body.offsetHeight;
    }
    if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetWidth ) {
        winW = document.documentElement.offsetWidth;
        winH = document.documentElement.offsetHeight;
    }
    if (window.innerWidth && window.innerHeight) {
        winW = window.innerWidth;
        winH = window.innerHeight;
    }
    
    window.doc.width = winW;
    window.doc.height = winH;
}