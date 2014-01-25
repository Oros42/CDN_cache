CDN_cache
=========
  
  
/!\ Experimental code !  
  
On your computeur :  
1- setup https-everywhere : https://www.eff.org/https-everywhere  
2- move googleapis.xml to /home/<login>/.mozilla/firefox/<profile>/HTTPSEverywhereUserRules/  
  
On your server :  
3- make the folder /mycdn  
4- put index.php and .htaccess in /mycdn/  
5- check that mod_rewrite is enabled  
  
6- go on http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js
  If it work, you will be redirect to your server.
s
