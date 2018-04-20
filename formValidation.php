<?php	
	if(isset($_POST['action']) && $_POST['action'] == 'application'){
		$name = $_POST['fname'];
		$nationality = $_POST['nationality'];
		$cname = $_POST['cname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$type = $_POST['type'];
		$fmember = $_POST['fmember'];
		$dOff = $_POST['dOff'];
		$address = $_POST['address'];
		$staffs = $_POST['staff'];
		$salary = $_POST['salary'];
		$english = $_POST['english'];
		$hSize = $_POST['hSize'];
		$gender = $_POST['gender'];
		$pet = $_POST['pet'];
		$staffArray = array();
		foreach($staffs as $staff){
			$staffArray[] = $staff;
		};
		if(!empty($name) && !empty($nationality) && !empty($email) && !empty($phone) && !empty($type) && !empty($fmember) && !empty($dOff) && !empty($address) && !empty($staffArray) && !empty($salary) && !empty($english) && !empty($hSize) && !empty($gender) && !empty($pet)){
				for($i = 0; $i < 2; $i++){
					if($i == 0){
						$to = $email;
					}else{
						//$to = 'info@domesticforyou.com';\
						$to = 'rickysingh.random@gmail.com';
					};
					$subject = 'Application Form '. $type;
					$headers = "From: support@domesticforyou.com\r\n" ;
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
					$message = "<html></body>";
					$message .= "<head><style>";
					$message .= "html{font-family:verdana;}";
					$message .= "p{font-size:12px;line-height:1.4;}";
					$message .= "td{font-size:12px;line-height:1.4;padding:10px 7px}";
					$message .= "tr:nth-child(odd){background:#f1f1f1}";
					$message .= "table{width:100%;max-width:400px;}";
					$message .= "h2{font-size:14px;color:#3a3a3a}";
					$message .= "li{font-size:11px;line-height:1.4;margin-bottom:5px;color:#3a3a3a;}";
					$message .= "</style></head>";
					$message .= "<p>Greeting From Domestic For You,</p>";
					$message .= "<p>Thank you ".$name." for filling the details for your domestic help requirement, we have";
					$message .= "received your application form and have started working on finding the best domestic worker for";
					$message .= "you. You can review your form below:</p>";
					$message .= "<br>";
					$message .= "<table>";
					$message .= "<tr><td>Full Name:</td><td>".$name."</td></tr>";
					$message .= "<tr><td>Nationality:</td><td>".$nationality."</td></tr>";
					$message .= "<tr><td>Company Name:</td><td>".$cname."</td></tr>";
					$message .= "<tr><td>Email Address:</td><td>".$email."</td></tr>";
					$message .= "<tr><td>Number:</td><td>".$phone."</td></tr>";
					$message .= "<tr><td>Address:</td><td>".$address."</td></tr>";
					$message .= "<tr><td>Family Members:</td><td>".$fmember."</td></tr>";
					$message .= "<tr><td>Off per Month:</td><td>".$dOff."</td></tr>";
					$message .= "<tr><td>Staff Required:</td><td>".implode(', ', $staffArray)."</td></tr>";
					$message .= "<tr><td>Gender:</td><td>".$gender."</td></tr>";
					$message .= "<tr><td>English:</td><td>".$english."</td></tr>";
					$message .= "<tr><td>House Size:</td><td>".$hSize."</td></tr>";
					$message .= "<tr><td>Do you have pet:</td><td>".$pet."</td></tr>";
					$message .= "<tr><td>Salary:</td><td>".$salary."</td></tr>";
					$message .= "<tr><td>Type:</td><td>".$type."</td></tr>";
					$message .= "<tr><td>Submitted on:</td><td>".date('Y-m-d')."</td></tr>";
					$message .= "</table>";
					$message .= "<h2>Terms & Condition</h2>";
					$message .= "<ul>";
					if($type == 'Live In'){
						$message .= "<li>The Environment should be safe and they should treated with respect</li>";
						$message .= "<li>Domestic Worker required minimum 2 Days of in a month.</li>";
						$message .= "<li>Live In domestic workers the employer should provide a sepearate servant quater equiped with all the basic neccessity and access to safe drinking water with attached bathroom.</li>";
						$message .= "<li>If the woking timings exceed 10 Hrs, then the domestic worker should get atleast 1 - 2 Hrs of break for Lunch and to Rest.</li>";
						$message .= "<li>The employer is also responsible for making sure that the domestic workers gets fresh and healthy food everytime.</li>";
					}else if($type == 'Overseas'){
						$message .= "<li>The Environment should be safe and they should treated with respect and dignity</li>";
						$message .= "<li>Domestic Worker required weekly off.</li>";
						$message .= "<li>A Lunch break of 1 hours will be provided to them.</li>";
						$message .= "<li>For Domestic workers the employer should provide a separate servant quarter equipped with all the basic necessity and access to safe drinking water with attached bathroom.</li>";
						$message .= "<li>The employer is also responsible for making sure that the domestic workers gets fresh and healthy food every time and medical facilities.</li>";
					}else{
						$message .= "<li>The Environment should be safe and they should treated with respect</li>";
						$message .= "<li>Timing for live-out candidates will be 8 – 9 Hours a day.</li>";
						$message .= "<li>Domestic Worker required weekly off.</li>";
						$message .= "<li>A Lunch break of 30 minutes will be provided to them.</li>";
						$message .= "<li>Overtime charges will apply which is Rs. 100/Hr.</li>";
					}
					$message .= "</ul>";
					$message .= "<h2>Procedure</h2>";
					$message .= "<ol>";
					$message .= "<li>Once we receive the application form with the filled details about your ".$type." domestic help requirement, we will get in touch with you to understand your requirement much better within 24 working hours.</li>";
					$message .= "<li>After we understand you requirement, we will share the profiles of the candidates who all are suitable as per your domestic help requirement within 24 Hours.</li>";
					if($type == 'Overseas'){
						$message .= "<li>For further interviewing the candidates, the employer should pay a non-refundable registration fees of Rs. 5000 (Inclusive of GST) which will be valid for one year.</li>";
					}else{
						$message .= "<li>For further interviewing the candidates, the employer should pay a non-refundable registration fees of Rs. 2500 (Inclusive of GST) which will be valid for one year.</li>";
					}
					$message .= "<li>After receiving the registration fees our team member will set up interview with the candidates whose profiles has been shared with you at the best convenient time at your residence.</li>";
					$message .= "<li>Once interview done, candidate selected, we will scheduled the trail for 3 – 4 Days with the selected candidate. Trial will be taken into consideration for which the employer should pay the worker a total of Rs.500 per day trail.</li>";
					$message .= "<li>After completing the trial the employer should inform Domestic For You, if they would like to retain the worker but the final decision about the hiring will be done by Domestic For You after assuring that the domestic worker would also like to work for the employer.</li>";
					$message .= "<li>After receiving confirmation from client and domestic worker, the employer must pay the non-refundable hiring fee which is equivalent to One and Half Month salary plus GST of 18% which will be sent to you. Payment must be made within 2 working days from the date of invoice.</li>";
					$message .= "<li>Payment must be made within 2 working days from the issue date of the invoice in order to avail of your guarantee period.</li>";
					$message .= "</ol>";
					$message .= "<br>";
					$message .= "<h2>Replacement</h2>";
					$message .= "<ol>";
					$message .= "<li>If the domestic worker leaves the job for any reason or if the employer asks the domestic worker to leave the job, we will do our best to provide you the 3 free replacements of the domestic worker.</li>";
					if($type == 'Overseas'){
						$message .= "<li>After 1 year replacement will be charged as 45 days salary of salary worker with the Indian GST of 18%. And complete registration fees of 5000 (inclusive of 18% GST)</li>";
					}else{
						$message .= "<li>After 1 year replacement will be charged as 45 days salary of salary worker with the Indian GST of 18%. And complete registration fees of 2500 (inclusive of 18% GST)</li>";
					}
					$message .= "<li>We will provide only 3 replacements in the period of 1 year.</li>";
					$message .= "</ol>";
					$message .= "<br/>";
					$message .= "<h2>Note:</h2>";
					$message .= "<ol>";
					$message .= "<li>We cannot hold the domestic worker and they are also free to go for the interview with any potential client until assigned for trail.</li>";
					$message .= "<li>Domestic For You brief the candidates who all are sent for the interview or trail about the requirement of the employer however we are not responsible if candidates changes their mind during interview or trail</li>";
					$message .= "<li>Domestic For You will providing replacement for a maximum number of 2 times.</li>";
					$message .= "</ol>";
					$message .= "<br/>";
					$message .= "<h2>Payment</h2>";
					$message .= "<p>Currently we accept only the following modes of payment</p>";
					$message .= "<ul>";
					$message .= "<li>Cash</li>";
					$message .= "<li>Cheque</li>";
					$message .= "<li>Online Transfer (Contact Domestic For You for bank details )</li>";
					$message .= "</ul>";
					$message .= "<br>";
					$message .= "<p>I ".$name." agree to terms and conditions</p>";
					$message .= "<br>";
					$message .= "<p>Our Customer Care team will contact within 24 Hours after reviewing the application form filled by you.</p>";
					$message .= "<p>You can reach to us on info@domesticforyou.com or may contact us on +91-8800590666.</p>";
					$message .= "<p>Regards</p>";
					$message .= "<p>Domestic For You Pvt Ltd</p>";
					$message .= "</body></html>";
					mail($to, $subject, $message, $headers);	
				};
				echo 'success';
		}else{
			echo 'There was an error, Please try again.';
		};
	}else{
		die('No Milk & Cookie for you.');
	};
?>