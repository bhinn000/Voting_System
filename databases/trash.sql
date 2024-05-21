


function psw_linked_cid(){
	$sql2="select citizenss.name as Name, citizenss.c_id as C_ID from citizenss , voters where citizenss.c_id = voters.c_id and voters.voter_id= '$voter_id' ";

				$query2=mysqli_query($conn , $sql2);

				if(!$query2){
					echo "Problem with making query";
				}

				if (mysqli_num_rows($query2) > 0) {
					while($row = mysqli_fetch_assoc($query2)) {
						echo "Name: " .$row["Name"]. "<br>";
						echo "C_id: " . $row["C_ID"]. "<br>";
					}
				}
   }





$html = <<<HTML
					<h2>Mayor Election</h2>
					<div class="mayor">
						<p>Your current mayor is: $row[$position_name]</p>
					</div>
					<h2>Sub Mayor Election</h2>
					<div class="sub_mayor">
						<p>Your current sub mayor is: Jane Doe</p>
					</div>
					<h2>President Election</h2>
					<div class="president">
						<p>Your current president is: Joe Smith</p>
					</div>
					<h2>Vice President Election</h2>
					<div class="vicepresident">
						<p>Your current vice president is: Jane Smith</p>
					</div>
					HTML;



					echo $html;



  