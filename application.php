<?php 
  include_once 'includes/tnc.php'; 
?>

<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Application Form</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  </head>
  <body>
  
    <?php
      include_once 'includes/mainNav.php';
    ?>

    <section id="contactPageHeaderWrapper"></section>

    <section id="mainApplicationFormWrapper" class="universalPadding">
      <div class="mainWrapper">
        <section id="mainApplicationFormSection">
          <p class="breadCrum001">Application Form</p>
          <p class="p002" style="margin-bottom: 50px;">Once we receive the Application Form filled by you, our customer support will contact you as soon as possible.</p>
          <form action="" method="" id="form">

            <div class="formDiv formDiv2">
              <label>Name<span>*</span></label>
              <input type="text" name="name" id="fname">
            </div><div class="formDiv formDiv2">
              <label>Nationality<span>*</span></label>
              <input type="text" name="nationality" id="nationality">
            </div><div class="formDiv formDiv2">
              <label>Company Name</label>
              <input type="text" name="cname" id="cname">
            </div><div class="formDiv formDiv2">
              <label>Email<span>*</span></label>
              <input type="text" name="email" id="email">
            </div><div class="formDiv formDiv2">
              <label>Contact Number<span>*</span></label>
              <input type="text" name="phone" id="phone">
            </div><div class="formDiv formDiv2">
              <label>Type<span>*</span></label>
              <select id="type" name="type" onchange="typeFunction();">
                <option value="">Select One</option>
                <option value="Live In">Live In</option>
                <option value="Live Out">Live Out</option>
                <option value="Overseas">Overseas</option>
              </select>
            </div><div class="formDiv formDiv2">
              <label>Family Member<span>*</span></label>
              <input type="text" name="fmember" id="fmember">
            </div><div class="formDiv formDiv2">
              <label>Days off per month<span>*</span></label>
              <input type="text" name="dOff" id="dOff">
            </div><div class="formDiv">
              <label>Address<span>*</span></label>
              <textarea id="address" name="address"></textarea>
            </div>
            <div>
              <div class="formDiv formDiv2">
              <label>Staff Required<span>*</span></label>
              <div>
                <label>Cook</label>
                <input type="checkbox" name="staff[]" value="Cook">
              </div>
              <div>
                <label>House Keeping</label>
                <input type="checkbox" name="staff[]" value="House Keeping">
              </div>
              <div>
                <label>Ayah</label>
                <input type="checkbox" name="staff[]" value="Ayah">
              </div>
              <div>
                <label>Elder Care</label>
                <input type="checkbox" name="staff[]" value="Elder Care">
              </div>
              <div>
                <label>Driver</label>
                <input type="checkbox" name="staff[]" value="Deriver">
              </div>
              <div>
                <label>Office Boy</label>
                <input type="checkbox" name="staff[]" value="Office Boy">
              </div>
              <div>
                <label>Others</label>
                <input type="checkbox" name="staff[]" value="Others">
              </div>
            </div><div class="formDiv formDiv2">
              <label>Salary<span>*</span></label>
              <div id="salary-lInOut" style="display: none;">
                <div>
                  <label>12 - 15K</label>
                  <input type="radio" name="salary" value="12 - 15K">
                </div>
                <div>
                  <label>15 - 18K</label>
                  <input type="radio" name="salary" value="15 - 18K">
                </div>
                <div>
                  <label>18K & Above</label>
                  <input type="radio" name="salary" value="18K & Above">
                </div>
              </div>
              <div id="salary-Overseas" style="display: none;">
                <div>
                  <label>30 - 40k</label>
                  <input type="radio" name="salary" value="30 - 40K">
                </div>
                <div>
                  <label>40 - 50K</label>
                  <input type="radio" name="salary" value="40 - 50K">
                </div>
                <div>
                  <label>50K & Above</label>
                  <input type="radio" name="salary" value="50k & Above">
                </div>
              </div>
            </div><div class="formDiv formDiv2">
              <label>English Skill<span>*</span></label>
              <div>
                <label>Nil</label>
                <input type="radio" name="english" value="Nil">
              </div>
              <div>
                <label>Average</label>
                <input type="radio" name="english" value="Average">
              </div>
              <div>
                <label>Fluent</label>
                <input type="radio" name="english" value="Fluent">
              </div>
            </div><div class="formDiv formDiv2">
              <label>Household Size<span>*</span></label>
              <div>
                <label>2 BHK</label>
                <input type="radio" name="house" value="2 BHK">
              </div>
              <div>
                <label>3 BHK</label>
                <input type="radio" name="house" value="3 BHK">
              </div>
              <div>
                <label>4 BHK & Above</label>
                <input type="radio" name="house" value="4 BHK & Above">
              </div>
            </div><div class="formDiv formDiv2">
              <label>Gender Preference<span>*</span></label>
              <div>
                <label>Male</label>
                <input type="radio" name="gender" value="Male">
              </div>
              <div>
                <label>Female</label>
                <input type="radio" name="gender" value="Female">
              </div>
              <div>
                <label>No Preference</label>
                <input type="radio" name="gender" value="No Preference">
              </div>
            </div><div class="formDiv formDiv2">
              <label>Do you own a Pet?<span>*</span></label>
              <div>
                <label>Yes</label>
                <input type="radio" name="pet" value="Yes">
              </div>
              <div>
                <label>No</label>
                <input type="radio" name="pet" value="No">
              </div>
            </div>
          </div>
            <div id="tncOverseas" style="display:none;">
              <div class="tncBox001">
                <?php
                  $overseas = new Terms();
                  echo $overseas->getOverseas();
                ?>
              </div>
            </div>
            <div id="tncLiveIn" style="display: none;">
              <div class="tncBox001">
                <?php
                  $livein = new Terms();
                  echo $livein->getLiveIn();
                ?>
              </div>
            </div>
            <div id="tncLiveOut" style="display: none;">
              <div class="tncBox001">
                <?php
                  $liveout = new Terms();
                  echo $liveout->getLiveOut();
                ?>
              </div>
            </div>
            
            <div id="tncBox">
              <input type="checkbox" id="tnc">I agree to terms and conditions
            </div>
            <input type="submit" value="Submit" id="appBtn" class="btn002" style="margin-top: 30px;">
            
          </form>
        </section>
      </div>
    </section>

    <?php
      include_once 'includes/mainFooter.php';
    ?>

    <?php
      include_once 'includes/gtag.php';
    ?>

    <script type="text/javascript">
      function _(e){
        return document.getElementById(e);
      };
    </script>
    <script type="text/javascript" src="js/mainNav.js"></script>
  <script type="text/javascript">

    // main application form 
    var btn = _('appBtn');
    var fields,
        fname,
        nationality,
        cname,
        email,
        phone,
        type,
        fmember,
        dOff,
        address,
        staff = _('form').elements['staff[]'],
        salary = document.getElementsByName('salary'),
        english = document.getElementsByName('english'),
        hSize = document.getElementsByName('house'),
        gender = document.getElementsByName('gender'),
        pet = document.getElementsByName('pet'),
        tnc,
        staffError = true,
        salaryError = true,
        englishError = true,
        hSizeError = true,
        genderError = true,
        petError = true,
        ajax,
        formError;

    btn.addEventListener('click', function(e){

      // disable the default form
      e.preventDefault();

      // disable the btn to prevent additional form submit
      this.disabled = true;

      // prepare formData 
      var formData = new FormData();

      //set formError = 0
      formError = 0;

      // get all the values
      fname = _('fname');
      nationality = _('nationality');
      cname = _('cname');
      email = _('email');
      phone = _('phone');
      type = _('type');
      fmember = _('fmember');
      dOff = _('dOff');
      address = _('address');
      tnc = _('tnc');

      fields = [fname, nationality, email, phone, type, fmember, dOff, address];

      for(var i = 0; i < staff.length; i++){
        if(staff[i].checked){
          staffError = false;
          formData.append('staff[]', staff[i].value);
        };
      };

      if(salary){
        for(var i = 0; i < salary.length; i++){
          if(salary[i].checked){
            salaryError = false;
            formData.append('salary', salary[i].value);
          };
        };
      };
      

      for(var i = 0; i < english.length; i++){
        if(english[i].checked){
          englishError = false;
          formData.append('english', english[i].value);
        };
      };

      for(var i = 0; i < hSize.length; i++){
        if(hSize[i].checked){
          hSizeError = false;
          formData.append('hSize', hSize[i].value);
        };
      };

      for(var i = 0; i < gender.length; i++){
        if(gender[i].checked){
          genderError = false;
          formData.append('gender', gender[i].value);
        };
      };

      for(var i = 0; i < pet.length; i++){
        if(pet[i].checked){
          petError = false;
          formData.append('pet', pet[i].value);
        };
      };

      // check for all the empty fields
      for(var i = 0; i < fields.length; i++){
        if(fields[i].value === ""){
          fields[i].style.borderColor = 'red';
          formError++;
        }else{
          fields[i].style.borderColor = '#c3c3c3';
        };
      };

      // set all the remaining formData
      formData.append('fname', fname.value);
      formData.append('nationality', nationality.value);
      formData.append('cname', cname.value);
      formData.append('email', email.value);
      formData.append('phone', phone.value);
      formData.append('type', type.value);
      formData.append('fmember', fmember.value);
      formData.append('dOff', dOff.value);
      formData.append('address', address.value);
      formData.append('action', 'application');

      if(!tnc.checked){
        alert('Please agree to our Terms & Conditions');
        this.disabled = false;
      }else{
        // process the form is there is no error
        if(formError > 0 || staffError || salaryError || englishError || hSizeError || genderError || petError){
          alert('Please fill the form completely');
          this.disabled = false;

        }else{
          
          // prepare for take off
          ajax = new XMLHttpRequest();

          ajax.onreadystatechange = function(){
            if(this.status == 200 && this.readyState == 4){
              if(this.responseText === 'success'){
                alert("Thanks for filling up the application form. We would like to inform you that you will get an acknowledgement of the application form on your registered email ID.\n\nWe will be contacting you soon to help in finding the Domestic Help as per your requirement.\n\nThanks\nTeam Domestic For You Pvt Ltd");
                  location.reload();
              }else{
                alert(this.responseText);
                this.disabled = false;
              };
            }
          };

          ajax.open('POST', 'formValidation.php', true);
          //ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send(formData);


        };
      };
    });


    // change value according to type
    function typeFunction(){
      type = _('type').value;
      overseaSalary = _('salary-Overseas');
      otherSalary = _('salary-lInOut');
      tncOverseas = _('tncOverseas');
      tncLiveIn = _('tncLiveIn');
      tncLiveOut = _('tncLiveOut');

      otherSalary.style.display = 'none';
      overseaSalary.style.display = 'none';
      tncOverseas.style.display = 'none';
      tncLiveIn.style.display = 'none';
      tncLiveOut.style.display = 'none';


      if(type != ""){
        if(type === 'Overseas'){
          overseaSalary.style.display = 'block';
          tncOverseas.style.display = 'block';
        }else{
          if(type === 'Live In'){
            tncLiveIn.style.display = 'block';
          }else{
            tncLiveOut.style.display = 'block';
          };
          otherSalary.style.display = 'block';
        };
      };
    };


    // main nav animation
    var mainNavWrapper = _('mainNavWrapper');

    function init(){
      mainNavWrapper.style.top = 0;
    };

    window.onload = init;

  </script>
  </body>
</html>