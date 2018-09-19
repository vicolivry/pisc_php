<?PHP

include_once 'Fighter.class.php';

class UnholyFactory {

	public $army = Array();
	public function absorb($fighter)
	{
		foreach ($this->army as $guy)
		{
			if ($guy->type == $fighter->type)
			{
				print ('(Factory already absorbed a fighter of type '
							. $fighter->type . ')' . PHP_EOL);
				return;
			}
		}
		if (!$fighter instanceof Fighter) {
			print('(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL);
			return;
		}
		print ('(Factory absorbed a fighter of type ' . $fighter->type . ')' . PHP_EOL);
		$this->army[] = $fighter;
	}

	public function fabricate($fighter)
	{
		foreach ($this->army as $guy) {
			if ($guy->type == $fighter) {
				print ('(Factory fabricates a fighter of type ' . $fighter . ')'
				. PHP_EOL);
				return ($guy);
			}
		}
		print ('(Factory hasn\'t absorbed any fighter of type ' .$fighter. ')'
			. PHP_EOL);
		return null;
	}
}
?>
