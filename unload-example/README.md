# unload-example

    php -S localhost:8888 -t .

Then open http://localhost:8888. This implemenation is example to send unload event when delta is too short.

```
-> % php -S 0.0.0.0:8888 -t .
PHP 7.1.3 Development Server started at Mon Jun  5 15:28:56 2017
Listening on http://0.0.0.0:8888
Document root is /Users/masked/src/github.com/suzuken/unload-example
Press Ctrl-C to quit.
[Mon Jun  5 15:28:58 2017] 127.0.0.1:51212 [200]: /
[Mon Jun  5 15:28:58 2017] 127.0.0.1:51214 [200]: /buster.html
[Mon Jun  5 15:28:58 2017] 127.0.0.1:51216 [404]: /favicon.ico - No such file or directory
array(2) {
  ["delta"]=>
  string(3) "101"
  ["location"]=>
  string(22) "http://localhost:8888/"
}
[Mon Jun  5 15:28:58 2017] 127.0.0.1:51218 [200]: /p.php

```

## LICENSE

Public Domain
