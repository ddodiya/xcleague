<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Indian Paragliding XC League</title>
  <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
  </script>
<style type="text/css">
#tabs .ui-tabs-panel {
    height: 510px;
    overflow: auto;
	</style>

</head>
<body>
<h1>Indian Paragliding XC League</h1> 

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">All Time</a></li>
    <li><a href="indians2015s.html">Season 2015</a></li>
    <li><a href="indians2015.html">Year 2015</a></li>
    <li><a href="content1.html">Season 2015 All Pilots</a></li>
    <li><a href="content2.html">Year 2015 All Pilots</a></li>
    <li><a href="content3.html">Season 2014</a></li>
    <li><a href="content4.html">Latest Flights</a></li>
    <li><a href="content5.html">World XC League Year 2015</a></li>

  </ul>
<table id="tabs">

<tr>
<td>
  <div id="tabs-1">
<object data=http://www.paraglidingforum.com/leonardo/league/IN/alltimes/brand:all,cat:1,class:all,xctype:all,club:all&fltr=none width="800" height="500">
 <embed src=http://www.paraglidingforum.com/leonardo/league/IN/alltimes/brand:all,cat:1,class:all,xctype:all,club:all&fltr=none width="800" height="500"> </embed> Error: Embedded data could not be displayed. </object>
</td>
<td>
<h3>Sponsored by:</h3>
<img src="https://lh3.googleusercontent.com/CotyAUOSFcj_Ksy2gjgNLxuOV9cSrauIIA-_mDhpdpQ=w189-h142-p-no"/>
</td>
</table>
  </div>
</div>
  <a href="http://www.paraglidingforum.com/leonardo/tracks/world/alltimes/">Upload your flight log on Paragliding Forum Leonardo Server to participate</a> </div> 
 
</body>
</html>
