# Simple Components Example


## Main points

This is rapid example tha how use Simple components.


Transform WTF! to WOOW!

	- directory "Config" has files that you can read by \Simple\Config\PHP::get('filename', 'property');
	- the file middleware in the directory configuration defines its your middleware stack, you can select which middleware should be executed by setting routes. By default the route is defined by regular expression .* You can deny regular expressions by adding the character !, Example: '!404$'
	- example: Suppose you want to run the middleware when the uri match '/users'.
		- \Simple\Middleware\Application::definition(array('namespace'=>'\Lellol\Middleware', class'=>'login', 'function'=>'check', 'id'=>'lellol.login', 'route'=>'^/users'))