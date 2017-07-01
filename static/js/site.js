/*Copyright SZCK 2016-2017*/

$("#x-navbar li a").on("click",function(){
    $("#x-navbar li").removeClass("active");
    $(this).parent().addClass("active");
});

$.getJSON("./config.json", function(json){
    window.rootPath;
    window.rootPath = json.template.dir;
    window.rootType = json.template.ext;
    window.conPath = json.controller.dir;
    window.conType = json.controller.ext;
    window.XDO.Config.Path = json.cgiFile.dir;
    //window.jsonType = json.cgiFile.ext;
    window.config = json;
    $("#copyDiv").html(json.copyright);
    $("#shareDiv").html(json.share);
    $("#bgmusic").html(json.music);
    $("#analytics").html(json.analytics);
    hashChange();
});