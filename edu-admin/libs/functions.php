<?php  

	require_once "config.php";

	// Create a Grad 
	function checkGrad($mark) {
		if( $mark >= 0 && $mark <= 32){
			$grad = 'F';
		}elseif($mark >= 33 && $mark <= 39){
			$grad = 'D';
		}elseif($mark >= 40 && $mark <= 49){
			$grad = 'C';
		}elseif($mark >= 50 && $mark <= 59){
			$grad = 'B';
		}elseif( $mark >= 60 && $mark <= 69 ){
			$grad = 'A-';
		}elseif($mark >= 70 && $mark <= 79){
			$grad = 'A';
		}elseif($mark >= 80 && $mark <= 100){
			$grad = 'A+';
		}else {
			$grad = 'Invalid';
		}

		return $grad;
	}



	// For  GPA Cal
	function checkGpa($mark ){

		if( $mark >= 0 && $mark <= 32){
			$grad = '0';
		}elseif($mark >= 33 && $mark <= 39){
			$grad = '1';
		}elseif($mark >= 40 && $mark <= 49){
			$grad = '2';
		}elseif($mark >= 50 && $mark <= 59){
			$grad = '3';
		}elseif( $mark >= 60 && $mark <= 69 ){
			$grad = '3.5';
		}elseif($mark >= 70 && $mark <= 79){
			$grad = '4';
		}elseif($mark >= 80 && $mark <= 100){
			$grad = '5';
		}else {
			$grad = 'Invalid';
		}

		return $grad;

	}

	// Calculate CGPA
	function checkCgpa($ban_gpa, $eng_gpa, $math_gpa, $s_gpa, $ss_gpa, $r_gpa){

		$total_gpa = $ban_gpa + $eng_gpa +  $math_gpa + $s_gpa + $ss_gpa + $r_gpa;

		$cgpa = $total_gpa / 6;

		return $cgpa;
	} 

	// Check  result 
	function checkResult($ban_gpa, $eng_gpa, $math_gpa, $s_gpa, $ss_gpa, $r_gpa){

      if( $ban_gpa == 0 || $eng_gpa == 0 || $math_gpa == 0 || $s_gpa == 0 ||
	      $ss_gpa == 0 || $r_gpa == 0   ){
		$result = "Failed";
		}else{
		$result = "Passed";
		}

		return $result;
	}

	// Grade check 
function checkGrade($student_cgpa , $ban_gpa, $eng_gpa, $math_gpa, $s_gpa, $ss_gpa, $r_gpa) {

		if( $ban_gpa == 0 || $eng_gpa == 0 || $math_gpa == 0 || $s_gpa == 0 ||
		    $ss_gpa == 0 || $r_gpa == 0   ){
			$grade = 'F';
		}else{
			if($student_cgpa == 5){
				$grade = 'A+';
			}elseif( $student_cgpa >= 4 && $student_cgpa < 5 ){
				$grade = 'A';
			}elseif($student_cgpa >= 3.5 && $student_cgpa < 4 ){
				$grade = 'A-';
			}elseif($student_cgpa >= 3 && $student_cgpa < 3.5){
				$grade = 'B';
			}elseif($student_cgpa >= 2 && $student_cgpa < 3){
				$grade = 'C';
			}elseif($student_cgpa >= 1 && $student_cgpa < 2){
				$grade = 'D';
			}else{
				$grade = 'F';
			}
		}

		return $grade;

	}


	// Check result 
	function resultCheck($roll, $reg,  $conn ) {
		$sql = "SELECT * FROM students_results WHERE roll= '$roll' AND reg='$reg'";
		$data = $conn  -> query($sql);

		return $data -> num_rows;

	}
 
?>