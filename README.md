CDN_cache
=========
  
  
/!\ Experimental code !  
  
On your computer :  
1- setup https-everywhere : https://www.eff.org/https-everywhere  
2- change MY_HOSTNAME by your hostname in googleapis.xml  
3- move googleapis.xml to $HOME/.mozilla/firefox/YOUR_PROFILE/HTTPSEverywhereUserRules/  
  
On your server :  
4- create the folder /mycdn  
5- put index.php and .htaccess in /mycdn/  
6- check that mod_rewrite is enabled  
  
7- go on http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js  
  If it works, you will be redirected to your server.
  
You can go on https://your_host/mycdn/list to see files in your cache.

If you have any bug, please report it.
