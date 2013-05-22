<?php
namespace Helper\Model;


/**
 * \Helper\Model\Logger::emergency(...)
 */
class Logger extends Simple\Singleton\Base {

	private $_logger = null;

	private function _init() {
		if(is_null($this->_logger))
			$this->_logger = \Simple\Config\PHP::get('logger', 'handler');
	}

	static public function emergency($message, array $context = array()) {
		self::getIntance()->_logger->addEmergency($message, $context);
	}
	static public function alert($message, array $context = array()) {
		self::getIntance()->_logger->addAlert($message, $context);
	}
	static public function critical($message, array $context = array()) {
		self::getIntance()->_logger->addCritical($message, $context);
	}
	static public function error($message, array $context = array()) {
		self::getIntance()->_logger->addError($message, $context);
	}
	static public function warning($message, array $context = array()) {
		self::getIntance()->_logger->addWarning($message, $context);
	}
	static public function notice($message, array $context = array()) {
		self::getIntance()->_logger->addNotice($message, $context);
	}
	static public function info($message, array $context = array()) {
		self::getIntance()->_logger->addInfo($message, $context);
	}
	static public function debug($message, array $context = array()) {
		self::getIntance()->_logger->addDebug($message, $context);
	}
	static public function log($level, $message, array $context = array()) {
		self::getIntance()->_logger->addLog($message, $context);
	}

}