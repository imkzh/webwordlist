#!/usr/bin/python

import re

filename = "/var/www/html/wordlist/dict"

wordlist = open(filename,"r")

for line in wordlist.readlines():
    pass
    mo=re.match(r"<.+h4>(.+?)</h4><span .+?>\[(.+)\] </span>(.+)</div>",line,re.I)
    if mo:
        word=mo.group(1)
        pronounce=mo.group(2)
        mean=mo.group(3)
        means=re.finditer(r"<ul><li>.+?ht_pos\">(.+?)</span><.+?ht_trs\">(.+?)</span></li></ul>",mean,re.I)
        print "word:%s\n\tpronounce: %s\n\tmeans:" %(word,pronounce)
        xmlmean=""
        if means:
            for m in means:
                xmlmean=xmlmean+'<meaning cate="{}">{}</meaning>'.format(m.group(1),m.group(2))
                print "\t\tCategory: ", m.group(1)
                print "\t\t\tMeaning: ",m.group(2)
            pass
        print '<dict key="{}"><pronounce>{}</pronounce><means>{}</means></dict>'.format(word,pronounce,xmlmean)
    pass

wordlist.close()
dictionary.close()
