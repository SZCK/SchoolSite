/*Copyright SZCK 2016-2017*/
window.safeCode = "SZCK";
function hashChange(){
    $("#main").html("<div class=\"loader\"><span></span><span></span><span></span></div>");
    $("body").append("<script type=\"text/javascript\" src=\""+conPath+getUrl()+conType+"\"></script>");
}
function tpl(ajaxUrl,tplData,container,noAutoAddUrl) {
    if(!noAutoAddUrl){
        ajaxUrl = root()+ajaxUrl+rext();
    }
    if(!container){
        container = "#main";
    }
    $(container).html("<div class=\"loader\"><span></span><span></span><span></span></div>");
    $.ajax({
        type: "get",
        url: ajaxUrl,
        async : 1,
        success: function(tpl){
            $(container).html(laytpl(tpl).render(tplData));
        },
        error: function(){
            alert("对不起，请求出现错误，请稍后再试。");
            $(container).html("对不起，请求出现错误，请稍后再试。");
        }
    });
}
function getUrl(){
    var hash;
    hash=(!window.location.hash)?"#/index":window.location.hash;
    hash=hash.replace(/#/, "");
    return hash;
}
function root(){
    return window.rootPath;
}
function rext(){
    return window.rootType;
}
function load(container){
    $(container).html("<div class=\"loader\"><span></span><span></span><span></span></div>");
}
function get(ajaxUrl,callback){
    $.ajax({
        type: "get",
        url: ajaxUrl,
        async : 1,
        success:callback,
        error: function(){
            alert("对不起，请求出现错误，请稍后再试。");
        }
    });
}
function title(titleContent){
    $("title").html(titleContent+" - Powered by "+window.config.copyright);
}
