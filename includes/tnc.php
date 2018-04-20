<?php

class Terms{

	public $termsLiveOut = "<ul>
								<li>The Environment should be safe and they should treated with respect and dignity</li>
								<li>Timing for live-out candidates will be 8 – 9 Hours a day.</li>
								<li>Domestic Worker required weekly off.</li>
								<li>A Lunch break of 30 minutes will be provided to them.</li>
								<li>Overtime charges will apply which is Rs. 100/Hr.</li>
							</ul>";

	public $termsLiveIn = "<ul>
								<li>The Environment should be safe and they should treated with respect and dignity</li>
								<li>Domestic Worker required minimum 2 Days of in a month.</li>
								<li>Live In domestic workers the employer should provide a sepearate servant quater equiped with all the basic neccessity and access to safe drinking water with attached bathroom.</li>
								<li>If the woking timings exceed 10 Hrs, then the domestic worker should get atleast 1 - 2 Hrs of break for Lunch and to Rest.</li>
								<li>The employer is also responsible for making sure that the domestic workers gets fresh and healthy food everytime.</li>
							</ul>";

	public $termsOverseas = "<ul>
								<li>The Environment should be safe and they should treated with respect and dignity</li>
								<li>Domestic Worker required weekly off.</li>
								<li>A Lunch break of 1 hours will be provided to them.</li>
								<li>For Domestic workers the employer should provide a separate servant quarter equipped with all the basic necessity and access to safe drinking water with attached bathroom.</li>
								<li>The employer is also responsible for making sure that the domestic workers gets fresh and healthy food every time and medical facilities.</li>
							</ul>";

	public $procedure = "<ol>
							<li>Once we receive the application form with the filled details about your domestic help requirement, we will get in touch with you to understand your requirement much better within 24 working hours.</li>
							<li>After we understand you requirement, we will share the profiles of the candidates who all are suitable as per your domestic help requirement within 24 Hours.</li>
							<li>For further interviewing the candidates, the employer should pay a non-refundable registration fees of Rs. 2500 (Inclusive of GST) which will be valid for one year.</li>
							<li>After receiving the registration fees our team member will set up interview with the candidates whose profiles has been shared with you at the best convenient time at your residence.</li>
							<li>Once interview done, candidate selected, we will scheduled the trail for 3 – 4 Days with the selected candidate. Trial will be taken into consideration for which the employer should pay the worker a total of Rs.500 per day trail.</li>
							<li>After completing the trial the employer should inform Domestic For You, if they would like to retain the worker but the final decision about the hiring will be done by Domestic For You after assuring that the domestic worker would also like to work for the employer.</li>
							<li>After receiving confirmation from client and domestic worker, the employer must pay the non-refundable hiring fee which is equivalent to One and Half Month salary plus GST of 18% which will be sent to you. Payment must be made within 2 working days from the date of invoice. this is trial</li>
							<li>Payment must be made within 2 working days from the issue date of the invoice in order to avail of your guarantee period.</li>
						</ol>";

	public $procedureOverseas = "<ol>
							<li>Once we receive the application form with the filled details about your domestic help requirement, we will get in touch with you to understand your requirement much better within 24 working hours.</li>
							<li>After we understand you requirement, we will share the profiles of the candidates who all are suitable as per your domestic help requirement within 24 Hours.</li>
							<li>For further interviewing the candidates, the employer should pay a non-refundable registration fees of Rs. 5000 (Inclusive of GST) which will be valid for one year.</li>
							<li>After receiving the registration fees our team member will set up interview with the candidates whose profiles has been shared with you at the best convenient time at your residence.</li>
							<li>Once interview done, candidate selected, we will scheduled the trail for 3 – 4 Days with the selected candidate. Trial will be taken into consideration for which the employer should pay the worker a total of Rs.500 per day trail.</li>
							<li>After completing the trial the employer should inform Domestic For You, if they would like to retain the worker but the final decision about the hiring will be done by Domestic For You after assuring that the domestic worker would also like to work for the employer.</li>
							<li>After receiving confirmation from client and domestic worker, the employer must pay the non-refundable hiring fee which is equivalent to One and Half Month salary plus GST of 18% which will be sent to you. Payment must be made within 2 working days from the date of invoice. this is trial</li>
							<li>Payment must be made within 2 working days from the issue date of the invoice in order to avail of your guarantee period.</li>
						</ol>";

	public $replacement = "<ol>
								<li>If the domestic worker leaves the job for any reason or if the employer asks the domestic worker to leave the job, we will do our best to provide you the 3 free replacements of the domestic worker.</li>
								<li>After 1 year replacement will be charged as 45 days salary of salary worker with the Indian GST of 18%. And complete registration fees of 2500 (inclusive of 18% GST)</li>
								<li>We will provide only 3 replacements in the period of 1 year.</li>
							</ol>";

	public $replacementOverseas = "<ol>
								<li>If the domestic worker leaves the job for any reason or if the employer asks the domestic worker to leave the job, we will do our best to provide you the 3 free replacements of the domestic worker.</li>
								<li>After 1 year replacement will be charged as 45 days salary of salary worker with the Indian GST of 18%. And complete registration fees of 5000 (inclusive of 18% GST)</li>
								<li>We will provide only 3 replacements in the period of 1 year.</li>
							</ol>";

	public $note = "<ol>
						<li>We cannot hold the domestic worker and they are also free to go for the interview with any potential client until assigned for trail.</li>
						<li>Domestic For You brief the candidates who all are sent for the interview or trail about the requirement of the employer however we are not responsible if candidates changes their mind during interview or trail</li>
						<li>Domestic For You will providing replacement for a maximum number of 2 times.</li>
					</ol>";

	public $payment = "<ul>
							<li>Cash</li>
							<li>Cheque</li>
							<li>Online Transfer (Contact Domestic For You for bank details)</li>
						</ul>";

	function getLiveOut(){
		return "<h2>Terms & Condition</h2>
				".$this->termsLiveOut."
				<h2>Procedure</h2>
				".$this->procedure."
				<h2>Replacement</h2>
				".$this->replacement."
				<h2>Note</h2>
				".$this->note."
				<h2>payment</h2>
				".$this->payment."";
	}

	function getLiveIn(){
		return "<h2>Terms & Condition</h2>
				".$this->termsLiveIn."
				<h2>Procedure</h2>
				".$this->procedure."
				<h2>Replacement</h2>
				".$this->replacement."
				<h2>Note</h2>
				".$this->note."
				<h2>payment</h2>
				".$this->payment."";
	}

	function getOverseas(){
		return "<h2>Terms & Condition</h2>
				".$this->termsLiveIn."
				<h2>Procedure</h2>
				".$this->procedureOverseas."
				<h2>Replacement</h2>
				".$this->replacementOverseas."
				<h2>Note</h2>
				".$this->note."
				<h2>payment</h2>
				".$this->payment."";
	}

}

?>