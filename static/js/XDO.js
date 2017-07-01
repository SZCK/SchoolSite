/**
 * XDO Bridge
 */

var XDOPrototype = {
    
    Config: {
        Path: "./cgi/dataFetch.php?"
    },
    
    GetJson: function(url,callback){
        $.getJSON(url, callback);
    },
    
    get: function(sql,callback){
        this.GetJson(this.Config.Path + "a=get&r=" + encodeURIComponent(sql),callback);
    }
    
};

function XDO(){
    
}

XDO.prototype = XDOPrototype;

window.XDO = new XDO();