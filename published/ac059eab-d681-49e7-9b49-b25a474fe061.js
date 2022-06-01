/**
* Couaff
* Default Layout
* 2019-06-25 17:31:28
*/

(function () {
    // Loader
    var loader = new function(){this.rC=-1;this.r=[];this.add=function(src){this.r.push(src);};this.addTag=function(src,callback){var head=document.getElementsByTagName('head')[0],tag=src.indexOf('.js')>0?'script':'link',s=document.createElement(tag);head.appendChild(s);s.onload=callback;if(tag==='script'){s.type='text/javascript';s.src=src;}else if(tag==='link'){s.rel='stylesheet';s.href=src;}};this.loadNext=function(){this.rC++;if(this.rC>=this.r.length){this.done();}else{var r=this.r[this.rC];this.addTag(r,this.loadNext.bind(this));}};this.done=function(){this.onResourcesLoaded(window.Curator);};this.load=function(cb){this.onResourcesLoaded=cb;this.loadNext();};};

    // Config
    var config = {"lang":"en","debug":0,"hidePoweredBy":false,"forceHttps":false,"feed":{"id":"ac059eab-d681-49e7-9b49-b25a474fe061","apiEndpoint":"https:\/\/api.curator.io\/v1.1","postsPerPage":12,"params":{},"limit":25,"showAds":false},"widget":{"autoLoadNew":false,"template":"widget-grid-carousel","autoPlay":true,"autoLoad":true,"infinite":false,"rows":1,"controlsOver":true,"controlsShowOnHover":false,"speed":5000,"duration":700,"panesVisible":null,"useCss":true,"moveAmount":0,"easing":null},"post":{"template":"post-grid","showShare":true,"showComments":false,"showLikes":false,"autoPlayVideos":false,"clickAction":"open-popup","clickReadMoreAction":"open-popup","matchHeights":false,"minWidth":200,"imageHeight":"100%"},"popup":{"template":"popup","templateWrapper":"popup-wrapper","autoPlayVideos":false,"deepLink":false},"filter":{"template":"filter","showNetworks":false,"showSources":false},"container":"#curator-feed","type":"GridCarousel","theme":"sydney"};
    var colours = {"widgetBgColor":"transparent","bgColor":"#000000","borderColor":"transparent","iconColor":"#ddc686","textColor":"#ffffff","linkColor":"#dec686"};
    var styles = {};

    // Bootstrap
    function loadWidget (Curator) {
        Curator.loadWidget(config, colours, styles);
    }

    // Run Loader
    loader.add('../4.0/css/curator.css');
    loader.add('../published-css/ac059eab-d681-49e7-9b49-b25a474fe061.css');
    
    var loaderCallback = loadWidget;

    if (window.define) {
        // Require detected, use Loader for CSS & Require for JS
        loaderCallback = function() {
            require.config({paths: {
                'curator': 'https://cdn.curator.io/4.0/js/curator.min'
            }});

            require(['curator'], loadWidget);
        };
    } else {
        // Use Loader for all
        loader.add('https://cdn.curator.io/4.0/js/curator.min.js');
    }
    
    
    
    loader.load(loaderCallback);
})();
