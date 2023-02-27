# Port

Listen 55555
<VirtualHost *:55555>
    DocumentRoot "U:\PortableApps\xampp\htdocs\UK_WORK\M295-GR2\COM_APP\Public"
</VirtualHost>

# Brwoser:

http://localhost:55555/


# Composer  - Befehle
composer init
composer update
composer dump-autoload

## Package installation
composer require vlucas/valitron 


## Virtual Host oder mit Port einrichten
Listen 55555
<VirtualHost *:55555>
    DocumentRoot "c:\xampp\htdocs\xxxxx\Public"
</VirtualHost>

Browser: http://localhost:55555
oder http://m295.local




# Testing:
http://localhost:55555/
http://localhost:55555/info
http://localhost:55555/sqlite3
http://localhost:55555/sqlite3/getData

http://localhost:55555/Admin/User

http://localhost:55555/WWW/Home
http://localhost:55555/WWW/Kontakt

