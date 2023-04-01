
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="image/x-icon" href="http://www.latlong.net/favicon.ico" />
    
    <link rel="stylesheet" href="http://www.latlong.net/css/pure-min.css" />
        
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
    
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1008641-85', 'auto');
  ga('send', 'pageview');

</script>

<title>Convert Lat Long to Address Show on Map</title> 
<meta name="description" content="Convert latitude longitude to readable address on map, show where is lat long located on map." />

</head>
<body>

<div class="header">
    <div class="topnav" id="top">

        <a href="http://www.latlong.net/" title="Latitude and Longitude Finder" class="logo">
            <img src="http://www.latlong.net/logo.png" width="170" height="36" alt="lat long logo" />
        </a>

        <div>
            <ul id="navigation" class="slimmenu">
                <li><a href="http://www.latlong.net/" title="Lat Long Homepage">Home</a></li>
                <li><a href="http://www.latlong.net/convert-address-to-lat-long.html" title="Convert Address to Lat Long">Address to Lat Long</a></li>
                <li><a href="http://www.latlong.net/Show-Latitude-Longitude.html" title="Convert lat long to address map">Lat Long to Address</a></li>
                <li><a href="http://www.latlong.net/lat-long-dms.html" title="Lat long to Degrees Minutes Seconds Converter">Lat Long to DMS</a></li>
                <li><a href="http://www.latlong.net/lat-long-utm.html" title="Lat long to UTM Converter">Lat Long to UTM</a></li>

                <li><a href="http://www.latlong.net/add-place.html" title="Add Place">Add Place</a></li>
                <li><a href="http://www.latlong.net/latest-places.html" title="Latest Places">Latest Places</a></li>
                <li><a href="http://www.latlong.net/countries.html" title="Countries List">Country List</a></li> 

            </ul>

        </div>        
    </div>
</div>
<div class="content">
    <div class="main">

        <h1>Convert Lat and Long to Address</h1>

        <p>Type the lat and long coordinate values and press Convert button. Reverse geocoded address will shown on the map below.</p>
        
<div class="pure-g">            
    <div class="pure-u-1 pure-u-md-2-3">
                
        <form class="pure-form graybox padding10" id="latlongform">

            <div class="pure-g resultlatlong">
                <div class="pure-u-1-2 pure-u-md-1-2">
            
            <label for="lat">Latitude</label>
            <input type="text" name="lat" id="lat" placeholder="lat" required /><br />
            <small>Example: 39.920770</small>
                </div>
            
                <div class="pure-u-1-2 pure-u-md-1-2">
            <label for="lng">Longitude</label>
            <input type="text" name="lng" id="lng" placeholder="long" required /> 
            <button title="Show Lat Long converted address on Map" class="pure-button pure-button-primary" style="margin-top:4px;">Convert</button>
                </div>
                            
            </div>
            
            <label for="address">Reverse geocoded address:</label>
            <textarea rows="2" id="address" placeholder="Address from lat long"></textarea>
            <br />
            <div class="social">
<div id="fb-root"></div>
<div class="fb-like" data-send="true" data-layout="button_count" style="vertical-align:super;" data-width="100" data-show-faces="false"></div>
<div class="g-plusone" data-size="medium"></div>
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>

</div>            
        </form>
            </div>
    <div class="pure-u-1 pure-u-md-1-3 centered">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- latlong -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-0076284559750022"
     data-ad-slot="5045721832"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>  
    
        </div>
        
        <div id="latlongmap" style="height:450px;">
        </div>
        
        <div class="pure-g">            
            <div class="pure-u-1 pure-u-md-1-3">

                <h3 class="titleh3">Lat Long</h3>
                <span id="latlngspan" class="coordinatetxt">0,0</span>

            </div>
            
            <div class="pure-u-1 pure-u-md-1-3">

                <h3 class="titleh3">GPS Coordinates</h3>
                <span id="dms-lat" class="coordinatetxt">0</span> 
                <span id="dms-lng" class="coordinatetxt">0</span>

            </div>

            <div class="pure-u-1 pure-u-md-1-3">

                <h3 class="titleh3">Map Mouse Over Location</h3>
                <span id="mlat" class="coordinatetxt">0,0</span>

            </div>
        </div>        
       
        <div class="margin10">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- LatlongResponsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0076284559750022"
     data-ad-slot="2468952231"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>        
        <form class="pure-form">
            <label for="coordinatesurl">Share this location</label>
            <input type="text" id="coordinatesurl" readonly="readonly" style="width:75%;max-width:460px;" onclick="this.select();" />

        </form>
        
        <p>
            View latitude and longitude coordinates on the map. <strong>Convert lat &amp; long to address</strong>.
            Note that the tool will try to
            <em>reverse geocode the lat long</em>, if it failed, only lat long will shown on the map.
        </p>
          
        <div class="g-page" data-href="//plus.google.com/u/0/115844319625582900743" data-layout="landscape" data-showtagline="false" data-rel="publisher"></div><h3>Recent Comments</h3>
