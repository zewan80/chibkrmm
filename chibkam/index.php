<!DOCTYPE html>
<html lang = "en">
	<head>
		<title> chibkrm</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		
		<link rel = "stylesheet" type = "text/css" href = "css/home.css" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	</head>
<body ng-app>	
	
		<div class = banner-area>

			<div class= topmenu>
		
				<a class = "active" href = "index.php">Home</a>
				<a href = "aboutus.php">About us</a>
				<a href = "contactus.php">Contact us</a>		
				<a href = "products.php">Products</a>
				<a href = "rulesandregulation.php">Regulation</a></li>
		
			</div>
			
			<br>
			<br><br><br><br>
			<div class =content_area>
				<div class=content>
					<h2> Select Your vehicle </h2>
					<div class="container">
    
						<hr/>
						<div ng-controller="carsList" name= "webpage">
							<label>Cars</label>
							<select class="form-control" id="car" ng-model="models" ng-options="car for (car, models) in cars">
								<option value=''>Select Car</option>
							</select>
							</br>
							<label>Models</label>
							<select class="form-control" ng-disabled="!models" ng-model="variants" ng-options="model for (model,variant) in models">
								<option value=''>Select Model</option>
							</select>
							</br>
							<label>Variants</label>
							<select href='#' value='variant' class="form-control" id="variant" ng-disabled="!variants || !models" ng-model="variant">
								<option value=''>Select Variant </option>
								<option  ng-repeat="variant in variants" value='carmodels/ford.php'>{{variant}}</option>
								<option value='aboutus.php'>
							</select>
							
							

						</div>
					</div>


						
					
					
				</div>	
				
			</div>
				
		</div>
		<br>
		

	
	<br />
	<div  class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body" id="picture">
				<strong><h2>Brands</h2></strong>
				<br />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<a href="carmodels/bmw.php"><img src = "images/gallery/1.jpg" width = "250" height = "250"/> </a>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/Audi.php"><img src = "images/gallery/2.jpg" width = "250" height = "250"/></a>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/jaguar.php"><img src = "images/gallery/3.jpg" width = "250" height = "250"/></A>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/toyota.php"><img src = "images/gallery/4.jpg" width = "250" height = "250"/></a>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/ford.php"><img src = "images/gallery/5.jpg" width = "250" height = "250"/></a>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/nissan.php"><img src = "images/gallery/6.jpg" width = "250" height = "250"/></a>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/mercedes.php"><img src = "images/gallery/7.jpg" width = "250" height = "250"/></a>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
				<a href="carmodels/alfaromeo.php"><img src = "images/gallery/8.jpg" width = "250" height = "250"/></a>
				</div>
				<br style = "clear:both;" />
				<br />
				
				
</div>
				
</div>
			</div>
		</div>
	<br />
	
	
	<script >
function carsList($scope) {
    $scope.cars = {
        'BMW': {
            'M Series': ['M3 Sedan', 'Coupe', 'M5 Sedan', 'X5 M', 'M6 Gran Coupe'],
            '7 Series': ['730Ld Design Pure Excellence', '730Ld M Sport', '740Li DPE Signature', '750Li Design Pure Excellence (CBU)'],
            '6 Series': ['640d Eminence', '640d Design Pure Experience'],
            '5 Series': ['520d', '520d Luxury', '520i Luxury Line', '520d M Sport']
        },
		'Audi': {
            'A4': ['b8', 'b8.5', '1.8t', '2.0t', 'sedan'],
            'A5': ['b8', 'b8.5', '1.8t', '2.0t', 'sedan'],
            'A3': ['b8', 'b8.5', '1.8t', '2.0t', 'sedan'],
            'S8': ['d4 4.0t', 'd3', 'd3 v10 5.2']
        },
        'Jaguar': {
            'F Type': ['Coupe', 'V8 S', 'R Coupe'],
            'XF': ['Prestige Petrol', 'Prestige', 'R Supercharged 5.0 Litre V8 Petrol'],
            'XJ': ['3.0 L (D) Premium Luxury', '2.0 L (P) Portfolio', '3.0 L (D) Portfolio']
        },
		'Ford': {
            'F series': ['F-150', 'F-150 raptor', 'F-250'],
            'mustang': ['pristage', 'v6', ' 5.0 Litre','i4 turbo'],
            'explorer': ['3.0 L (D) Premium Luxury', '2.0 L (P) Portfolio', '3.0 L (D) Portfolio']
			
        },
		'Nissan': {
            'Altima': ['sv', 's', 'sr','sl'],
            'Sunny': ['2011', '2010', ' 2008'],
            'titan': ['3.0 L (D) Premium Luxury', '2.0 L (P) Portfolio', '3.0 L (D) Portfolio']
			
        },
		'Toyota': {
            'hilux': ['5person', 'RWD', '4x4'],
            'tacoma': ['v6 4x4', 'v8', ' 4x4'],
            'camry': ['se', 'limited', 'sl']
			
        },
		'Mercedes': {
            'S class': ['S63', 's500', 's350'],
            'G class': ['GLE', 'G63', ' G50'],
            'E class': ['E63', 'E300', 'E350']
			
        },
        'Alfa Romeo': {
            'Phantom': ['Coupe', 'Drophead Coupe', 'Phantom II', 'Extended Wheelbase'],
            'Dawn': ['Convertible'],
            'Ghost': ['6.6', 'Series II Extended Wheelbase']
        }
    };
}
</script>	
<script type ="text/javascript">
var urlMenu = document.getElementById('variant');
urlMenu.onchange = function()
{
var userOption = this.options[this.selectedIndex];
if (userOption.value != "nothing")
{
window.open(userOption.value, "", "");
}

}

</script>
</body>

</html>
