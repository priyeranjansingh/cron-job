to run cron job server with browser url i.e like http://www.test.com/abc.php
then cron path add this below line
wget -q -O /dev/null "browser url as mention" > /dev/null 2>&1

you can replace browser url with your own site url
