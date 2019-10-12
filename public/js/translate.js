        function getLangResources(){
    
    // Define arrays how many language you want to translate
    var tr = new Array();
    var en = new Array();

    tr['hello_world'] = "Register"; 
    en['hello_world'] = "sayinthwin";
    
    tr['h1'] = "သိမ်းမည်"; 
    en['h1'] = "HOME";

    tr['home'] = "သိမ်းမည်"; 
    en['home'] = "HOME";

    tr['home1'] = "သိမ်းမည်1"; 
    en['home1'] = "HOME1";

    tr['h2'] = "Merhaba H2 tag"; 
    en['h2'] = "Hi H2 tag";

    tr['h3'] = "Merhaba H3 tag"; 
    en['h3'] = "Hi H3 tag";

    tr['my_button'] = "Ara"; 
    en['my_button'] = "Search";
    
    // Added new array defined arrays.
    var resources = new Array();
    resources['tr'] = tr;
    resources['en'] = en;
    
    return resources;
}

function changeLanguage(lng){
var resources = getLangResources()[lng];

$("h1[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
$("h2[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
$("h3[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
$("span[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
$("p[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
$("button[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});

$("li[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
$("a[name='translate']").each(function(i, elt){
    $(elt).text(resources[$(elt).attr("caption")]);
});
}


$(function() { 
    // Default Language
    changeLanguage("en");
 
    $("#tr_button").click(function(){
        changeLanguage("tr");
    });

    $("#eng_button").click(function(){
        changeLanguage("en");
    });
});


$('.lang_click').click(function(){
                $('.lang1').toggle();
                $('.lang2').toggle();
});