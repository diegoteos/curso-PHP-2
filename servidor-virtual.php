editamos el archivo ubicado en: C:\Windows\System32\drivers\etc
HOST
Le agregamos las lineas:
127.0.0.1       hola
ip              nombre dominio virtual



//agregar al archivo httpd-vhosts.conf las siguientes lineas de codigo

NameVirtualHost *
<VirtualHost *>
  DocumentRoot "C:\xampp\htdocs"
  ServerName localhost
</VirtualHost>
<VirtualHost *>
  DocumentRoot "C:\xampp\htdocs\php"
  ServerName miproyecto.local.com
  <Directory "C:\xampp\htdocs\php">
    Require all granted
  </Directory>
</VirtualHost>
