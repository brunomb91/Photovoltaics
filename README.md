# Photovoltaics

Projeto final da disciplina de Tópicos em Energia Solar Fotovoltaica (ECOM117). 

O código contido na pasta `current_and_voltage_measuring` realiza medições de tensão e corrente RMS utilizando a biblioteca EmonLib e os exibe pelo monitor serial da IDE do Arduino.

O código contido na pasta `python_src` contém o script `serial_access.py`, que mostra o monitor serial no terminal do Linux. Ele é executado em uma Raspberry Pi, que exibe as medições feitas pelos sensores coletadas pelo Arduino. 

A pasta `web` contém a página web que irá exibir os dados de tensão, corrente e potência. Para que funcione, instalar o LAMP no Linux, seguindo o tutorial [aqui](https://www.digitalocean.com/community/tutorials/como-instalar-a-pilha-linux-apache-mysql-php-lamp-no-ubuntu-18-04-pt), ou o [XAMPP](https://www.apachefriends.org/download.html), caso esteja no Windows. Depois da instalação, colocar a pasta `web` na pasta `/var/www/html` no Linux ou `C:\xampp\htdocs`, caso tenha instalado o XAMPP no Windows. Então, acessar o [link](http://127.0.0.1/web/index.php).
