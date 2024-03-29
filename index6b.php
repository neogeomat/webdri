
<html>
  <head>
    <title>WebDRI</title>
	<link rel="stylesheet" href="http://www.openlayers.org/api/2.11/theme/default/style.css" type="text/css">
	<script src="http://openlayers.org/api/2.12/OpenLayers.js" type="text/javascript"></script>
    <!--script src="../../openlayers-2.12/lib/OpenLayers.js"></script-->
    <script src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6.2&amp;mkt=en-us"></script> <!--This is required wrapper for the bing images-->
    <!--script src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script-->
    <script src="js/OSMMeta.js"></script>
    <script src="sessvars.js"></script>
    
    <script src="geocoder.js"></script>
    <script src="http://trac.osgeo.org/openlayers/export/12468/addins/loadingPanel/trunk/lib/OpenLayers/Control/LoadingPanel.js"></script>
    <style type="text/css">
        .olControlLoadingPanel {
            background-image:url(http://dev.openlayers.org/addins/loadingPanel/trunk/theme/default/img/loading.gif);
            margin-left: 30%;
            margin-top: 10%;
            position: absolute;
            width: 195px;
            height: 11px;
            background-position:center;
            background-repeat:no-repeat;
            display: none;
            z-index:15000;
        }
    </style>
    <style>
		html, body, #map {margin: 0; width: *; height: 95%; }
		//.tbl{font-size : 90%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; }
		//td{font-size : 90%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:200px }
		//td.small{font-size : 90%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:100px }
		//.selbox, .txtbox{font-size : 80%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:200px }
		//.txtboxSmall{font-size : 80%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:75px }
		
		//
		{font-
		:inherit;}
		
		.tbl{font-size : 90%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; }
		td{font-size : 90%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:130px }
		td.small{font-size : 90%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:130px }
		.selbox, .txtbox{font-size : 80%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:130px }
		.txtboxSmall{font-size : 80%;  font-family : "Myriad Web",Verdana,Helvetica,Arial,sans-serif;  background : #efe none; color : #630; width:75px }
		
		@media all and (min-width: 1001px) 
		{
			body{background-color:red}
			#title{position:fixed;margin-top:5px}
			#btnLocateMe{position:fixed;margin-top:5px;right:5px;}
			#btnsearch{position:fixed;margin-top:5px;right:90px;}
			
			#search{position:fixed;margin-top:5px;right:160px;}
			#map{position:fixed;top:30px;left:2px;right:2px;}
			#instructionline
			{
				border:2px;border-style:solid;border-radius:25px;
				text-align:center;
				position:relative;top:60px;margin-left:auto;margin-right:auto;
				mfont-size:12pt;font-family:sans-serif;
				background-color:#b0e0e6;width:40%;
				height:25px;
			}
			#relocater, #noSuchPlaceFound, #updated
			{
				vertical-align:middle;
				border:2px;border-style:solid;border-radius:25px;
				text-align:center;
				position:relative;top:30px;margin-left:auto;margin-right:auto;
				background-color:#b0e0e6;width:40%;
				mfont-size:12pt;font-family:sans-serif;height:25px;
			}
	
		}
		@media all and (min-width: 750px) and (max-width:1000px)
		{
			//html{zoom:020%}
			body{background-color:yellow;font-size:1.2em;}
			//input{font-size:1.2em}
			#title{position:fixed;margin-top:5px}
			#btnLocateMe{position:fixed;margin-top:5px;right:2px;}
			#btnsearch{position:fixed;margin-top:5px;right:90px;}
			
			#search{position:fixed;margin-top:5px;right:160px;width:150px}
			#map{position:fixed;top:30px;left:2px;right:2px;}
			#instructionline
			{
				border:2px;border-style:solid;border-radius:25px;
				text-align:center;
				position:relative;top:60px;margin-left:auto;margin-right:auto;
				mfont-size:16pt;font-family:sans-serif;
				background-color:#b0e0e6;width:40%;
				height:25px;
			}
			#relocater, #noSuchPlaceFound, #updated
			{
				vertical-align:middle;
				border:2px;border-style:solid;border-radius:25px;
				text-align:center;
				position:relative;top:30px;margin-left:auto;margin-right:auto;
				background-color:#b0e0e6;width:40%;
				mfont-size:12pt;font-family:sans-serif;height:25px;
				
			}

		}
		@media all and (min-width: 400px) and (max-width:749px)
		{
			html{zoom:200%}
			body{background-color:cyan;font-size:1.2em;}
			//input{font-size:1.2em}
			#title{position:fixed;margin-top:5px}
			#btnLocateMe{position:fixed;margin-top:5px;right:2px;}
			#btnsearch{position:fixed;margin-top:5px;right:90px;}
			
			#search{position:fixed;margin-top:5px;right:160px;width:150px}
			#map{position:fixed;top:30px;left:2px;right:2px;}
			#instructionline
			{
				border:2px;border-style:solid;border-radius:25px;
				text-align:center;
				position:relative;top:60px;margin-left:auto;margin-right:auto;
				mfont-size:16pt;font-family:sans-serif;
				background-color:#b0e0e6;width:40%;
				height:25px;
			}
			#relocater, #noSuchPlaceFound, #updated
			{
				vertical-align:middle;
				border:2px;border-style:solid;border-radius:25px;
				text-align:center;
				position:relative;top:30px;margin-left:auto;margin-right:auto;
				background-color:#b0e0e6;width:40%;
				mfont-size:12pt;font-family:sans-serif;height:25px;
				
			}

		}
		@media all and (max-width:399px) 
		{
			body{background-color:blue;font-size:20px}
			#title{position:fixed;margin-top:5px}
			#btnLocateMe{position:fixed;margin-top:5px;right:5px;}
			#btnsearch{position:fixed;margin-top:5px;right:90px;}
			
			#search{position:fixed;margin-top:5px;right:160px;}
			#map{position:fixed;top:30px;left:2px;right:2px;}
			#instructionline{text-align:center;position:relative;top:60px;margin-left:auto;margin-right:auto;mfont-size:12pt;font-family:sans-serif;background-color:#b0e0e6;width:40%}
			#relocater, #noSuchPlaceFound, #updated
			{
				text-align:center;position:relative;top:40px;margin-left:auto;margin-right:auto;background-color:#b0e0e6;width:40%;
				
			}

		}
		
		
	</style>
    <script type="text/javascript">
		//OpenLayers.ProxyHost= "/cgi-bin/proxy.cgi?url=";	
		//global variables
		var map, 
			selector1, 
			selector2,
			highlightor,
			selectedfeature, 
			facility, 
			building,
			building_url,
			facility_url,
			data_url, 
			boxes, 
			format, 
			popup, 
			styles, 
			field,
			text,
			geom;
		var markers = new OpenLayers.Layer.Markers( "Markers",{displayInLayerSwitcher:false} );
		
		var centerX = 85.33141;//491213.721224323//-123.1684986291807;//9497800;
		var centerY = 27.72223;//5456645.24607268//49.245339757767844;//3212000;
		var center = new OpenLayers.LonLat(centerX, centerY);
		if(sessvars.center)
		{
			center=new OpenLayers.LonLat(sessvars.center.lon, sessvars.center.lat);
		}
		var ranger = 0.015;//10000000//.5;//10000;
		var map_bound = [centerX-ranger,centerY-ranger,centerX+ranger,centerY+ranger];
		var extent = new OpenLayers.Bounds(map_bound[0],map_bound[1],map_bound[2],map_bound[3]);
		var zoom = 17;
		var zoom_data_limit = 18; // vector data will load only in this level or above
		
		//other options
		var proj4326 = new OpenLayers.Projection("EPSG:4326");
		var proj900913 = new OpenLayers.Projection("EPSG:900913");
		var popup;
		var attr = ["name","amenity","building"];
	
	function submit(){
		//alert(document.getElementById('name'));
	}
	
	/////////////////////*********Engaging***************///////////////////////
		/*var field = [
					{key:"building",alias:"Building",value:["N/A","commercial","residential","public_admin","health_facility","academic"]},
					{key:"building:typology",alias:"Building Typology",value:["N/A","Reinforced_Concrete_Frame","Mud_Packed"]},
					{key:"building:level",alias:"Storeys",value:["N/A","1","2","3","4","5"]},
					{key:"building:use",alias:"Use of Building",value:["N/A","Commercial","Residential","Public_Admin","Health_Facility","Academic"]},
					{key:"building:floor_type",alias:"Floor Type",value:["N/A","Concrete","Wood"]},
					{key:"building:roof_type",alias:"Roof Type",value:["N/A","Flat","Sloped"]},
					{key:"building:test",alias:"Test",value:["N/A","test1","test2"]}
					];*/
		
		/*var field = [
					{key:"building",alias:"Building",value:["N/A","kindergarten","school","college","university","hospital","clinic","nursing_home","health_post"]},
					
					{key:"building:age",alias:"Estimated Building Age",value:["N/A","After_2000","1990-2000","1960-1990","Before_1960"]},
					{key:"building:retrofit",alias:"Retrofitted",value:["N/A","Yes","No"]},
					{key:"building:owner",alias:"Owner",value:["N/A","Self","Rent"]},
					
					{key:"building:roof_slope",alias:"Roof Slope",value:["N/A","Flat","Sloped","Mixed"]},
					{key:"building:neighbour",alias:"Adjoining Buildings",value:["N/A","One_Side_Same_Height","One_Side_Different_Height","Two_Sides_Same_Height","Two_Sides_Different_Height","Three_Sides_Same_Height","Three_Sides_Different_Height","Free_Standing"]},
					{key:"building:shape:plan",alias:"Building Shape in Plan",value:["N/A","Rectangular","T-Shaped","L-Shaped","U-Shaped","Multi-Projected","Triangular"]},
					{key:"building:shape:elevation",alias:"Building Shape in Elevation",value:["N/A","Regular","Setback","Tall"]},
					{key:"building:condition",alias:"Visible Physical Condition",value:["N/A","Poor","Average","Good"]},
					{key:"building:soft_storey",alias:"Soft Storeys",value:["N/A","Yes","No"]},
					{key:"building:overhang",alias:"Overhangs",value:["N/A","Yes","No"]},
					
					{key:"building:level",alias:"Storeys",value:["N/A","1","2","3","4","5","6","7","8","9","&gt10"]},
					{key:"building:floor_material",alias:"Floor Material",value:["N/A","Wood","Bamboo","RCC/RBC","Jack_Arch","Others"]},
					{key:"building:roof_material",alias:"Roof Material",value:["N/A","Jhingati","Clay_Tiles","CGI","RCC/RBC","Others"]},
										
					{key:"building:structure",alias:"Structural System",value:["N/A","Non_Engineered_RC_Frame","Engineered_RC_Frame","Load_Bearing_Brick_Wall_in_Cement_Mortar","Load_Bearing_Brick_Wall_in_Mud_Mortar","Load_Bearing_Stone_Wall_in_Cement_Mortar","Load_Bearing_Stone_Wall_in_Mud_Mortar","Adobe","Mixed"]},
					{key:"earthquake_resistant_element",alias:"Earthquake Resistant Elements",value:["N/A","Yes","No","Partial"]}			
					];*/
		
		var field = [
					{key:"building",alias:"Building",value:["N/A","kindergarten","school","college","university","hospital","clinic","nursing_home","health_post"]},
					
					{key:"building:owner",alias:"Owner",value:["N/A","Self","Rent"]},
					{key:"building:age",alias:"Estimated Building Age",value:["N/A","After_2000","1990-2000","1960-1990","Before_1960"]},
					{key:"building:retrofit",alias:"Retrofitted",value:["N/A","Yes","No"]},
					{key:"building:level",alias:"Storeys",value:["N/A","1","2","3","4","5","6","7","8","9","&gt10"]},
									
					{key:"building:structure",alias:"Structural System",value:["N/A","Non_Engineered_RC_Frame","Engineered_RC_Frame","Load_Bearing_Brick_Wall_in_Cement_Mortar","Load_Bearing_Brick_Wall_in_Mud_Mortar","Load_Bearing_Stone_Wall_in_Cement_Mortar","Load_Bearing_Stone_Wall_in_Mud_Mortar","Concrete_Block_in_Cement_Mortar","Mud_Brick_in_Surkhi","Adobe","Mixed"]},
					{key:"building:floor_material",alias:"Floor Material",value:["N/A","Wood","Bamboo","RCC/RBC","Jack_Arch","Others"]},
					{key:"building:roof_slope",alias:"Roof Slope",value:["N/A","Flat","Sloped","Mixed"]},
					{key:"building:roof_material",alias:"Roof Material",value:["N/A","Jhingati","Clay_Tiles","CGI","RCC/RBC","Others"]},
					
					
					
					{key:"building:neighbour",alias:"Adjoining Buildings",value:["N/A","One_Side_Same_Height","One_Side_Different_Height","Two_Sides_Same_Height","Two_Sides_Different_Height","Three_Sides_Same_Height","Three_Sides_Different_Height","Free_Standing"]},
					{key:"building:shape:plan",alias:"Building Shape in Plan",value:["N/A","Rectangular","T-Shaped","L-Shaped","U-Shaped","Multi-Projected","Triangular","Narrow_and_Long"]},
					{key:"building:shape:elevation",alias:"Building Shape in Elevation",value:["N/A","Regular","Setback","Narrow_and_Tall"]},
					{key:"building:condition",alias:"Visible Physical Condition",value:["N/A","Poor","Average","Good"]},
					{key:"building:overhang",alias:"Overhangs",value:["N/A","Yes","No"]},
					{key:"building:soft_storey",alias:"Soft Storeys",value:["N/A","Yes","No"]},
					{key:"earthquake_resistant_element",alias:"Earthquake Resistant Elements",value:["N/A","Yes","No","Partial"]}			
					];
				
				
					
	function removepopup(){
		if(map.popups[0]){
			map.removePopup(map.popups[0]);
			//tweak
			document.getElementById('instructionline').style.display='block';
		}
	};
		//Tweaked
	
	function onFacilitySelect(feature)
		{
		/*
			//If we were using GET 
			var send="";
			for(var j in field)
			{
				//alert(field[j].key+"="+feature.attributes[j]);
				if(feature.attributes[field[j].key])
				send+=field[j].key+"="+feature.attributes[field[j].key]+"&";
			}
			send +="t="+Math.random();
			alert(send);
			/window.location="http://www.kathmandulivinglabs.org/webdri/form.php?"+send;
		*/	
				
		removepopup();
		//tweak
		document.getElementById('instructionline').style.display='none';
		
			selectedfeature = feature;
			//To determine the geometry type of the selected feature
			geom=feature.geometry.CLASS_NAME;
			//alert(geom)
			if(geom=="OpenLayers.Geometry.Polygon")
				geom="Polygon";
			else if (geom=="OpenLayers.Geometry.Point")
				geom="Point";
			//alert(geom);
			//Determine the amenity of the selected facility
			var amenity=selectedfeature.attributes['amenity'];
			//alert(amenity);
			
			var name = selectedfeature.attributes['name'];
			if(!name){
				name = selectedfeature.attributes['operator'];
			}
			else if(!name){
				name = '';
			}
			date = new Date(selectedfeature.attributes.timestamp);
			lag = new Date - date;
			text = "<h3>"+name+"</h3><p style='font-size:70%'>Last Updated on:" + date.toLocaleString()+ "</br>     "+Math.floor(lag/86400000)+" days "+Math.floor((lag%86400000)/3600000)+" hours ago"+ "</br>Last Updated by: "+selectedfeature.attributes['user']+"</p><form id='formStructuralData' method='post' action='test-sazal.php'>";
			//text+="<table class='tbl'>";
			
			////////////////*******Engaging***********/////////////////////
			if(amenity=="kindergarten" || amenity=="school" || amenity=="college" || amenity=="university")
			{
				var prevValue=selectedfeature.attributes['isced:level'];
				
				text+="<fieldset class='tbl'><legend>Level</legend>";
				text+="<table class='tbl'>";
				text+="<tr><td><input type='radio' name='isced:level' value='kindergarten' "+checkChecked('isced:level',selectedfeature,'kindergarten')+">Kindergarten</td>";
				text+="<td><input type='radio' name='isced:level' value='primary' "+checkChecked('isced:level',selectedfeature,'primary')+">Primary</td></tr>";
				text+="<tr><td><input type='radio' name='isced:level' value='lower_secondary' "+checkChecked('isced:level',selectedfeature,'lower_secondary')+">Lower Secondary</td>";
				text+="<td><input type='radio' name='isced:level' value='secondary' "+checkChecked('isced:level',selectedfeature,'secondary')+">Secondary</td></tr>";
				text+="<tr><td><input type='radio' name='isced:level' value='higher_secondary' "+checkChecked('isced:level',selectedfeature,'higher_secondary')+">Higher Secondary</td>";
				text+="<td><input type='radio' name='isced:level' value='college' "+checkChecked('isced:level',selectedfeature,'college')+">College</td></tr>";
				text+="<tr><td><input type='radio' name='isced:level' value='university' "+checkChecked('isced:level',selectedfeature,'university')+">University</td>";
				text+="<td><input type='radio' name='isced:level' value='others' "+checkChecked('isced:level',selectedfeature,'others')+">Others</td></tr>";
				text+="</table>";
				text+="</fieldset>";
				
				text+="<fieldset class='tbl'><legend>Type</legend>";
				text+="<table class='tbl'>";
				text+="<tr><td><input type='radio' name='management_type' value='government' "+checkChecked('management_type',selectedfeature,'government')+">Government</td>";
				text+="<td><input type='radio' name='management_type' value='private' "+checkChecked('management_type',selectedfeature,'private')+">Private</td>";
				text+="<td><input type='radio' name='management_type' value='community'"+checkChecked('management_type',selectedfeature,'community')+">Community</td>";
				text+="</table>";
				text+="</fieldset>";
				
				text+="<fieldset class='tbl'><legend>Misc</legend>";
				text+="<table class='tbl'>";
				text+="<tr><td>No of Teachers and Staff</td><td><input class='txtboxSmall' type='text' id='personnel' value='"+checkPrevious('personnel',selectedfeature)+"' /></td></tr>";
				text+="<tr><td>No of Students</td><td><input class='txtboxSmall' type='text' id='students' value='"+checkPrevious('students',selectedfeature)+"' /></td></tr>";
				text+="<tr><td>No of Buildings</td><td><input class='txtboxSmall' type='text' id='building_count' value='"+checkPrevious('building_count',selectedfeature)+"' /></td></tr>";
				text+="</table>";
				text+="</fieldset>";
			}
			else if(amenity=="hospital" || amenity=="clinic" || amenity=="nursing_home" || amenity=="health_post" || amenity=="dentist" )
			{
				text+="<fieldset class='tbl'><legend>Capacity</legend>";
				text+="<table class='tbl'>";
				text+="<tr><td>No of Beds</td><td><input class='txtboxSmall' type='text' id='beds' value='"+checkPrevious('beds',selectedfeature)+"' /></td></tr>";
				text+="<tr><td>No of Out Patients per day</td><td><input  class='txtboxSmall' type='text' id='out_patients' value='"+checkPrevious('out_patients',selectedfeature)+"' /></td></tr>";
				text+="<tr><td>No of Personnel</td><td><input class='txtboxSmall' type='text' id='personnel' value='"+checkPrevious('personnel',selectedfeature)+"' /></td></tr>";
				text+="<tr><td>No of Buildings</td><td><input class='txtboxSmall' type='text' id='building_count' value='"+checkPrevious('building_count',selectedfeature)+"' /></td></tr>";
				text+="</table>";
				text+="</fieldset>";
				
				text+="<fieldset class='tbl'><legend>Type</legend>";
				text+="<table class='tbl'>";
				text+="<tr><td><input type='radio' name='management_type' value='government' "+checkChecked('management_type',selectedfeature,'government')+">Government</td>";
				text+="<td><input type='radio' name='management_type' value='private' "+checkChecked('management_type',selectedfeature,'private')+">Private</td>";
				text+="<td><input type='radio' name='management_type' value='community' "+checkChecked('management_type',selectedfeature,'community')+">Community</td>";
				text+="</table>";
				text+="</fieldset>";
				
				text+="<fieldset class='tbl'><legend>Facilities</legend>";
				text+="<table class='tbl'>";
				
				text+="<tr><td><input type='hidden' name='facilities:OT' value='no' />OT</td>";
				text+="<td><input type='hidden' name='facilities:X-Ray'  value='no' />X-Ray</td></tr>";
				text+="<tr><td><input type='hidden' name='facilities:Ventilators' value='no' />Ventilators</td>";
				text+="<td><input type='hidden' name='facilities:ICU/CCU' value='no' />ICU/CCU</td></tr>";
				
				
				text+="<tr><td><input type='checkbox' name='facilities:OT' value='yes' "+checkChecked('facilities:OT',selectedfeature,'facilities:OT')+">OT</td>";
				text+="<td><input type='checkbox' name='facilities:X-Ray' value='yes' "+checkChecked('facilities:X-Ray',selectedfeature,'facilities:X-Ray')+">X-Ray</td></tr>";
				text+="<tr><td><input type='checkbox' name='facilities:Ventilators' value='yes' "+checkChecked('facilities:Ventilators',selectedfeature,'facilities:Ventilators')+">Ventilators</td>";
				text+="<td><input type='checkbox' name='facilities:ICU/CCU' value='yes' "+checkChecked('facilities:ICU/CCU',selectedfeature,'facilities:ICU/CCU')+">ICU/CCU</td></tr>";
				text+="</table>";
				text+="</fieldset>";
				
			}
			
			/*text+="<tr><td>Occupants (Day)</td><td><input class='txtbox' type='text' id='occupants:day' value='"+checkPrevious('occupants:day',selectedfeature)+"'/></td></tr>";
			text+="<tr><td>Occupants (Night)</td><td><input class='txtbox' type='text' id='occupants:night' value='"+checkPrevious('occupants:night',selectedfeature)+"'/></td></tr>";
			
			
			for (var i in field) 
			{	//lists all fieldibutes
                prop = field[i];
                val = selectedfeature.attributes[field[i].key];
                //alert(prop.key+val);
                //alert(val);
				text += "<tr><td>"+prop.alias+"</td><td><select class='selbox' id="+prop.key+" style='width: 200px' onchange='callTest(this)'>";
				for (var j in prop.value)
				{
					if(prop.value[j]==val)
					text +="<option selected='selected' value="+prop.value[j]+">"+prop.value[j]+"</option>";
					else
					text +="<option value="+prop.value[j]+">"+prop.value[j]+"</option>";
				}
				text+="</select></td></tr>";
				if(field[i].key=="building:structure" || field[i].key=="building:roof_material" || field[i].key=="building:floor_material" || field[i].key=="building:roof_slope" )
			{
				currKey=field[i].key+":others";
				
				if(val=="Mixed" || val=="Others")
					text +="<tr><td>Details*</td><td><input style='width:200px' type='text' id='"+currKey+"' value='"+checkPrevious(currKey,selectedfeature)+"' ></td></tr>";
				else	
					text +="<tr><td>Details*</td><td><input style='width:200px' type='text' id='"+currKey+"' value='"+checkPrevious(currKey,selectedfeature)+"' disabled='disabled'></td></tr>";
				
		
			}
            }
			text +="<tr><td>No of Bays in X</td><td><input class='txtbox' type='text' id='building:bay:x' value='"+checkPrevious('building:bay:x',selectedfeature)+"' /></td></tr>";
			text +="<tr><td>No of Bays in Y</td><td><input class='txtbox' type='text' id='building:bay:y' value='"+checkPrevious('building:bay:y',selectedfeature)+"' /></td></tr>";
			text +="<tr><td>Column Size</td><td><input class='txtbox' type='text' id='column:size' value='"+checkPrevious('column:size',selectedfeature)+"' /></td></tr>";
			text +="</table>";
			//text +="<input type='submit' value='submit'/>";
			//text +="<input id='save' type='button' value='Save' onClick='validateForm("+selectedfeature.osm_id+");removepopup();'/></form>";/*+"<a href='http://geowiki.com/iD/#layer=Bing&map="+19+"/"+selectedfeature.geometry.getCentroid().transform(proj900913,proj4326).y+"/"+selectedfeature.geometry.getCentroid().transform(proj900913,proj4326).x+"'>Edit Geometry with iD (experimental)</a>"*/
			text +="<input id='save' type='button' value='Save' onClick='alert(\"This app is currently decommissioned\");removepopup();'/></form>";
			//alert(text);
			
			//text +="<input id='save' type='button' value='Save' onClick='validateForm("+selectedfeature.osm_id+");removepopup();'/>";
			
			popup = new OpenLayers.Popup.FramedCloud(
				"chicken",
				selectedfeature.geometry.getBounds().getCenterLonLat(),
				//null,
				new OpenLayers.Size(250,500),
				text,
				null,
				true,
				onPopupClose
				
			);
			//popup.closeOnMove=true;
			//popup.panMapIfOutOfView=false;
			//feature.popup = popup;
			map.addPopup(popup);
			popup.updateSize();
			
			
		}
		function onFacilityUnselect(feature)
		{}
		
		function onFeatureSelect(feature) 
		{	
			var send="";
			for(var j in field)
			{
				//alert(field[j].key+"="+feature.attributes[j]);
				if(feature.attributes[field[j].key])
				send+=field[j].key+"="+feature.attributes[field[j].key]+"&";
			}
		send +="t="+Math.random();
		//alert(send);
		//window.location="http://www.kathmandulivinglabs.org/webdri/form.php?"+send;		
		removepopup();
		//To determine the geometry type of the selected feature
			geom=feature.geometry.CLASS_NAME;
			//alert(geom)
			if(geom=="OpenLayers.Geometry.Polygon")
				geom="Polygon";
			else if (geom=="OpenLayers.Geometry.Point")
				geom="Point";
			//alert(geom);
		//tweak
		document.getElementById('instructionline').style.display='none';
		
			selectedfeature = feature;
			var name = selectedfeature.attributes['name'];
			if(!name){
				name = selectedfeature.attributes['operator'];
			}
			if(!name){
				name = '';
			}
			date = new Date(selectedfeature.attributes.timestamp);
			lag = new Date - date;
			oid = selectedfeature.attributes.oid?selectedfeature.attributes.oid:"";
			text = "<h3>"+name+"	(Building oid: "+oid+")</h3>Last Updated on:  " + date.toLocaleString()+ "</br>     "+Math.floor(lag/86400000)+" days "+Math.floor((lag%86400000)/3600000)+" hours ago" + "</br>Last Updated by: "+selectedfeature.attributes['user']+"<form id='formStructuralData' method='post' action='test-sazal.php'>";
			text+="<fieldset class='tbl'><legend>Occupants</legend>";
			text+="<table class='tbl'>";
			
			////////////////*******Engaging***********/////////////////////
			text+="<tr><td>Occupants (Day)</td><td><input class='txtboxSmall' type='text' id='occupants:day' value='"+checkPrevious('occupants:day',selectedfeature)+"'/></td>";
			text+="<td>Occupants (Night)</td><td><input class='txtboxSmall' type='text' id='occupants:night' value='"+checkPrevious('occupants:night',selectedfeature)+"'/></td></tr>";
			text+="<tr><td>Occupants (Morning)</td><td><input class='txtboxSmall' type='text' id='occupants:morning' value='"+checkPrevious('occupants:morning',selectedfeature)+"'/></td>";
			text+="<td>Occupants (Evening)</td><td><input class='txtboxSmall' type='text' id='occupants:evening' value='"+checkPrevious('occupants:evening',selectedfeature)+"'/></td></tr>";
			text+="</table></fieldset>";
			
			text+="<fieldset class='tbl'><legend>Structural Data</legend>";
			text+="<table class='tbl'>";
			for (var i in field) 
			{	//lists all fieldibutes
                prop = field[i];
                val = selectedfeature.attributes[field[i].key];
                //alert(prop.key+val);
                //alert(val);
				text += "<tr><td>"+prop.alias+"</td><td><select class='selbox' id="+prop.key+" style='width: 200px' onchange='callTest(this)'>";
				for (var j in prop.value)
				{
					if(prop.value[j]==val)
					text +="<option selected='selected' value="+prop.value[j]+">"+prop.value[j]+"</option>";
					else
					text +="<option value="+prop.value[j]+">"+prop.value[j]+"</option>";
				}
				text+="</select></td></tr>";
				if(field[i].key=="building:structure" || field[i].key=="building:roof_material" || field[i].key=="building:floor_material" || field[i].key=="building:roof_slope" )
			{
				currKey=field[i].key+":others";
				
				if(val=="Mixed" || val=="Others")
					text +="<tr><td>Details*</td><td><input style='width:200px' type='text' id='"+currKey+"' value='"+checkPrevious(currKey,selectedfeature)+"' ></td></tr>";
				else	
					text +="<tr><td>Details*</td><td><input style='width:200px' type='text' id='"+currKey+"' value='"+checkPrevious(currKey,selectedfeature)+"' disabled='disabled'></td></tr>";
				
		
			}
			if(i==8)
			text+="</table></fieldset><fieldset class='tbl'><legend>Vulnerability Factors</legend><table class='tbl'>";
            }
			text +="<tr><td>No of Bays in X</td><td><input class='txtbox' type='text' id='building:bay:x' value='"+checkPrevious('building:bay:x',selectedfeature)+"' /></td></tr>";
			text +="<tr><td>No of Bays in Y</td><td><input class='txtbox' type='text' id='building:bay:y' value='"+checkPrevious('building:bay:y',selectedfeature)+"' /></td></tr>";
			text +="<tr><td>Column Size</td><td><input class='txtbox' type='text' id='column:size' value='"+checkPrevious('column:size',selectedfeature)+"' /></td></tr>";
			text +="</table>";
			text +="</fieldset>";
			//text +="<input type='submit' value='submit'/>";
			//text +="<input id='save' type='button' value='Save' onClick='validateForm("+selectedfeature.osm_id+");removepopup();'/></form>";/*+"<a href='http://geowiki.com/iD/#layer=Bing&map="+19+"/"+selectedfeature.geometry.getCentroid().transform(proj900913,proj4326).y+"/"+selectedfeature.geometry.getCentroid().transform(proj900913,proj4326).x+"'>Edit Geometry with iD (experimental)</a>"*/
			text +="<input id='save' type='button' value='Save' onClick='alert(\"This app is currently decommissioned\");removepopup();'/></form>";
			//alert(text);
			
			popup = new OpenLayers.Popup.FramedCloud(
				"chicken",
				selectedfeature.geometry.getBounds().getCenterLonLat(),
				null,
				text,
				null,
				true,
				onPopupClose
				
			);
			//popup.closeOnMove=true;
			//popup.panMapIfOutOfView=false;
			//feature.popup = popup;
			map.addPopup(popup,true);
		}
		
	function onPopupClose(evt) {
		removepopup();
	    selector1.unselectAll();
	    selector2.unselectAll();
	}
	
	function onFeatureUnselect(feature){
		removepopup();
	}
	//////////////**************Disengaging********************/////////////////////
	
	function loadXMLDOC(id){
		//alert(id);
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==3||xmlhttp.readyState==2||xmlhttp.readyState==1||xmlhttp.readyState==0)
			{
				//alert("Database Updated!");
				document.getElementById('updated').innerHTML="Saving Changes...";
				document.getElementById('updated').style.display="block";
					//setTimeout(function(){document.getElementById('updated').style.display="none";},2000);
			}
			if(xmlhttp.readyState==4)
			{
				//alert("Database Updated!");
				//alert(xmlhttp.status);
				document.getElementById('updated').style.display="block";
				document.getElementById('updated').innerHTML="Changes Saved";
					setTimeout(function(){document.getElementById('updated').style.display="none";},2000);
					//document.getElementById('updated').innerHMTL="Saving Changes...";
			}
			
			
		}
		
			var form = document.getElementById("formStructuralData");
			var query = "http://kathmandulivinglabs.org/webdri/updateOSM.php?id="+id+"&geom="+geom;
			for (var i=0; i<form.length-1; ++i) //form.length-1 because the last control is the submit button
			{
				//if(!document.getElementById(form.elements[i].id).disabled)
				if(form.elements[i].id)
				query += "&" + form.elements[i].id +"="+form.elements[i].value;
			}
			//To get elements-by-name like radio elements which cannot be used with id
			for (var i=0; i<form.length-1; ++i) //form.length-1 because the last control is the submit button
			{
				//if(!document.getElementById(form.elements[i].id).disabled)
				if(form.elements[i].name)
					if(form.elements[i].checked)
						query += "&" + form.elements[i].name +"="+form.elements[i].value;
				if(form.elements[i].name=="facilities:OT" || form.elements[i].name=="facilities:X-Ray" || form.elements[i].name=="facilities:Ventilators" || form.elements[i].name=="facilities:ICU/CCU")
					if(form.elements[i].value=="no")
						query += "&" + form.elements[i].name +"="+form.elements[i].value;
					
			}
			//
			query += "&t=" + Math.random();
			
			//alert(query);
			//window.location=query;
			
			//xmlhttp.open("GET","http://kathmandulivinglabs.org/webdri/updateOSM.php?"+query,true);
			xmlhttp.open("GET",query,true);
		//alert("opened");
			xmlhttp.send();
		
		/*
		alert ("http://localhost/AppEngine/updateOSM.php?" + query);
		xmlhttp.open("GET","http://localhost/AppEngine/updateOSM.php?"+query,true);
		
		xmlhttp.send();
		//window.location="http://localhost/AppEngineBeta/updateOSM.php?" + query;
		//alert("request sent");
		*/
	}
	////////////////////////**************Disengaging**********************///////////////////
	
	
	function validateForm(id)
	{
		//no validation required as of now
		loadXMLDOC(id);
	}
	
	function init(){
		//map configuration
        map = new OpenLayers.Map('map',{
			//allOverlays:true,
			maxExtent:extent,
			controls:[new OpenLayers.Control.Zoom(),
				/*new OpenLayers.Control.MousePosition({
					suffix:'',
					emptyString:'',
					displayProjection:new OpenLayers.Projection("EPSG:4015")
				}),*/
				new OpenLayers.Control.ScaleLine(),
				new OpenLayers.Control.Scale(),
				new OpenLayers.Control.Navigation(),
				new OpenLayers.Control.LayerSwitcher(),
				new OpenLayers.Control.Attribution()
			],
			projection:proj4326,
			displayProjection:proj900913
		});
		map.addControl( new OpenLayers.Control.LoadingPanel());
		bing = new OpenLayers.Layer.Bing({name: "Bing Aerial Layer",type: "Aerial",key: "AqTGBsziZHIJYYxgivLBf0hVdrAk9mWO5cQcb8Yux8sW5M8c8opEC2lZqKR1ZZXf",});
		osm = new OpenLayers.Layer.OSM("OSM",null,{attribution: "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a> contributors (ODbL)"});
		map.addLayer(osm);
		map.addLayer(bing);
		map.addLayer(markers);
		map.setCenter(center.transform(proj4326,proj900913),zoom);
		
		//OSM data layer
		///api/0.6/map?bbox=left,bottom,right,top
		//var osm_url = "http://openstreetmap.org/api/0.6/map?bbox=";
		//alert("/api/0.6/map?bbox=left,bottom,right,top"+extent.toString());
		//var data_url = osm_url+extent.toString();
		//alert(data_url);
		//document.getElementById('title').innerHTML = data_url;
		facility_url = "http://overpass-api.de/api/interpreter?data=(way['amenity'~'kindergarten|school|college|hospital|clinic|nursing_home|dentist|health$|health_post'](bbox);node(w);node['amenity'~'kindergarten|school|college|hospital|clinic|nursing_home|dentist|health_post'](bbox););out meta qt;";
		//building_url = "http://overpass-api.de/api/interpreter?data=(way['building'~'kindergarten|school|college|hospital|clinic|nursing_home'](bbox);node(w););out meta qt;"; //main working url
		//building_url = "http://overpass-api.de/api/interpreter?data=(way['building'](bbox);node(w););out meta qt;"; //main working url
        	//var data_url = "Ktm valley 2013-01-01_10-47.osm";
        	building_url = "http://overpass-api.de/api/interpreter?data=(  (    node(bbox)['name'~'kindergarten$|school$|college$|hospital$|clinic$|health'];  );  (    node(bbox)['building'~'kindergarten|school|college|government|hospital|clinic|health$'];  );  (    node(bbox)['amenity'~'kindergarten|school|college|public_building|hospital|clinic|health'];  );  (    node(bbox)['office'~'government'];  );  (    way(bbox)['name'~'kindergarten$|school$|college$|hospital$|clinic$|health$'][building];    node(w);  );    (    way(bbox)['building'~'kindergarten|school|college|government|hospital|clinic|health_post|dentist'];    node(w);  );  (    way(bbox)['amenity'~'school|college|public_building|hospital|clinic|health_post'];    node(w);  );  ) ->.a;(way(around .a : 1)[building];node(w);); out meta qt;";
		
		building = new OpenLayers.Layer.Vector("Building", {
			strategies: [new OpenLayers.Strategy.BBOX({ratio:1.0}),new OpenLayers.Strategy.Refresh()],
			protocol: new OpenLayers.Protocol.HTTP({
				url: building_url,   //<-- relative or absolute URL to your .osm file
				format: new OpenLayers.Format.OSMMeta()
			}),
			projection: new OpenLayers.Projection("EPSG:4326"),
			styleMap: new OpenLayers.StyleMap({'default':new OpenLayers.Style({'strokeWidth': 1,fillColor:"grey"})})
		});
		
		facility = new OpenLayers.Layer.Vector("Facility", {
			strategies: [new OpenLayers.Strategy.BBOX({ratio:1.0}),new OpenLayers.Strategy.Refresh()],
			protocol: new OpenLayers.Protocol.HTTP({
				url: facility_url,   //<-- relative or absolute URL to your .osm file
				format: new OpenLayers.Format.OSMMeta()
			}),
			projection: new OpenLayers.Projection("EPSG:4326")
		});

		map.addLayers([building,facility]);
		
		/*map.events.on({
			"zoomend":function(e){
				removepopup();
				if(this.getZoom()>=zoom_data_limit){        //sufficiently zoomed in now load vertor data
					document.getElementById('instructionline').innerHTML = "Loading";
					if(!map.getLayersByName("Building")[0]){
						if(map.baseLayer.name=="OSM"){
							//if(confirm("Do you want to change to Bing Satellite Image?")){
								//map.setBaseLayer(bing);
							//}
						}
						map.addLayer(building);
					}
					document.getElementById('instructionline').innerHTML = "Click on the Building";
				}
				else{
					if(map.getLayersByName("Building")[0]){
						if(map.baseLayer.name=="Bing Aerial Layer"){
							//if(confirm("Do you want to change to OSM Layer?")){
								//map.setBaseLayer(osm);
							//}
						}
						map.removeLayer(building);						
						document.getElementById('instructionline').innerHTML = "Please Zoom In";
					}
				}
			}
		});	
		*/
		//this part shows the bounding boxes of the map
		/*var boxes = new OpenLayers.Layer.Vector("Extent",{
			projection: new OpenLayers.Projection("EPSG:900913")
		});
		
		boxes.addFeatures([new OpenLayers.Feature.Vector(
			extent.transform(proj4326,proj900913).toGeometry()
		)]);
		map.addLayers([boxes]);
		//map.zoomToExtent(extent);
		*/
		//controls		
		selector1 = new OpenLayers.Control.SelectFeature(building,{
			onSelect: onFeatureSelect,
			onUnselect: onFeatureUnselect
		});
		map.addControl(selector1);
		highlightor =new OpenLayers.Control.SelectFeature(building,{
			hover:true,
			highlightOnly:true,
			autoActivate:true
					
			
		}); 
		map.addControl(highlightor);
		selector2 = new OpenLayers.Control.SelectFeature(facility,{
			onSelect: onFacilitySelect,
			onUnselect: onFacilityUnselect
			//hover:true
		});
		map.addControl(selector2);
		selector2.activate();
		
		map.events.on({"moveend":function(){
			//alert("map paneed or moved");
			sessvars.center = map.getExtent().getCenterLonLat().transform(proj900913,proj4326);
			//alert("Moved To: "+sessvars.center.lon +" " + sessvars.center.lat);
			}});
    }
    
    //window.onresize=resized;
    
    function resized()
    {
   		//document.getElementById('resolution').innerHTML=(screen.height)+" X " +(screen.width);
   		}
   		
   function callTest(element)
   {
   	if(element.id=="building:structure" || element.id=="building:roof_material" || element.id=="building:floor_material" || element.id=="building:roof_slope")
   	{
   		newId=element.id+":others";
   		if(element.options[element.selectedIndex].value=="Mixed" || element.options[element.selectedIndex].value=="Others")
   		{
   			document.getElementById(newId).disabled=false;
   		}
   		else
   		{
   			document.getElementById(newId).value="";
   			document.getElementById(newId).disabled=true;
   			
   		}
	}
   }
   
   function checkPrevious(id, selectedfeature)
	{
		//alert("id:"+id);
		if(selectedfeature.attributes[id])
			return selectedfeature.attributes[id];
		else
			return "";
	}
	
