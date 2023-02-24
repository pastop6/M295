# m295.local

## Virtual Host mit Port
Listen 80
<VirtualHost *:81>
    DocumentRoot "c:\xampp\htdocs\Applikation\public"
</VirtualHost>

Browser: http://localhost:81


## Virtual Host mit DNS Name
<VirtualHost *>
    ServerName m295.local
    DocumentRoot "c:\xampp\htdocs\Applikation\public"
</VirtualHost>

### WIN etc - hosts

127.0.0.1 m295.local
::1 m295.local

Browser: http://m295.local