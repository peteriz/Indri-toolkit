<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 2.0.0
 * 
 * This file is not intended to be easily readable and contains a number of 
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG 
 * interface file instead. 
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
if (!extension_loaded('libindri_php')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_libindri_php.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('libindri_php.so')) return;
    } else {
      if (!dl('libindri_php.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}



/* PHP Proxy Classes */
class TermExtent {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'end') return TermExtent_end_set($this->_cPtr,$value);
		if ($var === 'begin') return TermExtent_begin_set($this->_cPtr,$value);
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if (function_exists('TermExtent_'.$var.'_set')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		$func = 'TermExtent_'.$var.'_get';
		if (function_exists($func)) {
			$r = call_user_func($func,$this->_cPtr);
			if (!is_resource($r)) return $r;
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			return new $c($r);
		}
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_indri__parse__TermExtent') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TermExtent();
	}
}

class ScoredExtentResult {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_indri__api__ScoredExtentResult') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ScoredExtentResult();
	}
}

class ParsedDocument {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function getContent() {
		return ParsedDocument_getContent($this->_cPtr);
	}

	public function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_indri__api__ParsedDocument') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ParsedDocument();
	}
}

class QueryAnnotationNode {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_indri__api__QueryAnnotationNode') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_QueryAnnotationNode();
	}
}

class QueryAnnotation {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}
	function __construct($h) {
		$this->_cPtr=$h;
	}

	public function getQueryTree() {
		$r=QueryAnnotation_getQueryTree($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new QueryAnnotationNode($r);
			}
			return new $c($r);
		}
		return $r;
	}

	public function getAnnotations() {
		return QueryAnnotation_getAnnotations($this->_cPtr);
	}

	public function getResults() {
		return QueryAnnotation_getResults($this->_cPtr);
	}
}

class QueryEnvironment {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function addServer($hostname) {
		QueryEnvironment_addServer($this->_cPtr,$hostname);
	}

	public function addIndex($pathname) {
		QueryEnvironment_addIndex($this->_cPtr,$pathname);
	}

	public function close() {
		QueryEnvironment_close($this->_cPtr);
	}

	public function setMemory($memory) {
		QueryEnvironment_setMemory($this->_cPtr,$memory);
	}

	public function setScoringRules($rules) {
		QueryEnvironment_setScoringRules($this->_cPtr,$rules);
	}

	public function setStopwords($stopwords) {
		QueryEnvironment_setStopwords($this->_cPtr,$stopwords);
	}

	public function runQuery($query,$resultsRequested) {
		return QueryEnvironment_runQuery($this->_cPtr,$query,$resultsRequested);
	}

	public function runQuerydocset($query,$documentSet,$resultsRequested) {
		return QueryEnvironment_runQuerydocset($this->_cPtr,$query,$documentSet,$resultsRequested);
	}

	public function runAnnotatedQuery($query,$resultsRequested) {
		$r=QueryEnvironment_runAnnotatedQuery($this->_cPtr,$query,$resultsRequested);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new QueryAnnotation($r);
			}
			return new $c($r);
		}
		return $r;
	}

	public function runAnnotatedQuerydocset($query,$documentSet,$resultsRequested) {
		$r=QueryEnvironment_runAnnotatedQuerydocset($this->_cPtr,$query,$documentSet,$resultsRequested);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new QueryAnnotation($r);
			}
			return new $c($r);
		}
		return $r;
	}

	public function documentsdocids($documentIDs) {
		return QueryEnvironment_documentsdocids($this->_cPtr,$documentIDs);
	}

	public function documents($results) {
		return QueryEnvironment_documents($this->_cPtr,$results);
	}

	public function documentMetadatadocids($documentIDs,$attributeName) {
		return QueryEnvironment_documentMetadatadocids($this->_cPtr,$documentIDs,$attributeName);
	}

	public function documentMetadata($documentIDs,$attributeName) {
		return QueryEnvironment_documentMetadata($this->_cPtr,$documentIDs,$attributeName);
	}

	public function documentIDsFromMetadata($attributeName,$attributeValue) {
		return QueryEnvironment_documentIDsFromMetadata($this->_cPtr,$attributeName,$attributeValue);
	}

	public function termCount() {
		return QueryEnvironment_termCount($this->_cPtr);
	}

	public function onetermCount($term) {
		return QueryEnvironment_onetermCount($this->_cPtr,$term);
	}

	public function stemCount($term) {
		return QueryEnvironment_stemCount($this->_cPtr,$term);
	}

	public function termFieldCount($term,$field) {
		return QueryEnvironment_termFieldCount($this->_cPtr,$term,$field);
	}

	public function stemFieldCount($term,$field) {
		return QueryEnvironment_stemFieldCount($this->_cPtr,$term,$field);
	}

	public function fieldList() {
		return QueryEnvironment_fieldList($this->_cPtr);
	}

	public function documentCount() {
		return QueryEnvironment_documentCount($this->_cPtr);
	}

	public function onedocumentCount($term) {
		return QueryEnvironment_onedocumentCount($this->_cPtr,$term);
	}

	public function expressionCount($expression,$queryType=null) {
		switch (func_num_args()) {
		case 1: $r=QueryEnvironment_expressionCount($this->_cPtr,$expression); break;
		default: $r=QueryEnvironment_expressionCount($this->_cPtr,$expression,$queryType);
		}
		return $r;
	}

	public function documentExpressionCount($expression,$queryType=null) {
		switch (func_num_args()) {
		case 1: $r=QueryEnvironment_documentExpressionCount($this->_cPtr,$expression); break;
		default: $r=QueryEnvironment_documentExpressionCount($this->_cPtr,$expression,$queryType);
		}
		return $r;
	}

	public function expressionList($expression,$queryType=null) {
		switch (func_num_args()) {
		case 1: $r=QueryEnvironment_expressionList($this->_cPtr,$expression); break;
		default: $r=QueryEnvironment_expressionList($this->_cPtr,$expression,$queryType);
		}
		return $r;
	}

	public function documentLength($documentID) {
		return QueryEnvironment_documentLength($this->_cPtr,$documentID);
	}

	public function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_indri__api__QueryEnvironment') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_QueryEnvironment();
	}
}

