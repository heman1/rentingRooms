<html xmlns="http://www.w3.org/1999/xhtml"><head>
<base href="http://localhost/roomdaan">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="content-language" content="en">

<title>Get Country State City Hierarchy - Get list of country, state, city using GeoNames</title>
<meta name="keywords" content="geographic names, geonames hierarchy, world places list, world places hierarchy, list of country, list of city, list of state, geonames country/state/city list, geographical names list, geographical hierarchy, gennames hierarchy, geonames list, geoinformation, scripting world places">
<meta name="description" content="Get a hierarchy of country, state, city using geonames database. List by country and then list by state and then list all cities using geonames database. Get all places(geoinformation) using this code.">

<meta property="fb:app_id" content="124948124275250">
<meta property="og:title" content="Get Country State City Hierarchy - Get list of country, state, city using GeoNames">
<meta property="og:site_name" content="Jayapal Chandran Programming">
<meta property="og:url" content="http://vikku.info/programming/geodata/geonames-get-country-state-city-hierarchy.htm">
<meta property="og:type" content="article">
<meta property="og:image" content="http://vikku.info/programming/images/source-code.png">
<meta property="og:description" content="Get a hierarchy of country, state, city using geonames database. List by country and then list by state and then list all cities using geonames database. Get all places(geoinformation) using this code.">
<meta property="fb:admin" content="595761942">
<meta property="fb:app_id" content="124948124275250">

<meta itemprop="name" content="Get Country State City Hierarchy - Get list of country, state, city using GeoNames">
<meta itemprop="description" content="Get a hierarchy of country, state, city using geonames database. List by country and then list by state and then list all cities using geonames database. Get all places(geoinformation) using this code.">
<meta itemprop="image" content="http://vikku.info/programming/images/source-code.png">

<link rel="stylesheet" type="text/css" href="http://vikku.info/programming/css/pstyle.css">
<script type="text/javascript" src="http://w.sharethis.com/button/p.js" async=""></script><script type="text/javascript" id="async-buttons" src="http://w.sharethis.com/button/async-buttons.js"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=124948124275250"></script><script type="text/javascript" src="http://vikku.info/programming/js/sh/shCore.js"></script>
<script type="text/javascript" src="http://vikku.info/programming/js/sh/shBrushJScript.js"></script>
<script type="text/javascript" src="http://vikku.info/programming/js/sh/shBrushPhp.js"></script>
<link type="text/css" rel="stylesheet" href="http://vikku.info/programming/js/sh/shCoreDefault.css">
<script type="text/javascript">SyntaxHighlighter.all();</script>
<link rel="stylesheet" id="coToolbarStyle" href="chrome-extension://cjabmdjcfcfdmffimndhafhblfmpjdpe/toolbar/styles/placeholder.css" type="text/css"><script type="text/javascript" id="cosymantecbfw_removeToolbar">(function () {				var toolbarElement = {},					parent = {},					interval = 0,					retryCount = 0,					isRemoved = false;				if (window.location.protocol === 'file:') {					interval = window.setInterval(function () {						toolbarElement = document.getElementById('coFrameDiv');						if (toolbarElement) {							parent = toolbarElement.parentNode;							if (parent) {								parent.removeChild(toolbarElement);								isRemoved = true;								if (document.body && document.body.style) {									document.body.style.setProperty('margin-top', '0px', 'important');								}							}						}						retryCount += 1;						if (retryCount > 10 || isRemoved) {							window.clearInterval(interval);						}					}, 10);				}			})();</script><link rel="stylesheet" type="text/css" href="http://w.sharethis.com/button/css/buttons.e80452d5e7cc382dad89d10f50bde247.css"><script type="text/javascript" src="http://count-server.sharethis.com/v2.0/get_counts?url=http%3A%2F%2Fvikku.info%2Fprogramming%2Fgeodata%2Fgeonames-get-country-state-city-hierarchy.htm&amp;cb=stButtons.processCB&amp;wd=true"></script><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&amp;amp;subset=cyrillic" rel="stylesheet"><iframe id="stSegmentFrame" name="stSegmentFrame" frameborder="0" scrolling="no" width="0px" height="0px" sandbox="allow-scripts allow-same-origin" style="display:none;"></iframe><script type="text/javascript" src="http://www.geonames.org/childrenJSON?geonameId=6295630&amp;callback=listPlaces&amp;style=long&amp;noCacheIE=1522550840251" id="YJscriptId1"></script><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_customer_chat_bounce_in{animation-duration:250ms;animation-name:fb_bounce_in}.fb_customer_chat_bounce_out{animation-duration:250ms;animation-name:fb_fade_out}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}.fb_mobile_overlay_active{background-color:#fff;height:100%;overflow:hidden;position:fixed;visibility:hidden;width:100%}@keyframes fb_fade_out{from{opacity:1}to{opacity:0}}@keyframes fb_bounce_in{0%{opacity:0;transform:scale(.8, .8);transform-origin:100% 100%}10%{opacity:.1}20%{opacity:.2}30%{opacity:.3}40%{opacity:.4}50%{opacity:.5}60%{opacity:.6}70%{opacity:.7}80%{opacity:.8;transform:scale(1.03, 1.03)}90{opacity:.9}100%{opacity:1;transform:scale(1, 1)}}</style><script type="text/javascript" src="http://www.geonames.org/childrenJSON?geonameId=6255146&amp;callback=listPlaces&amp;style=long&amp;noCacheIE=1522550842754" id="YJscriptId2"></script></head><div id="warning-container"><i data-reactroot=""></i></div>
<body><div id="StayFocusd-infobar" style="display: none; top: 0px;">
    <img src="chrome-extension://laankejkbhbdhmipfmgcngdelahlfoji/common/img/eye_19x19_red.png">
    <span id="StayFocusd-infobar-msg"></span>
    <span id="StayFocusd-infobar-links">
        <a id="StayFocusd-infobar-never-show">hide forever</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a id="StayFocusd-infobar-hide">hide once</a>
    </span>
