#!/bin/sh
cd /home/wwwroot/www.reactshare.cn/air/images
convert -delay 100 -loop 0 *.png animation.gif
convert -delay 20 -loop 0 *.png animation-fast.gif

# 输出视频
#cat *.png | ffmpeg -f image2pipe -framerate 10  -i - output2.mkv


