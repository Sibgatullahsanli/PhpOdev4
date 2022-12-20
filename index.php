<?php
class Sekil{
    public $x, $y, $z;
    public function __construct($x, $y = null, $z = null){
        $this->x = $x;  //(Yatay)
        $this->y = $y;  //(dikey)
        $this->z = $z;  //(Yükseklik)
    }
}
class Kare extends Sekil{
    public function cevre(){
        return $this->x * 4;
    }
    public function alan(){
        return pow($this->x, 2);
    }
}
class Dikdortgen extends Sekil{
    public function cevre(){
        return $this->x * 2 + $this->y * 2;
    }
    public function alan(){
        return $this->x * $this->y;
    }
}
class Ucgen extends Sekil{
    public function cevre(){
        return $this->x + $this->y + $this->z;
    }
    public function alan(){
        $u = $this->cevre(); 
        return bcsqrt((($u / 2) * (($u / 2) - $this->x) * (($u / 2) - $this->y) * (($u / 2) - $this->z)), 2); 
    }
}

$kare = new Kare(4);
$dikdortgen = new Dikdortgen(4, 6);
$ucgen = new Ucgen(3, 4, 5);
?>


<!doctype html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
		<title>Alan Çevre Hesaplama</title>
	</head>
	<body>
		<div class="container">     
            <div class="row mt-3">         
				<div class="col-4">         
					<div class="card" style="width: 18rem;">
 						<div class="card-body text-center">
							<h5 class="card-title ">Kare</h5>
							<span>x=4</span>
 						</div>
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center"> Alan<span class="badge bg-primary rounded-pill"><?=$kare->alan()?></span> </li>
							<li class="list-group-item d-flex justify-content-between align-items-center"> Çevre <span class="badge bg-primary rounded-pill"><?=$kare->cevre()?></span> </li>
						</ul>
					</div>	
				</div>
				<div class="col-4">         
					<div class="card" style="width: 18rem;">
 						<div class="card-body text-center">
							<h5 class="card-title ">Dikdörtgen</h5>
							<span>x=4 AND y=6</span>
 						</div>
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center"> Alan<span class="badge bg-primary rounded-pill"><?=$dikdortgen->alan()?></span> </li>
							<li class="list-group-item d-flex justify-content-between align-items-center"> Çevre <span class="badge bg-primary rounded-pill"><?=$dikdortgen->cevre()?></span> </li>
						</ul>
					</div>	
				</div> 
				<div class="col-4">         
					<div class="card" style="width: 18rem;">
 						<div class="card-body text-center">
							<h5 class="card-title ">Üçgen</h5>
							<span>x=3 AND y=4 AND z=5</span>
 						</div>
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center"> Alan<span class="badge bg-primary rounded-pill"><?=$ucgen->alan()?></span> </li>
							<li class="list-group-item d-flex justify-content-between align-items-center"> Çevre <span class="badge bg-primary rounded-pill"><?=$ucgen->cevre()?></span> </li>
						</ul>
					</div>	
				</div>                               	
			</div>
		</div>
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>