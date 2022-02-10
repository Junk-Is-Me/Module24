abstract class Vehice(){
    private $model;
    private $weight;
    private $sound;

    public function __construct($model, $weight){
        $this->model = $model;
        $this->weight = $weight;
    }

    public function setSound($sound){
        this->sound = $sound;
    }

    public funcion cleanWindshield(){

    }

    public function horn(){
        return $this->sound;
    }
};

interface VehiceInterface {
    public function moveForward();
    public function moveBackward();
    public function go();
    public function stop();
}

class Car extends Vehice implements VehiceInteface() {
    pivate $color;
    private $engineType;
    
    public function getColor(){
        return $this-> color;
    };

    public function moveForward(){

    };

    public function moveBackward(){
        
    };

    public function nitrousOxide(){
        
    };

    public function stop(){

    };

    public function go(){
        $this-> moveForward();
        $this-> nitrousOxide();
    };
};

class Bulldozer extends Vehice implements VehiceInterface(){
    private $color;
    private $engineType;

    public function getColor(){
        return $this-> color;
    };

    public function moveForward(){

    };

    public function moveBackward(){
    
    };

    public function stop(){

    };
    
    public function moveBucket(){

    };

    public function go(){
        $this->$moveForward();
        $this->moveBucket();
    };

};




