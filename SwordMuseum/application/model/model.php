<?php
class Model{

	public $dbhandle;

	public function __construct(){
		$dsn='sqlite:./db/swordMuseumDB.db';
		
		try { // connect to database
			$this->dbhandle = new PDO($dsn, 'user','password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false));
		}	
		catch (PDOEXception $e){
			echo"Can't Connect";
			print new Exception($e->getMessage());
		}
	}

	function dbCreateTables(){
		try {
			$this->dbhandle->exec("CREATE TABLE Home_Page(Id INTEGER PRIMARY KEY, title TEXT, description TEXT); " .
				"CREATE TABLE Model_Page(Id INTEGER PRIMARY KEY, modelTitle TEXT,  image TEXT, modelDescription TEXT); " .
				"CREATE TABLE Extras_Page(Id INTEGER PRIMARY KEY, extrasTitle TEXT, extrasDescription TEXT, reference TEXT);");
			return "Successfully created";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	function dbInsertData(){
				try{
			$this->dbhandle->exec(
			"INSERT INTO Home_Page(Id, title, description)
			 VALUES (1, 'Sword Museum', 'This website is a virtual museum displaying four different types of swords used throughout time. These swords are a samurai sword, cutlass, great sword and a dagger. On the models page you will find 4 virtual models that you can interact with and inspect.'); " .
			"INSERT INTO Model_Page(Id , modelTitle, image, modelDescription )
			 VALUES (1, 'Samurai Sword', 'SamuraiSword', 'A samurai sword, also known as a katana, is a traditionally made Japanese sword used by the samurai of Japan. It is a curved single edged blade, with a long grip to allow for two hand use.'); " .
			"INSERT INTO Model_Page(Id , modelTitle, image, modelDescription )
			 VALUES (2, 'Cutlass', 'Cutlass', 'A cutlass is a short sword, commonly used by sailors. It is a short and broad sword with a curved single edge blade and a basket-shaped guard to protect the hand.'); " .
			"INSERT INTO Model_Page(Id , modelTitle, image, modelDescription )
			 VALUES (3, 'Great Sword', 'GreatSword', 'A great sword, also know as a long sword, is a heavy double edged sword with a grip made for two hands. It was used mostly in the late medieval times.'); " .
			"INSERT INTO Model_Page(Id , modelTitle, image, modelDescription )
			 VALUES (4, 'Dagger', 'Dagger', 'A dagger is a a knife, designed to be small and used in close combat or for assinations. Above is a classic example of a medieval dagger, with a leather grip with a double edged blade.'); " .
			"INSERT INTO Extras_Page(Id, extrasTitle, extrasDescription, reference)
			 VALUES(1, 'Dust Particle Background', 'This is a Javascript background that reacts to the position and movement of the mouse. This is adapted from an online resource referenced below.', 'Ryan Leichliter, Dust Particles Simulation with Canvas, https://codepen.io/LeKohrs/pen/eVpEOa [Accessed 02/04/2019]'); " . 
			"INSERT INTO Extras_Page(Id, extrasTitle, extrasDescription, reference)
			 VALUES(2, 'Carousel and Lightbox', 'A bootstrap carousel is used to display the models images and fancybox is used to display the X3D models. Each of the 3D models is displayed in the carousel as an image and then to see the model you have to click on the image.', 'Fancyapps, Fancybox, https://fancyapps.com/fancybox/3/ [Accessed 20/04/2019]'); " . 
			 "INSERT INTO Extras_Page(Id, extrasTitle, extrasDescription, reference)
			 VALUES(3, 'More Complex Models', 'The models created are of a more complex shape. These models are put inside of a switch to make only one model load at a time to improve the speed of the website. Additonally, scenes have been setup specifically to allow for optimal display in the switch statement.', ''); " .
			 "INSERT INTO Extras_Page(Id, extrasTitle, extrasDescription, reference)
			 VALUES(4, 'Animations', 'The models have got more complex animations created for them to show off more of the swords.', ''); " .
			 "INSERT INTO Extras_Page(Id, extrasTitle, extrasDescription, reference)
			 VALUES(5, 'Animated Navbar', 'The navbar has some animation added both to the logo when hovered over and the page links to help assist in which button you are about to click.', 'Callum Williams, CSS3 Menu Hover Effects, https://codepen.io/Calloumi/pen/vndlH [Accessed 03/05/2019]'); "
			);
			return "X3D model data inserted successfully inside database";
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	function dbGetHomeData(){
		try {
			$sql = 'SELECT * FROM Home_Page';

			$stmt = $this->dbhandle->query($sql);

			$result = null;

			$i=0;

			while($data = $stmt->fetch()) {
				$result[$i]['title'] = $data['title'];
				$result[$i]['description'] = $data['description'];

				$i++;
			}
		}
		catch (PDOException $e){
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;

		return $result;
	}

	function dbGetModelData(){
		try {
			$sql = 'SELECT * FROM Model_Page';

			$stmt = $this->dbhandle->query($sql);

			$result = null;

			$i=0;

			while($data = $stmt->fetch()) {
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$result[$i]['image'] = $data['image'];

				$i++;
			}
		}
		catch (PDOException $e){
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;

		return $result;
	}

	function dbGetExtrasData(){
		try {
			$sql = 'SELECT * FROM Extras_Page';

			$stmt = $this->dbhandle->query($sql);

			$result = null;

			$i=0;

			while($data = $stmt->fetch()) {
				$result[$i]['extrasTitle'] = $data['extrasTitle'];
				$result[$i]['extrasDescription'] = $data['extrasDescription'];
				$result[$i]['reference'] = $data['reference'];

				$i++;
			}
		}
		catch (PDOException $e){
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;

		return $result;
	}

}

?>