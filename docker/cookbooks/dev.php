<?php

function dev_init(){


	exec_script("
		sudo chmod 777 -R /etc/php5
		sudo chmod 777 -R /home/cloud
		sudo chmod 777 -R /home/cloud-db
		echo '------Instalando FlameRobin------'
		sudo apt-get install flamerobin
		echo '------Instalando Synaptic(Gerenciador de Pacotes)------'
		sudo apt-get install synaptic
	");

/*
	sudo sed -i "s/;date.timezone =/date.timezone = America\/Sao_Paulo/" /etc/php5/cli/php.ini && sed -i "s/;date.timezone =/date.timezone = America\/Sao_Paulo/" /etc/php5/fpm/php.ini 
	sudo sed -i "s/short_open_tag = On/short_open_tag = Off/" /etc/php5/cli/php.ini
	sudo sed -i "s/short_open_tag = On/short_open_tag = Off/" /etc/php5/fpm/php.ini
	sudo sed -i "s/short_open_tag = On/short_open_tag = Off/" /etc/php5/apache2/php.ini
		sudo /etc/init.d/apache2 restart
 */



}
