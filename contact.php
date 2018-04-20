<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact Us</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="css/stylesheet.css?v=1.0" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  </head>
  <body>
  
    <?php
      include_once 'includes/mainNav.php';
    ?>

    <section id="contactPageHeaderWrapper"></section>

    <section id="mainContactFromWrapper001" class="universalPadding">
      <div class="mainWrapper">
        <section id="mainContactFromSection001">
          <p class="breadCrum001">Contact Us</p>
          <h2 class="h2002 h2WidthMargin01 h2002b" style="text-transform: capitalize;">Lets grab a cup of coffee together.</h2>
          <section id="mobForm">
            <form>
              <section class="formFeildsSection">
                <label for="fname">What is your name?</label>
                <input type="text" name="fname" id="fname">
                <p id="fnameError"></p>
              </section>
              <section class="formFeildsSection">
                <label for="phone">Do you mind sharing your phone number</label>
                <input type="phone" name="phone" id="phone">
                <p id="phoneError"></p>
              </section>
              <section class="formFeildsSection">
                <label for="email">How about your email too</label>
                <input type="email" name="email" id="email">
                <p id="emailError"></p>
              </section>
              <section class="formFeildsSection">
                <label for="message">We're reading, ask us anything!</label>
                <textarea id="message" name="message"></textarea>
                <p id="messageError"></p>
              </section>
              <input type="submit" class="btn002" id="mobFormBtn" value="Submit">
            </form>
          </section>

          <section id="deskForm">
            <section id="df-fieldSection">
              <p id="dskLable" class="animation075">What is your name ?</p>
              <input type="text" autocomplete="off" id="dskFormInput" class="animation075">
              <textarea id="dskFormTextarea" class="animation075"></textarea>
              <p id="dskFieldError"></p>
            </section>
            <button class="btn002 animation075" id="dskFormBtn">Enter</button>
          </section>
          
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

    // desktop contact form 
    var dskBtn = _('dskFormBtn');
    var dskInput;
    var dskInputGlobal = _('dskFormInput');
    var dskTextarea = _('dskFormTextarea');
    var dskFormStatus = 0;
    var dskFieldError = _('dskFieldError');
    var dskLable = _('dskLable');
    var fname = '';
    var phone = '';
    var email = '';
    var message = '';

    if(dskBtn){
      dskBtn.addEventListener('click', function(e){

        // disable the btn ASAP
        dskBtn.disabled = true;

        e.preventDefault();

        if(dskFormStatus < 3){
          dskInput = _('dskFormInput');
        }else{
          dskInput = _('dskFormTextarea');
        };
        
        if(dskInput.value === ""){
          dskFormError(dskFormStatus);

          // enable the btn ASAP
          dskBtn.disabled = false;

        }else{

          // if there is no error then hide all errors
          dskFieldError.innerHTML = '';
          dskInput.style.borderBottom = '2px solid #212121';

          if(dskFormStatus === 0){ // 0 is fname
            fname = dskInput.value;
          }else if(dskFormStatus === 1){
            phone = dskInput.value;
          }else if(dskFormStatus === 2){
            email = dskInput.value;
          }else if(dskFormStatus === 3){
            message = dskInput.value;
          };
          
          if(dskFormStatus < 3){
            // do some animation in between
            dskFormEffect(dskFormStatus);

            dskInput.value = '';

            dskFormStatus++;
          }else{

            // // time to process the form to the destination
            // var ajax = new XMLHttpRequest();
            // var formData = new FormData();

            // formData.append('fname', fname);
            // formData.append('phone', phone);
            // formData.append('email', email);
            // formData.append('message', message);

            // ajax.onreadystatechange = function(){
            //   if(this.readyState == 4 && this.status == 200){
            //     alert(this.responseText);
            //     location.reload();
            //   }
            // }

            // ajax.open('POST', 'contactValidation.php', true);
            // ajax.send(formData);

            alert(message);
          };
          
        };
      });
    };

    function dskFormError(e){
      // all the error will come here accoring to the form status
      if(e === 0){
        dskFieldError.innerHTML = 'Your name is required';
      }else if(e === 1){
        dskFieldError.innerHTML = 'Phone number is required';
      }else if(e === 2){
        dskFieldError.innerHTML = 'Email address is required';
      }else if(e === 3){
        dskFieldError.innerHTML = 'Message is required';
      };
      dskInputGlobal.style.borderBottom = '2px solid red';
    };

    function dskFormEffect(e){
      dskLable.style.opacity = 0;
      dskInputGlobal.style.opacity = 0;
      dskBtn.style.opacity = 0;
      setTimeout(function(){
        dskLable.style.opacity = 1;
        
        dskBtn.style.opacity = 1;

        if(e === 0){
          dskInputGlobal.style.opacity = 1;
          dskLable.innerHTML = 'Hi '+fname+', What is your phone number?'
        }else if(e === 1){
          dskInputGlobal.style.opacity = 1;
          dskLable.innerHTML = 'And what is your email address?'
        }else if(e === 2){
          dskInputGlobal.style.display = 'none';
          dskLable.innerHTML = "Great, what\'s your message for us?";
          dskTextarea.style.display = 'block';
          setTimeout(function(){
            dskTextarea.style.opacity = 1;
            dskTextarea.style.padding = '10px';
            dskTextarea.style.border = '2px solid #212121';
            dskTextarea.style.height = '250px';
          }, 500);
        };

        // enable the btn ASAP
        dskBtn.disabled = false;
        
      }, 750);
    };

    // mobile contact form validation
    var mobBtn = _('mobFormBtn');
    var mobFname = '';
    var mobPhone = '';
    var mobEmail = '';
    var mobMessage = '';
    var mobFields = ['fname','phone','email','message'];
    var mobFormError = false;


    if(mobBtn){
      mobBtn.addEventListener('click', function(e){

        // default values of predefined variables
        mobBtn.disabled = true;
        mobFormError = false;

        // default style of the fields and error
        for(var i = 0; i < mobFields.length; i++ ){
            _(mobFields[i]).style.border = '1px solid #212121';
            _(mobFields[i]+'Error').innerHTML = '';
        };

        e.preventDefault();
        
        mobFname = _('fname');
        mobPhone = _('phone');
        mobEmail = _('email');
        mobMessage = _('message');

        // check for any empty fields
        for(var i = 0; i < mobFields.length; i++ ){
          if(_(mobFields[i]).value == ''){
            _(mobFields[i]).style.border = '1px solid red';
            _(mobFields[i]+'Error').innerHTML = 'This is required';

            mobFormError = true;
          };
        };

        if(!mobFormError){
          var ajax = new XMLHttpRequest();
          var formData = new FormData();

          formData.append('fname', mobFname.value);
          formData.append('phone', mobPhone.value);
          formData.append('email', mobEmail.value);
          formData.append('message', mobMessage.value);

          ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              alert(this.responseText);
              location.reload();
            };
          };

          ajax.open('POST', 'contactValidation.php', true);
          ajax.send(formData);
        }else{
          mobBtn.disabled = false;
        };

      });
    };


    var mainNavWrapper = _('mainNavWrapper');

    function init(){
      mainNavWrapper.style.top = 0;
    };

    window.onload = init;

  </script>
  </body>
</html>