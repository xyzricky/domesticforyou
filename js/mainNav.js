
	// main Nav function animation
    var HamIcon = _('mainHamburgerIconWrapper');
    var NavAside = _('mainNavBarSection');
    var HamIconBars = document.getElementsByClassName('hamIconsBars');
    var NavStatus = false;
    var MainNav = _('mainNavWrapper');

    HamIcon.addEventListener('click', function(){
      if(!NavStatus){
        NavAside.style.right = 0;
        document.body.style.overflow = "hidden";

        HamIconBars[0].style.transform = 'rotate(45deg)';
        HamIconBars[0].style.webkitTransform = 'rotate(45deg)';
        HamIconBars[0].style.mozTransform = 'rotate(45deg)';
        HamIconBars[0].style.oTransform = 'rotate(45deg)';
        HamIconBars[0].style.top = '7px';

        HamIconBars[1].style.opacity = 0;

        HamIconBars[2].style.transform = 'rotate(-45deg)';
        HamIconBars[2].style.webkitTransform = 'rotate(-45deg)';
        HamIconBars[2].style.mozTransform = 'rotate(-45deg)';
        HamIconBars[2].style.oTransform = 'rotate(-45deg)';
        HamIconBars[2].style.bottom = '7px';

        NavStatus = true;
      }else{
        NavAside.style.right = '-270px';
        document.body.style.overflow = "auto";

        HamIconBars[0].style.transform = 'rotate(0deg)';
        HamIconBars[0].style.webkitTransform = 'rotate(0deg)';
        HamIconBars[0].style.mozTransform = 'rotate(0deg)';
        HamIconBars[0].style.oTransform = 'rotate(0deg)';
        HamIconBars[0].style.top = '0px';

        HamIconBars[1].style.opacity = 1;

        HamIconBars[2].style.transform = 'rotate(0deg)';
        HamIconBars[2].style.webkitTransform = 'rotate(0deg)';
        HamIconBars[2].style.mozTransform = 'rotate(0deg)';
        HamIconBars[2].style.oTransform = 'rotate(0deg)';
        HamIconBars[2].style.bottom = '0px';

        NavStatus = false;
      };
    });

    window.onresize = function(){
      if(window.innerWidth >= 950){
        NavAside.style.right = '0';
      }else{
        NavAside.style.right = '-'+NavAside.offsetWidth+'px';
      };
    };

    window.onscroll = function(){
    	if(window.innerWidth >= 950){
    		if(window.pageYOffset > 0){
    			MainNav.style.background = '#212121';
    		}else{
    			MainNav.style.background = 'none';
    		};	
    	};
    };