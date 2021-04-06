<html>
<head>
</head>
<body>
<?php
class QuadraticEquation {
    public $numbera;
    public $numberb;
    public $numberc;
    function __construct($numbera,$numberb,$numberc){
        $this->numbera = $numbera;
        $this->numberb = $numberb;
        $this->numberc = $numberc;
    }
    function getDiscriminant(){
return ($this->numberb*$this->numberb) - (4*$this->numbera*$this->numberc);
    }
     function getRoot1(){
        return (-$this->numberb + sqrt($this->getDiscriminant()))/2*$this->numberc;
    }
    function getRoot2(){
        return (-$this->numberb - sqrt($this->getDiscriminant()))/2*$this->numberc;
    }
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $numbera = $_POST['a'];
    $numberb = $_POST['b'];
    $numberc = $_POST['c'];
    $submit = $_POST['submit'];
    $quadraticEquation = new QuadraticEquation($numbera,$numberb,$numberc);

}
?>
<form method="post">
<input type="number" name="a" size="10"> Nhập số a </br>
<input type="number" name="b" size="10"> Nhập số b </br>
<input type="number" name="c" size="10"> Nhập số c </br>
<button type="submit" name="submit">Check</button>
</form>
<div>
    <p>
        <?php
        if (isset($submit)) {
            $delta = $quadraticEquation->getDiscriminant();
            if($delta>0){
                echo "Nghiem 1: ".$quadraticEquation->getRoot1()." Nghiem 2: ".$quadraticEquation->getRoot2();
            } else if($delta==0){
                echo "Nghiem: ".$quadraticEquation->getRoot1();
            } else echo "Vo nghiem";
        }
        ?>
    </p>
</div>
</body>
</html>
