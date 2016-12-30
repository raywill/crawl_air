#!/usr/bin/python
# -*- coding: UTF-8 -*-
# coding:utf-8

import sys

from bs4 import BeautifulSoup
import re
import os
import urllib
import time
import random
import time

reload(sys)
sys.setdefaultencoding("utf-8")



#################### 配置开始#################

airUrl = "http://air-level.com/"
savePath = "/home/wwwroot/www.reactshare.cn/air/images/"
scriptPath = "/home/wwwroot/www.reactshare.cn/air/animate.sh"
classPattern = "img-thumbnail"

################### 配置结束#################

def download_img(url,imgName):
    """
    download a comic in the form of

    url = http://www.example.com
    imgName = '00000000.jpg'
    """
    image=urllib.URLopener()
    image.retrieve(url,imgName.decode('utf-8'))



data = urllib.urlopen(airUrl).read()
soup = BeautifulSoup(data, "html5lib", from_encoding="utf-8")
imgSrc = soup.find('img', {"class":classPattern}).get('src')
updateTime = re.findall(r'\s(2.*)', soup.find('h4').contents[0].encode('utf-8'))
fileName = savePath + updateTime[0].encode('utf-8') + '-air.png'
download_img(imgSrc, fileName)

os.system(scriptPath)
