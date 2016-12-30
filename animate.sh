#!/bin/sh
cd /home/wwwroot/www.reactshare.cn/air/images
convert -delay 100 -loop 0 *.png animation.gif
#convert -loop 0 -reverse animation-tmp.gif animation.gif
#rm -f animation-tmp.gif


