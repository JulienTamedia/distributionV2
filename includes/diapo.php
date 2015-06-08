<div id="diapo_img">
<div id="carre"></div>	
<img id="photo" src="./assets/img/photo.png">	




</div>






















<script  type="text/javascript">




	
	var imgArr=[];
	var currentImg=0;
	var img2load=0;
	var oldImg =0;
	function firstLoad(){
		
		//var imgArr=[];
		for (var iArr=0; iArr < 20 ;iArr++){
			imgArr[iArr]=0;
		}
		
		for (var i=1; i <7; i++){
			var img2load = Math.floor( Math.random() * 20 )
			while (imgArr[img2load]!=0){
				img2load = Math.floor( Math.random() * 20);
				
			}
			imgArr[img2load]=1;
			document.getElementById("img"+i).innerHTML = "<img src=\""+ img2load +".png\">"
			  
		}
		 setInterval(function(){ changeImages(); },2000);
	}
	
	function changeImages(){
			//if currentImg is bigger than array length restart to 0
			if (currentImg == 6){
				currentImg=0;
			}
			//move to the next box
			currentImg++;
			
			$("#img" + currentImg).fadeOut(300, function(){
				//alert(document.getElementById("img" + currentImg).innerHTML);	
				
				//get a random value smaller than 20
				img2load = Math.floor( Math.random() * 20 );
				//to avoid having twice the same picture
				while (imgArr[img2load]==1){
					img2load = Math.floor( Math.random() * 20);
					//console.log ("TRY again " +img2load);
					
				}
				
				/*console.log(currentImg);
				console.log(document.getElementById("img" + currentImg).innerHTML);*/
				
				//get the picture that will be replacer by another and change its value in array
				oldImg =  /\d+/.exec(document.getElementById("img" + currentImg).innerHTML);
				imgArr[oldImg]=0;
				
				//new picture gets flagged 
				imgArr[img2load]=1;
				//console.log("je change dimage");
				
				//change image			
				document.getElementById("img" + currentImg).innerHTML = "<img src=\""+ img2load +".png\">";
				
				//make the magic happen
				$("#img" + currentImg).fadeIn(300,function(){});
			});
			
	}
	  
	window.onload = function() {
		firstLoad();		
	};
	

	
</script>