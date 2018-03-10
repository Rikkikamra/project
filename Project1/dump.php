<?php

			$json = file_get_contents('https://developer.goibibo.com/api/bus/search/?app_id=21395c6c&app_key=44fcdd6ea9cc967edf401f6e58040e06&format=json&source=mumbai&destination=nashik&dateofdeparture=20170420');
			$data = json_decode($json);



		?>


<!--div style="height:100%;
					max-width:20%;
					background-color:purple;
					margin-left:30px;
					box-shadow:2px 2px 5px #bbb, 4px 4px 10px #ccc;
					border-radius:5px;
					padding: 30px;
					box-sizing: border-box;
					color: white;
					font-size: 20px;
					letter-spacing: 2px;
					font-family: sans-serif;">

			<img src="price.png" height="25px" width="25px;"></img> Price<br>
			<br><hr><br>
			Bus Type 
			<form><br>
				<input type="checkbox" id="alltype" name="alltype" onclick="selectType()" />	All<br>
				<input type="checkbox" id="sleeper" name="sleeper"/>	Sleeper<br>
				<input type="checkbox" id="seater" name="seater"/>	Seater<br>
				<input type="checkbox" id="ac" name="ac"/>	AC<br>
				<input type="checkbox" id="nonac" name="nonac"/>	Non-AC<br>
			</form>
			<hr><br>
			Depart Time 
			<form><br>
				<input type="checkbox" id="alltime" name="alltime" onclick="selectTime()" />	All<br>
				<input type="checkbox" id="0-6" name="zero"/>	00:00 - 06:00<br>
				<input type="checkbox" id="6-12" name="six"/>	06:00 - 12:00<br>
				<input type="checkbox" id="12-18" name="twelve"/>	12:00 - 18:00<br>
				<input type="checkbox" id="18-0" name="eighteen"/>	18:00 - 00:00<br>
			</form>
			<hr><br>
			Bus Operators
			<form><br>
				<input type="checkbox" id="alloperator" name="all" onclick="selectOperator()" />	All<br>
				<input type="checkbox" id="ganga" name="ganga"/>	Ganga Travels<br>
				<input type="checkbox" id="yamuna" name="yamuna"/>	Yamuna Travels<br>
				<input type="checkbox" id="saraswati" name="saraswati"/>	Saraswati Travels<br>
			</form>
			<hr><br>

		</div><br><br-->