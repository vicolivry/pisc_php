<?PHP

include_once 'IFighter.class.php';

class NightsWatch {
	public function recruit($man) {
		if ($man instanceof IFighter)
			$man->fight();
	}

	public function fight() {
	}
}

?>
