<!DOCTYPE html>
<html lang="en">
<head>
<title>Cover Creator</title>
<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
<style>
    body{
        margin: 0; /* Remove default margin */
    }
    iframe{      
        display: block;  /* iframes are inline by default */   
        height: 100vh;  /* Set height to 100% of the viewport height */   
        width: 100vw;  /* Set width to 100% of the viewport width */     
        border: none; /* Remove default border */
        background: lightyellow; /* Just for styling */
    }
</style>
</head>
<body>
    <iframe src="{{ $url }}"></iframe>
</body>
</html>