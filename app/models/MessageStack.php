<?php 

// require_once './PhreedomAdmin.php';

// $phreedom_admin = new PhreedomAdmin();

class MessageStack {
    public $debug_info 	= NULL;

	function debug($txt) {
		define('PAGE_EXECUTION_START_TIME', microtime(true));       
		global $db;
		if (substr($txt, 0, 1) == "\n") {
//echo "\nTime: " . (int)(1000 * (microtime(true) - PAGE_EXECUTION_START_TIME)) . " ms, " . $db->count_queries . " SQLs " . (int)($db->total_query_time * 1000)." ms => " . substr($txt, 1) . '<br>';
		  $this->debug_info .= "\nTime: " . (int)(1000 * (microtime(true) - PAGE_EXECUTION_START_TIME)) . " ms, " . $db->count_queries . " SQLs " . (int)($db->total_query_time * 1000)." ms => ";
		  $this->debug_info .= substr($txt, 1);
		} else {
		  $this->debug_info .= $txt;
		}
  }

    public function add($message, $type = 'error') {
      	if ($type == 'error') {
			$_SESSION['messageToStack'][] = array('type' => $type, 'params' => 'class="ui-state-error"', 'text' => '#' . '&nbsp;' . $message);
		} elseif ($type == 'success') {
		  if (!$this->key['HIDE_SUCCESS_MESSAGES']) $_SESSION['messageToStack'][] = array('type' => $type, 'params' => 'class="ui-state-active"', 'text' => '#', 'Sukses' . '&nbsp;' . $message);
		} elseif ($type == 'caution' || $type == 'warning') {
		  $_SESSION['messageToStack'][] = array('type' => $type, 'params' => 'class="ui-state-highlight"', 'text' => '#', 'Caution') . '&nbsp;' . $message;
		} else {
		  $_SESSION['messageToStack'][] = array('type' => $type, 'params' => 'class="ui-state-error"', 'text' => $message);
		}
		if(isset($file) && isset($line)){
			$this->debug("\n On screen displaying '$type' message = $message file = $file line = $line");
		}

		return true;
		  }

		  public function output() {
			$output = NULL;
			  if (! isset($_SESSION['messageToStack'])) return '';
			  $output .= '<table style="border-collapse:collapse;width:100%">' . chr(10);
			foreach ($_SESSION['messageToStack'] as $value) {
				$output .= '<tr><td ' . $value['params'] . ' style="width:100%">' . $value['text'] . '</td></tr>' . chr(10);
			  }
			  $output .= '</table>' . chr(10);
			  $this->reset();
			  return $output;
		}

		function reset() {
			unset($_SESSION['messageToStack']);
		  }
}