<div class="commentdiv"><span class="commentauthor">Kevin R</span> <span class="date">2015-12-08 13:30:44</span> <p>Useful tool to manually verify Lat/Lon from data derived from the GoogleMaps API - Much appreciated,</p>
</div>
<div class="commentdiv"><span class="commentauthor">Kiran Panchal</span> <span class="date">2015-09-14 18:41:54</span> <p>very fast searching location with decimal value and get fast exectly loaction.fast clear picture.<br />
<br />
great tool</p>
</div>
<div class="commentdiv"><span class="commentauthor">Karl Fink</span> <span class="date">2015-09-13 20:37:09</span> <p>Maybe you should but a key for the people who don't know how to use it. For example. N=     E=    W= -  S= - . N and E is positive and S and W is negative. EX: 15 N, 75 E would be Latitude 15 Longitude 75 ( they are positive so they don't need anything.) EX: 40 S, 70 W would be Latitude -40 Longitude -70 ( they are negative so they need the minus ) Put key so that people who didn't or doesn't understand ( like me ) know how to use it. Thank You.</p>
</div>
<div class="commentdiv"><span class="commentauthor">Hunter</span> <span class="date">2015-09-08 21:33:25</span> <p>This tool is great for school i recommend it</p>
</div>
<div class="commentdiv"><span class="commentauthor">Evan</span> <span class="date">2015-08-10 17:06:03</span> <p>Why is the latitude function defaulted to "east"?  I put in a straightforward west latitude identifier and the address showed up in Kazakhstan.  I had to add 180 to the latitude to get it toe the appropriate location in North America.</p>
</div>
<div class="commentdiv"><span class="commentauthor">Kels</span> <span class="date">2015-07-31 07:41:38</span> <p>Very good tool. Thanks!!:)</p>
</div>
<div class="commentdiv"><span class="commentauthor">Muhammed Riyas</span> <span class="date">2015-07-28 05:17:55</span> <p>very helpfull..... thanks...</p>
</div>
<div class="commentdiv"><span class="commentauthor">joshua</span> <span class="date">2015-07-27 16:58:01</span> <p>how can i integrate it in my webpage. <br />
 am making some app where one can enter the long and latitude and the location is shown.<br />
