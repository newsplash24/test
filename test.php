<?php
 header("Location: MyApp://somestring;")(
?>
<html>
 <head>
  <meta http-equiv="Refresh" content="0; MyApp://somestring" />
  <title>Opening App...</title>
  <script>
   function openApp() {
    window.location.href = "MyApp://somestring";
   }
  </script>
 </head>
 <body onload="openApp();">
  <a href="MyApp://somestring">Click here if app doesn't open...</a>
 </body>
</html>
