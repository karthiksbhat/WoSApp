
var AppSettings = new Object();

var app = {
    SOME_CONSTANTS : false,  // some constant

    initialize: function() {
        console.log("console log init");
        this.bindEvents();
        this.initFastClick();
    },
    
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    initFastClick : function() {
        window.addEventListener('load', function() {
            FastClick.attach(document.body);
        }, false);
    },


    onDeviceReady: function() {
        console.log("device ready, start making you custom calls!");
		
		checkFirstRun();
        //Moar code

    }
};

function checkFirstRun()
{
	if(typeof( window.localStorage.WoSApp) == "undefined")
	{
		//go to config page
		window.location= "#firstrun-page";
		//populate details into settings var
		
		window.localStorage.setItem("WoSApp",AppSettings);
	}
}