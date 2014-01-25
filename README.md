CDN_cache
=========
  
  
/!\ Experimental code !  
  
On your computeur :  
1- setup https-everywhere : https://www.eff.org/https-everywhere  
2- change MY_HOSTNAME by your hostname in googleapis.xml
3- move googleapis.xml to $HOME/.mozilla/firefox/YOUR_PROFILE/HTTPSEverywhereUserRules/  
  
On your server :  
4- make the folder /mycdn  
5- put index.php and .htaccess in /mycdn/  
6- check that mod_rewrite is enabled  
  
7- go on http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js  
  If it work, you will be redirect to your server.

If you have any bug, pease report it.

Next step, include cache for google fonts.