class Parameters {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_indri__api__Parameters') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_Parameters();
	}

	public function set($value) {
		Parameters_set($this->_cPtr,$value);
	}

	public function get_bool($name,$def) {
		return Parameters_get_bool($this->_cPtr,$name,$def);
	}

	public function get_int($name,$def) {
		return Parameters_get_int($this->_cPtr,$name,$def);
	}

	public function get_double($name,$def) {
		return Parameters_get_double($this->_cPtr,$name,$def);
	}

	public function get_INT64($name,$def) {
		return Parameters_get_INT64($this->_cPtr,$name,$def);
	}

	public function get_string($name,$def) {
		return Parameters_get_string($this->_cPtr,$name,$def);
	}

	public function remove($path) {
		Parameters_remove($this->_cPtr,$path);
	}

	public function set_bool($name,$value) {
		Parameters_set_bool($this->_cPtr,$name,$value);
	}

	public function set_string($name,$value) {
		Parameters_set_string($this->_cPtr,$name,$value);
	}

	public function set_int($name,$value) {
		Parameters_set_int($this->_cPtr,$name,$value);
	}

	public function set_UINT64($name,$value) {
		Parameters_set_UINT64($this->_cPtr,$name,$value);
	}

	public function set_double($name,$value) {
		Parameters_set_double($this->_cPtr,$name,$value);
	}

	public function clear() {
		Parameters_clear($this->_cPtr);
	}

	public function size() {
		return Parameters_size($this->_cPtr);
	}

	public function exists($name) {
		return Parameters_exists($this->_cPtr,$name);
	}

	public function load($text) {
		Parameters_load($this->_cPtr,$text);
	}
}

abstract class QueryExpander {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}
	function __construct($h) {
		$this->_cPtr=$h;
	}

	public function runExpandedQuery($originalQuery,$resultsRequested,$verbose=false) {
		return QueryExpander_runExpandedQuery($this->_cPtr,$originalQuery,$resultsRequested,$verbose);
	}

	public function expand($originalQuery,$results) {
		return QueryExpander_expand($this->_cPtr,$originalQuery,$results);
	}
}

class RMExpander extends QueryExpander {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		QueryExpander::__set($var,$value);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return QueryExpander::__isset($var);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return QueryExpander::__get($var);
	}

	public function __construct($env,$param) {
		if (is_resource($env) && get_resource_type($env) === '_p_indri__query__RMExpander') {
			$this->_cPtr=$env;
			return;
		}
		$this->_cPtr=new_RMExpander($env,$param);
	}

	public function expand($originalQuery,$results) {
		return RMExpander_expand($this->_cPtr,$originalQuery,$results);
	}
}

class PonteExpander extends QueryExpander {
	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_libindri_php_alter_newobject($this->_cPtr,$value);
		QueryExpander::__set($var,$value);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return QueryExpander::__isset($var);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_libindri_php_get_newobject($this->_cPtr);
		return QueryExpander::__get($var);
	}

	public function __construct($env,$param) {
		if (is_resource($env) && get_resource_type($env) === '_p_indri__query__PonteExpander') {
			$this->_cPtr=$env;
			return;
		}
		$this->_cPtr=new_PonteExpander($env,$param);
	}

	public function expand($originalQuery,$results) {
		return PonteExpander_expand($this->_cPtr,$originalQuery,$results);
	}
}


?>