is there any provision for developers .<br />
any help will be highly appreciated, thanks</p>
</div>
<div class="commentdiv"><span class="commentauthor">khami</span> <span class="date">2015-07-13 18:04:58</span> <p>it is a very good tool <br />
respect for the small screen window of the viewed map</p>
</div>
<div class="commentdiv"><span class="commentauthor">James</span> <span class="date">2015-07-01 14:48:10</span> <p>Share link will not display the map... anyone know why this might be happening in IE11?</p>
</div>
<div class="commentdiv"><span class="commentauthor">Manoj</span> <span class="date">2015-05-22 18:29:16</span> <p>Great tool. Can you please mention how to write a function to extract address for many coordinates in a google spreadsheet?</p>
</div>
<div class="commentdiv"><span class="commentauthor">SAM</span> <span class="date">2015-05-06 07:15:38</span> <p>Great tool..</p>
</div>
<div class="commentdiv"><span class="commentauthor">Fred</span> <span class="date">2015-05-02 23:59:37</span> <p>Awesome site. Now how do I get the Lat/Long for my lot to establish property lines?<br />
Neighbor dispute.</p>
</div>
<div class="commentdiv"><span class="commentauthor">Amit Srivastava</span> <span class="date">2015-04-21 01:22:53</span> <p>Which api are you using from Google to get this much clarity? Staticmaps is limited if you use scale of 1, 2 so you would not get this much clarity.</p>
</div>
<div class="commentdiv"><span class="commentauthor">Dennis</span> <span class="date">2015-04-12 20:38:23</span> <p>To Joye.  You must put a minus in front of long to get North America</p>
</div>
<div class="commentdiv"><span class="commentauthor">Joye</span> <span class="date">2015-04-09 15:34:45</span> <p>Why is it when I put in the latitude of longitude of a location in the US, I get Qarqan, Bayingol, Xinjiang, China? I put the address in to get the latitude and longitude but when I reverse it and put in the latitude and longitude to get the address, I get China.</p>
</div>
<div class="commentdiv"><span class="commentauthor">PUTU KOCH</span> <span class="date">2015-03-31 16:55:15</span> <p>really;  great amazing. world is too short.</p>
</div>
<div class="commentdiv"><span class="commentauthor">vinod vaidya</span> <span class="date">2015-03-31 12:38:51</span> <p>wow amazing...got right latitude and longitue of my place...hats off</p>
</div>
<div class="commentdiv"><span class="commentauthor">mark</span> <span class="date">2015-03-27 03:22:53</span> <p>I run a soil pulling business. Lat Long saves me time and money. Not only shows me exactly where field is but, with zoom, shows me what town or towns it is close to determine my route for the day. Thank you.</p>
</div>
<div class="commentdiv"><span class="commentauthor">Dawn</span> <span class="date">2015-03-16 22:19:13</span> <p>Really nice locator- but could I get the actual address?</p>
</div>
<div class="commentdiv"><span class="commentauthor">JuliB</span> <span class="date">2015-03-14 00:17:35</span> <p>Hi. Well I see the arrow indicating the property, but how can I get directions to it? I apologize for my ignorance. Thank you.</p>
</div>
<div class="commentdiv"><span class="commentauthor">C K Nandakumar, Abu Dhabi</span> <span class="date">2015-03-11 12:40:33</span> <p>Excellent site !<br />
<br />
If you can provide the Zoom level also as a parameter, it would be amazing.<br />
<br />
Thanks</p>
</div>
<div class="commentdiv"><span class="commentauthor">zlx.cc</span> <span class="date">2015-02-18 11:35:52</span> <p>very helpful to extract EXIF informations from photos to find out where they have been taken exaclty :-)<br />
Thanks a lot, this is a great tool & fantastic help to me!</p>
</div>
<div class="commentdiv"><span class="commentauthor">David F Mayer</span> <span class="date">2015-02-15 20:02:37</span> <p>How about putting the FORMAT of the Latitude and Longitude at the top of the page? There are numerous formats and you don't tell which one you accept. See http://www.geomidpoint.com/latlon.html<br />
<br />
Signed degrees format (DDD.dddd) 41.25 and -120.9762<br />
DMS + compass direction formats degrees, minutes, and seconds<br />
Degrees minutes seconds formats (DDD MM SS + compass direction) 41 25 01N and 120 58 57W<br />
Degrees minutes formats (DDD MM + compass direction) N41 25.117 and W120 58.292<br />
Degrees only formats (DDD + compass direction)  N41.092 and W120.8362</p>
</div>
<div class="commentdiv"><span class="commentauthor">ks206</span> <span class="date">2015-02-11 08:27:29</span> <p>I would like to put just one coordinate and see the line over map. Is 'that possable for you ? :)</p>
</div>
<div class="commentdiv"><span class="commentauthor">Nathi</span> <span class="date">2015-01-31 12:04:01</span> <p>Yes, It's very helpfull.I use it for my site's location with Lat/Long ,Very-Very great link. Thanks</p>
</div>
<div class="commentdiv"><span class="commentauthor">Orhan Türk</span> <span class="date">2015-01-30 14:45:03</span> <p>Very good web site</p>
</div>
<div class="commentdiv"><span class="commentauthor">Prasad</span> <span class="date">2015-01-29 10:10:01</span> <p>Nice site to locate alt and long</p>
</div>
<div class="commentdiv"><span class="commentauthor">Stranger</span> <span class="date">2015-01-29 00:07:02</span> <p>This is close but not right on. I noticed that you can move the pin around. If I move it to a more exact spot. Will it come up there or in the original spot?</p>
</div>
<div class="commentdiv"><span class="commentauthor">8--D</span> <span class="date">2015-01-26 14:28:23</span> <p>Oh this...this is great ((l))</p>
</div>
<div class="commentdiv"><span class="commentauthor">Joey</span> <span class="date">2015-01-23 06:20:36</span> <p>Hey this was really helpfull , but what if i have a thousand lattitude and longtitude points ..... am using it for a survey project<br />
\Thanks in advance.....:-)</p>
</div>
<div class="commentdiv"><span class="commentauthor">Katie</span> <span class="date">2015-01-21 20:26:08</span> <p>How do you get the numbers to come out with N degree <br />
27.982198, -82.711098 This is what I have to try to get it to look like http://www.pinterest.com/pin/251568329161512146/</p>
</div>
<div class="commentdiv"><span class="commentauthor">Tim</span> <span class="date">2015-01-20 07:19:42</span> <p>Very Helpfull.............</p>
</div>
<div class="commentdiv"><span class="commentauthor">Deb</span> <span class="date">2015-01-17 07:51:16</span> <p>Thank You, This allows me to see where someone is stranded. And stuck in a sailboat.</p>
</div>
<div class="commentdiv"><span class="commentauthor">COLIN</span> <span class="date">2015-01-13 03:32:57</span> <p>NICE WORK GUYS!!</p>
</div>
<div class="commentdiv"><span class="commentauthor">Lat Long</span> <span class="date">2015-01-07 23:42:05</span> <p>@Abdulkader, sorry we do not have an android app yet, <br />
Thank you.<br />
<br />
@Carrie, city limits are not included in maps api, if it will be, we will try to calculate  if a location in a city limit or not. <br />
Thank you.</p>
</div>
<div class="commentdiv"><span class="commentauthor">Carrie</span> <span class="date">2015-01-05 19:23:45</span> <p>I have the latitude and longitude, and I need to know if the location is within the city limits.  Is it possible to find this information out using this site?</p>
</div>
<div class="commentdiv"><span class="commentauthor">Abdulkader</span> <span class="date">2015-01-03 19:46:32</span> <p>Is there in android app for this great tool !?</p>
</div>
<div class="commentdiv"><span class="commentauthor">naga</span> <span class="date">2015-01-01 11:14:29</span> <p>Great tool, thanks!!</p>
</div>
<div class="commentdiv"><span class="commentauthor">naga mallesh</span> <span class="date">2015-01-01 09:36:38</span> <p>very usefull tool and so easy<br />
Thanque</p>
</div>
<div class="commentdiv"><span class="commentauthor">VM</span> <span class="date">2014-12-26 07:30:38</span> <p>Hi,<br />
<br />
Thanks for the great tool. Is it possible to increase the map view size? We have large margins on page both left and right side.</p>
</div>
<div class="commentdiv"><span class="commentauthor">pandian.a</span> <span class="date">2014-12-21 10:20:13</span> <p>very useful, thanks a lot</p>
</div>
<div class="commentdiv"><span class="commentauthor">c</span> <span class="date">2014-12-18 21:22:38</span> <p>This is a great tool . Amazing! !</p>
</div>
<div class="commentdiv"><span class="commentauthor">Erik</span> <span class="date">2014-12-16 22:57:20</span> <p>Great tool, thanks!!</p>
</div>

