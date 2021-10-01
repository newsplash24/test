<!DOCTYPE html>
<html>
<head>
<title>iOS Automatic Deep Linking</title>
<script>
//see if our window is active
window.isActive = true;
$(window).focus(function() { this.isActive = true; });
$(window).blur(function() { this.isActive = false; });

function startMyApp(){
document.location = 'cashminute://firereceipt/success/CM746403234';

setTimeout( function(){
if (window.isActive) {
document.location = 'https://www.cashminute.com/firereceipt/success/CM746403234';
}
}, 1000);
}
</script>
<style type="text/css">
.twitter-detect {
display: none;
}
</style>
</head>
<body onload="startMyApp()">
<p>Website content.</p>
</body>
</html>
