# myWordList


* NOTICE: this project contains only dangerious but simple scripts, feel free to play with them but with caution.


## Step 0x00: How to import words?

### Fetch word definitions

Import is pretty simple, add them to a text file line by line. And use python script `dictionary_fetch.py` to fetch the dictionary from web. You may need to modify the sript before you actually run it.

### Convert those definition to xml format that can be used

Again, use python script `dictionary_process.py` to convert those definition data you downloaded. Also, you may need to modify the script beforehand, just like file location or something else.

### Finally, Copy them to right place.

copy the data into corresponding file in folder `./lists/`.


* `dictstore` is where the xml definition data stored.
* `list_orig` is where your word list stored, one word per line.
* `my***list` is where your word will be stored, after you interact with webpages.

## Step 0x01: How to use the web user interface?

Simply setup a PHP web server, and give it write permission. and `index.php` is where everything starts.


## Finally, Can I repost it? How can i use this script?

Feel free to play with codes, fork it or send pull request, but, nope, you can not repost it, just direct them to here. And, it is not for commercial use and public use. Also, the use of the script is at your on risk and your own responsibility, and has nothing to do with me.
