<?php
header("X-Frame-Options: DENY");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<h3>top.location matter</h3>
<p>sandbox: child.html</p>
<p>child.html calls frame.html which uses top.location</p>
<iframe src="http://localhost:8888/child.html" sandbox="allow-scripts allow-forms allow-pointer-lock allow-popups allow-same-origin" frameborder="0" width="0" height="0"></iframe>
<br>
This cause output something like:
<br>

> Unsafe JavaScript attempt to initiate navigation for frame with URL 'http://localhost:8888/' from frame with URL 'http://localhost:8888/frame.html'. The frame attempting navigation of the top-level window is sandboxed, but the flag of 'allow-top-navigation' or 'allow-top-navigation-by-user-activation' is not set.

<h4>read top.locaton properties</h4>

<p>in iframe sandbox</p>
<iframe src="http://localhost:8888/readtop.html" sandbox="allow-scripts allow-forms allow-pointer-lock allow-popups allow-same-origin" frameborder="0"></iframe>

<p>normal iframe</p>
<iframe src="http://localhost:8888/readtop.html" frameborder="0"></iframe>

<hr>

<h3>a href behavior in iframe sandbox</h3>
<p>sandbox: image.html</p>
<iframe src="http://localhost:8888/image.html" sandbox="allow-scripts allow-forms allow-pointer-lock allow-popups allow-same-origin" frameborder="0"></iframe>

<p>sandbox: image.html (not same origin)</p>
<iframe src="http://localhost:8887/image.html" sandbox="allow-scripts allow-forms allow-pointer-lock allow-popups allow-same-origin" frameborder="0"></iframe>

<p>sandbox: top_image.html</p>
<iframe src="http://localhost:8888/top_image.html" sandbox="allow-scripts allow-forms allow-pointer-lock allow-popups allow-same-origin" frameborder="0"></iframe>

<hr>
<h3>normal iframe</h3>
<p>not sandbox: image.html</p>
<iframe src="http://localhost:8888/image.html" frameborder="0"></iframe>

</body>
</html>
