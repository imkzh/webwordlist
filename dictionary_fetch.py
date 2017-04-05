#!/usr/bin/python

import httplib
import time
import random


filename = "/var/www/html/wordlist/Original.txt"
destfile = "/var/www/html/wordlist/index.htm"


def getdef(word):
	url = "http://cn.bing.com/dict/SerpHoverTrans?q=" + word

	hdr = ['User-Agent: balabala Mozilla', 'Accept: */*']

	conn = httplib.HTTPConnection("cn.bing.com")
	conn.connect()

	conn.putrequest(method="GET",url=url) 
	conn.putheader("Content-Length", 0)
	conn.putheader("User-Agent", "Baidu Spider V2")
	conn.putheader("Connection", "close")
	conn.endheaders()
        try:
                response = conn.getresponse()
                res= response.read()
        except:
                res="<Error>" + word + "\n</Error>"
                print "Error while fetching " + word +", wait for extra 1 minute."
                time.sleep(64)
	
	return res

dictionary = open(destfile,"a+")
wordlist = open(filename,"r")
c=0

#line=wordlist.readline()
#while line!="": 
for line in wordlist.readlines():
	c=c+1
	print "Getting: " + line.replace("\r"," ").replace("\n"," "),
	define=getdef(line)
	dictionary.write(define+"\n\n")
	if c>10:
		dictionary.flush()
		dictionary.close()
		dictionary=open(destfile,"a+")
		c=0
	#line=wordlist.readline()
	timeout = random.random()*4+3;
	print ", Waiting for %f sec" % (timeout,)
	time.sleep(timeout)

wordlist.close()
dictionary.close()