</div>

<div class="main">
<style type="text/css">
.contents { background-color:#EDF4F8; padding:10px; border:2px dashed #C2DAE7; width: 70%; margin: 0 auto; }
.contents p span { display:block;float:left; margin-left:0px; width:110px; color:gray; font-weight:bold;}
.contents p select {float:left; margin-left:90px;}
.contents p {clear:both;overflow:hidden;}
</style>

<script type="text/javascript" src="js/geodata-jsr-class.js"></script>







<form action="citystate.php" method="POST">
<div class="contents">

<p><span>Continent:</span> <select name="continent" id="continent" onchange="getplaces(this.value,'country');">
						
<option value="">Select</option><option value="6255146">Africa</option><option value="6255152">Antarctica</option><option value="6255147">Asia</option><option value="6255148">Europe</option><option value="6255149">North America</option><option value="6255151">Oceania</option><option value="6255150">South America</option></select>
</p>

<p><span>Country:</span> <select name="country" id="country" onchange="getplaces(this.value,'province');">
						
<option value="">Select</option><option value="2589581">Algeria</option><option value="3351879">Angola</option><option value="2395170">Benin</option><option value="933860">Botswana</option><option value="2361809">Burkina Faso</option><option value="433561">Burundi</option><option value="3374766">Cabo Verde</option><option value="2233387">Cameroon</option><option value="239880">Central African Republic</option><option value="2434508">Chad</option><option value="921929">Comoros</option><option value="2260494">Congo</option><option value="203312">DR Congo</option><option value="223816">Djibouti</option><option value="357994">Egypt</option><option value="2309096">Equatorial Guinea</option><option value="338010">Eritrea</option><option value="337996">Ethiopia</option><option value="2400553">Gabon</option><option value="2413451">Gambia</option><option value="2300660">Ghana</option><option value="2420477">Guinea</option><option value="2372248">Guinea-Bissau</option><option value="2287781">Ivory Coast</option><option value="192950">Kenya</option><option value="932692">Lesotho</option><option value="2275384">Liberia</option><option value="2215636">Libya</option><option value="1062947">Madagascar</option><option value="927384">Malawi</option><option value="2453866">Mali</option><option value="2378080">Mauritania</option><option value="934292">Mauritius</option><option value="2542007">Morocco</option><option value="1036973">Mozambique</option><option value="3355338">Namibia</option><option value="2440476">Niger</option><option value="2328926">Nigeria</option><option value="49518">Rwanda</option><option value="2245662">Senegal</option><option value="241170">Seychelles</option><option value="2403846">Sierra Leone</option><option value="51537">Somalia</option><option value="953987">South Africa</option><option value="7909807">South Sudan</option><option value="366755">Sudan</option><option value="934841">Swaziland</option><option value="2410758">São Tomé and Príncipe</option><option value="149590">Tanzania</option><option value="2363686">Togo</option><option value="2464461">Tunisia</option><option value="226074">Uganda</option><option value="895949">Zambia</option><option value="878675">Zimbabwe</option><option value="1024031">Mayotte</option><option value="935317">Réunion</option><option value="3370751">Saint Helena</option><option value="2461445">Western Sahara</option></select>
</p>

<p><span>State / Provice:</span> <select name="province" id="province" onchange="getplaces(this.value,'region')">
<option value=""></option>
</select>
</p>

<p><span>County / Region:</span> <select name="region" id="region" onchange="getplaces(this.value,'city')">
<option value=""></option>
</select>
</p>

<p><span>City:</span> <select name="city" id="city">
<option value=""></option></select>
</p>
Enter Your Contact<input type="text" name="Contact" id="contact" placeholder="Enter Your contact number">
<br>
<input type="submit" name="Submit" class="btn btn-light" id="submit">
</div>
</form>


<script type="text/javascript">
var whos=null;
function getplaces(gid,src)
{	
	whos = src
	
//	var  request = "http://ws.geonames.org/childrenJSON?geonameId="+gid+"&callback=getLocation&style=long";
	var request = "http://www.geonames.org/childrenJSON?geonameId="+gid+"&callback=listPlaces&style=long";
	aObj = new JSONscriptRequest(request);
	aObj.buildScriptTag();
	aObj.addScriptTag();	
}

function listPlaces(jData)
{
	counts = jData.geonames.length<jData.totalResultsCount ? jData.geonames.length : jData.totalResultsCount
	who = document.getElementById(whos)
	who.options.length = 0;
	
	if(counts)who.options[who.options.length] = new Option('Select','')
	else who.options[who.options.length] = new Option('No Data Available','NULL')
			
	for(var i=0;i<counts;i++)
		who.options[who.options.length] = new Option(jData.geonames[i].name,jData.geonames[i].geonameId)

	delete jData;
	jData = null		
}

window.onload = function() { getplaces(6295630,'continent'); }
</script>

<!--http://gis.stackexchange.com/questions/603/is-a-country-state-city-database-available-->
<!-- by line -->


<!-- facebook comments -->

<!-- end facebook comments -->

</div>
<!-- end div main -->

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "d5d04ed8-04d1-4c39-9336-46d4c4ce9d65", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<!-- Google Analytics -->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-5776689-2");
pageTracker._initData();
pageTracker._trackPageview();
</script>


<div id="fb-root"></div><script id="wappalyzer" src="chrome-extension://gppongmhjkpfnbhagpmjfkannfbllamg/js/inject.js"></script><div id="stcpDiv" style="position: absolute; top: -1999px; left: -1988px;">ShareThis Copy and Paste</div><div id="stwrapper" class="stwrapper stwrapper5x stwrapper5x" style="display: none;"><iframe allowtransparency="true" id="stLframe" class="stLframe" name="stLframe" frameborder="0" scrolling="no" src="http://edge.sharethis.com/share5x/index.07aa22477eb34a270569a00cbffd8b2f.html"></iframe></div><div id="stOverlay" onclick="javascript:stWidget.closeWidget();"></div></body><div id="coFrameDiv" style="height:0px;display:none;"><iframe id="coToolbarFrame" src="chrome-extension://cjabmdjcfcfdmffimndhafhblfmpjdpe/toolbar/placeholder.html" style="height: 0px; width: 100%; display: none;"></iframe></div>