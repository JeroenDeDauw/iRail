<?php

# This is the configuration file for PHPAPI.
# Make sure you edit your copy at api.config.php, and not api.config.default.php!

# API module registration
$globAutoloadClasses['ApiConnections'] = $apiDir . '/modules/ApiConnections.php';
$globAPIModules['connections'] = 'ApiConnections';

# The name of the API.
$globAPIName = 'iRail API';

# The authors of the API.
$globAPIAuthors = array(
	'Pieter colpaert',
	'Yeri "Tuinslak" Tiete (http://yeri.be)',
);

# Array with lines that form the API description.
$globAPIDescription = array(
	'',
	'',
	'**********************************************************************************************************',
	'**                                                                                                      **',
	'**                           This is an auto-generated API documentation page                           **',
	'**                                                                                                      **',
	'**                                    Documentation and Examples:                                       **',
	'**                                  https://github.com/iRail/iRail                                      **',
	'**                                                                                                      **',
	'**********************************************************************************************************',
	'',
	'Status:                All features shown on this page should be working, but the API',
	'                       is still in active development, and  may change at any time.',
	'                       Make sure to monitor our mailing list for any updates',
	'',
	'Documentation:         https://github.com/iRail/iRail',
	'',
	'',
	'',
	'',
	'',
);