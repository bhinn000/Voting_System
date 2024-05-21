insert into `mayor_vote_received` (`Apple` ,`Motorola` , `Samsung` , `Mi` , `Oppo` , `Nokia`) values ('0' ,'0' ,'0' ,'0' ,'0' ,'0'  );

CREATE TABLE mayor_vote_received (
  Apple NUMBER(3),
  Motorola NUMBER(3),
  Samsung NUMBER(3),
  Mi NUMBER(3),
  Oppo NUMBER(3),
  Nokia NUMBER(3)
);



$sql_mayor="SELECT * from mayor_vote_received";

	$query_mayor=mysqli_query($conn , $sql_mayor);
	if(!$query_mayor){
		echo "Problem with making query";
	} 

	if (mysqli_num_rows($query_mayor) > 0) {
		while($row = mysqli_fetch_assoc($query_mayor)) {
			echo "For mayor";
			$vote_apple= $row["Apple"];
			$vote_motorola= $row["Motorola"];
			$vote_samsung= $row["Samsung"];
			$vote_mi= $row["Mi"];
			$vote_nokia= $row["Nokia"];	
			$max_vote = max($vote_apple, $vote_motorola, $vote_samsung, $vote_mi, $vote_nokia);

			if ($max_vote == $vote_apple) {
				$winner = "Apple";
			} elseif ($max_vote == $vote_motorola) {
				$winner = "Motorola";
			} elseif ($max_vote == $vote_samsung) {
				$winner = "Samsung";
			} elseif ($max_vote == $vote_mi) {
				$winner = "Mi";
			} elseif ($max_vote == $vote_nokia) {
				$winner = "Nokia";
			} else {
				$winner = "No winner";
			}
			echo $max_vote;
			echo $winner;	

			$sql_winner="select * from mayor_details where party='$winner' ";
			$query_winner=mysqli_query($conn , $sql_winner);
			if(!$query_winner){
				echo "Problem with making query";
			} 
			if (mysqli_num_rows($query_winner) > 0) {
				
				while($row = mysqli_fetch_assoc($query_winner)) {
					echo "Ram";
					echo $row["Mayor_id"];
					echo $row["Mayor_name"];
					echo $row["Address"];
					echo $row["Party"];
					echo $max_vote;

				}
				
			}

		}
		
	}


  $position_id
					$position_name
					$position_address
					$party