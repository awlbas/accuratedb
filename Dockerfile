FROM php:7.2.33-apache
COPY . /home/dell/Documents/accuratedb
WORKDIR /home/dell/Documents/accuratedb
CMD [ "php", "./index.php" ]
