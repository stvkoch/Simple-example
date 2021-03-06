<?php


return array(
    'webmasterEmail'=>'stvkoch@gmail.com',
    'subject'=>'ERROR! Application Exception',
    'fromName'=>'Application',

    'warningLog' => '/tmp/lelloolll.waning.log',
    'errorLog' => '/tmp/lelloolll.error.log',
    'noticeLog' => '/tmp/lelloolll.notice.log',

    'handlerInstance'=>null,

    'handler' => function(){
        if(is_null(\Simple\Config\PHP::get('logger', 'handlerInstance'))){
            $logger = new \Monolog\Logger('name');
            $logger->pushHandler(new \Monolog\Handler\StreamHandler(\Simple\Config\PHP::get('logger', 'warningLog'), Logger::WARNING));
            $logger->pushHandler(new \Monolog\Handler\StreamHandler(\Simple\Config\PHP::get('logger', 'errorLog'), Logger::ERROR));
            $logger->pushHandler(new \Monolog\Handler\StreamHandler(\Simple\Config\PHP::get('logger', 'noticeLog'), Logger::NOTICE));

            //email handler $to, $subject, $from, $level
            $logger->pushHandler(new \Monolog\Handler\NativeMailerHandler(
                \Simple\Config\PHP::get('logger', 'webmasterEmail'),
                \Simple\Config\PHP::get('logger', 'subject'),
                \Simple\Config\PHP::get('logger', 'fromName'),
                Logger::ERROR));

            \Simple\Config\PHP::set('logger', 'handlerInstance', $logger);
        }
        return \Simple\Config\PHP::get('logger', 'handlerInstance');
    }


);