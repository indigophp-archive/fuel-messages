<?php


Autoloader::add_core_namespace('Messages');

Autoloader::add_classes(array(
	'Messages\\Messages'           => __DIR__.'/classes/messages.php',
	'Messages\\Messages_Instance'  => __DIR__.'/classes/messages/instance.php',
));


/* End of file bootstrap.php */