<form class="pure-form pure-form-stacked graybox" id="frmcomment">
    <fieldset>
        <legend>Share Your Comment</legend>
        
        <label for="commentname">Name</label>
        <input id="commentname" name="commentname" type="text" class="pure-input-1-2" placeholder="Your name" />
        
        <label for="commenttext">Comment</label>
    <textarea id="commenttext" name="commenttext" required class="pure-input-1" rows="10" cols="24"></textarea>

    <input type="hidden" name="yid" value="lat-long-address" />
    
        <button type="submit" class="pure-button pure-button-primary" id="sendcomment">Send</button>
    </fieldset>
</form>

<div id="tagmessage"></div>
        
    </div>
</div>

<div class="footer">

 <p>&copy; 2012-2016 www.LatLong.net | 
            <a href="http://www.latlong.net/privacy.php" title="Privacy">Privacy</a> | 
            <a href="http://www.latlong.net/contact.php" title="Contact">Contact</a> | 
            <a href="https://plus.google.com/+LatlongNet" rel="publisher">Google+</a><br />
            We do not guarantee the accuracy of the given coordinates of the places in our database. Please use latlong.net at your own risk.</p> 
 
</div>
<div class="gotop" id="scrollUp">
    <a href="#top" title="Scroll To Top">&#8593; Scroll To Top</a>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://www.latlong.net/js/jquery.slimmenu.min.js"></script>
<script>

$(document).ready(function() {

$('#navigation').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: 'Latitude Longitude',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
});
  
  
  var form = $('#frmcomment');
  var submit = $('#sendcomment');

  form.on('submit', function(e) {
        e.preventDefault();
    $.ajax({
      url: '/_addcomment.php',
      type: 'POST',
      cache: false,
      data: form.serialize(), 
      beforeSend: function(){
        submit.val('Sending...').attr('disabled', 'disabled');
      },
      success: function(data){
       
        form.trigger('reset');
        submit.val('Gönder').removeAttr('disabled');
        
        $('#tagmessage').removeClass('success').removeClass('warning').addClass('success').html('Your comment saved successfully and will publish after approval.').slideDown('slow').delay(5000).slideUp();
           
      },
      error: function(e){
        $('#tagmessage').removeClass('success').removeClass('warning').addClass('warning').html('There was an error, try again later.').slideDown('slow').delay(5000).slideUp();

        
      }
    });
  });
  
  $(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.gotop').fadeIn();
		} else {
			$('.gotop').fadeOut();
		}
	});
	
	$('.gotop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
        
    });

