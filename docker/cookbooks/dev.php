<?php

function dev_init(){


	exec_script("sudo chmod 777 -R /etc/php5 
		sudo sed -i "s/;date.timezone =/date.timezone = America\/Sao_Paulo/" /etc/php5/cli/php.ini \
		&& sed -i "s/;date.timezone =/date.timezone = America\/Sao_Paulo/" /etc/php5/fpm/php.ini \
		&& sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php5/cli/php.ini \
		&& sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php5/fpm/php.ini \
		&& sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php5/apache2/php.ini
		sudo /etc/init.d/apache2 restart
		sudo chmod 777 -R /home/cloud 
		sudo chmod 777 -R /home/cloud-db
		");




}
