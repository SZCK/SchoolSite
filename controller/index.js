XDO.get("Article",function(result){
    console.log(result);
    tpl("index",{
        "result" : result["#0"]
    });
});