function checkChecked(id, selectedfeature,currValue)
{
	//alert(selectedfeature.attributes[id] +" "+ currValue);
	if(selectedfeature.attributes[id]==currValue || selectedfeature.attributes[id]=="yes")
		return "checked";
	else
		return '';
}
    	
    
    </script>
  </head>
<body onload="init()">
	<div id="resolution"></div>
	<!--<h3 id="title" >WebDRI </h3>-->
	<input type='radio' id='radFacility' value='Facility Wise' checked='checked' onClick='selector1.deactivate();selector2.activate();' name='toggle' defaultChecked='yes'/><label for='radFacility'>Facility</label>
	<input type='radio' id='radBuilding' value='Building Wise' onClick='selector2.deactivate();selector1.activate();' name='toggle'/><label for='radBuilding'>Building</label>
	
	
	
	<input type='text' id='search' value='Type Address here' onFocus='document.getElementById("search").value=""' onkeydown="if (event.keyCode == 13) document.getElementById('btnSearch').click()"/>
	<input type='button' id="btnSearch" value="Search" onClick="geocoder()"/>
	<input type='button' id="btnLocateMe"  value="Locate me" onClick="geolocate()"/>
	<div id="map" ></div>
	
	<div id="instructionline">Please Zoom In<input type="button" height="15px" value="Adujst zoom level" title="Adujsts the zoom so that buildings can be loaded." onclick="map.zoomTo(18)"/></div>
	
	<div id="relocater" hidden="hidden">Relocating...</div>
	<div id="noSuchPlaceFound" hidden="hidden">No such place found!</div>
	<div id="updated" hidden="hidden">Saving Changes...</div>	
</body>
</html>