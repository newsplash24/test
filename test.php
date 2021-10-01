<?php
 header("Location: cashminute://somestring;")(
?>
<html>
 <head>
  <meta http-equiv="Refresh" content="0; cashminute://somestring" />
  <title>Opening App...</title>
  <script>
   function openApp() {
    window.location.href = "cashminute://somestring";
   }
  </script>
 </head>
 <body onload="openApp();">
  <a href="cashminute://somestring">Click here if app doesn't open...</a>
 </body>
</html>