$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top 
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script> if (window.top !== window.self) { window.top.location.replace(window.self.location.href); }</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="text/javascript">
$(document).ready(function() {
    
    $(document).on('submit','#latlongform',function(){
        showlatlong(); 
        return false;
    });
});
</script>

<script type="text/javascript">
  
    var map;
    var marker;
    var infowindow;
    var geocoder;
    
    function initialize() {
        var latlng = new google.maps.LatLng(1.10, 1.10);
        var myOptions = {
            zoom: 5,
            center: latlng,
            panControl: true,
            scaleControl: true,
            scrollwheel: false,
            overviewMapControl: true,
            overviewMapControlOptions: { opened: true },
            mapTypeId: google.maps.MapTypeId.HYBRID 
        };
        map = new google.maps.Map(document.getElementById("latlongmap"),
        myOptions);
        marker = new google.maps.Marker({
            position: latlng, 
            map: map
        });
  
  geocoder = new google.maps.Geocoder();
  
        map.streetViewControl=false;
        infowindow = new google.maps.InfoWindow({
                content: "(1.10, 1.10)"
            });
            
        google.maps.event.addListener(map, 'click', function(event) {
            
            marker.setPosition(event.latLng);    
            var yeri = event.latLng;            
            var latlongi = "(" + yeri.lat().toFixed(6) + " , " +
                + yeri.lng().toFixed(6) + ")";
        
        
            infowindow.setContent(latlongi);
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        
            if (infowindow) {
                infowindow.close();
            }
            infowindow.open(map,marker);
            document.getElementById('lat').value=yeri.lat().toFixed(6);
            document.getElementById('lng').value=yeri.lng().toFixed(6);
            document.getElementById('latlngspan').innerHTML =  latlongi;
            document.getElementById('coordinatesurl').value = 'http://www.latlong.net/c/?lat='
                        + yeri.lat().toFixed(6) + '&long='
                        + yeri.lng().toFixed(6);
           dec2dms();
        });
    
        google.maps.event.addListener(map, 'mousemove', function(event) {
            var yeri = event.latLng;
            document.getElementById("mlat").innerHTML = "(" + yeri.lat().toFixed(6) + ", " +yeri.lng().toFixed(6)+ ")";
        });
    }

    function showlatlong()
    {
        var latlong = new google.maps.LatLng(document.getElementById("lat").value, document.getElementById("lng").value);
        map.setCenter(latlong);
        marker.setPosition(latlong);
        map.setZoom(12);
        
        var latlongi = "(" + latlong.lat().toFixed(6) + " , " +
            + latlong.lng().toFixed(6) + ")";
        document.getElementById('latlngspan').innerHTML =  latlongi;
        document.getElementById('coordinatesurl').value = 'http://www.latlong.net/c/?lat='
                        + latlong.lat().toFixed(6) + '&long='
                        + latlong.lng().toFixed(6);
                
        infowindow.setContent(latlongi);
        
        if (infowindow) {
            infowindow.close();
        }
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
        dec2dms();
        codeLatLng(latlong);
    }

function codeLatLng(latlng) {
        geocoder.geocode({'latLng': latlng}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
              marker.setPosition(latlng);
              infowindow.setContent(results[1].formatted_address);
              infowindow.open(map, marker);
              $('#address').val(results[1].formatted_address);
            } else {
              alert('No results found');
            }
          } else {
            alert('Geocoder failed due to: ' + status);
          }
        }
);
      }
function dec2dms( )
    {
        var mylat = document.getElementById("lat").value;
        var mylng = document.getElementById("lng").value;
        var scriptUr1 = "dec2dms.php?lat=" + mylat;
        var scriptUr2 = "dec2dms.php?long=" + mylng;
        $.ajax({
            url: scriptUr1,
            type: 'get',
            dataType: 'html',
            async: true,
            success: function(data) {
                result = data;
                $('#dms-lat').html(result);
            }
        });
        $.ajax({
            url: scriptUr2,
            type: 'get',
            dataType: 'html',
            async: true,
            success: function(data) {
                result = data;
                $('#dms-lng').html(result);
            }
        });

    }
function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?sensor=false&' +
                'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;

</script>

</body>
</html>
