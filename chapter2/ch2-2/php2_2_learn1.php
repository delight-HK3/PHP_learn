<html>
	<head>
	</head>
	<body>
		<?php
			class pub_class {
				public $pub_num; // public property
				protected $pro_num; // protected property
				private $pri_num; // private property

				function set_info($num){
					$this->$pri_num = $num;
					// 입력된 $num의 값을 $pri_num 저장
				}
				protected function get_str(){
					return $this->$pro_num;
				}
				function get_num(){
					return $this->$pri_num;
				}
			}
			class pro_class extends pub_class {
				function ex_info($num){
					$this->$pro_num = $num;
				}
				function pro_echo(){
					echo "protected property = ".$this->$pro_num."<br>";
					echo "protected method = ".$this->get_str()."<br>";
				}
			}
			$object_pub = new pub_class(); // $object_pub이름의 객체 생성
			$object_pro = new pro_class(); // $object_pro이름의 객체 생성
			$object_pro->ex_info(10); // pub_class의 pro_num에 10 저장
			$object_pro->pro_echo(); // pro_num, get_num으로 pro_num 출력

			$object_pub->set_info(20); // pub_class의 pri_num에 20을 저장
			echo "pub_class의 pri_num = ".$object_pub->get_num();
		?>
	</body>
</html>
