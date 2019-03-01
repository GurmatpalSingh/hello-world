<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8ZP9K2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<style>
/*#top-bar {
    margin-top: 0 !important;
}*/
#header.sticky-header #header-wrap{
	top:0 !important;
}
#page-menu.sticky-page-menu #page-menu-wrap, .main-nav-scrolled{
	top:60px !important;
}


/*Hello Bar Start*/

.lpu-hello-bar{background-color:#fccb92 ; color:#000000; padding:9px 10px; text-align:center; }
.font18{font-size:18px;}
.section-mt40{margin-top:40px !important;} <!--for landing page -->
.font15b{font-size:16px;font-weight:bold !important;}
@media(max-width:430px){.font18{font-size:16px;}
.font15b{font-size:14px;font-weight:bold !important;}}
@media(max-width:800px)
{.lpu-hello-bar{position:static !important;}#top-bar{margin-top:0;}
.section-mt40{margin-top:0 !important;} <!--for landing page -->
}
</style>

<script type="text/javascript">
$( document ).ready(function() {
			var lastdate, today, bday, diff, days;
			lastdate = [15,7,2018]; 
			today = new Date($('#getdate').val());
			bday = new Date(lastdate[2],lastdate[1]-1,lastdate[0]);
			
			diff = bday.getTime()-today.getTime();
			days = Math.floor(diff/(1000*60*60*24));
			
			if(parseInt(days)>0){
				var count=parseInt(days)+1;
				if(count==1)
				{
					$('#nest-last-date').html("Last <strong>"+count +" days</strong>   left to apply for admission with  scholarship. Last Date: 15th July 2018. ");	
				}
				else{
					$('#nest-last-date').html("Last <strong>"+count +" days</strong> left to apply for admission with  scholarship. Last Date: 15th July 2018.");	
				}
			}
			else if(parseInt(days)==0)
			{
				$('#nest-last-date').html("Last day left to apply for admission with  scholarship. Last Date: 15th July 2018. ");
			}
			else
			{
				$('#nest-last-date').html('Applications invited for LPUNEST (Ph.D.) 2018-19 Spring Term. ');
			}
	});
     	
          
    </script>
<div class="lpu-hello-bar" id="lpu-bar">



	<div class="font-f" id="topbartext">
		<i class="icon icon-bullhorn" aria-hidden="true"></i>
		 Applications invited for Admission-2019. <b class="font15b">
			<a data-link="hellobar-lpunest" data-href="//nest.lpu.in/main.aspx" target="_blank" class="applylnk hide-on-lp" style="color:#000000 !important;">
			Apply Now.</a> </b>
		<br>
		  <input type='hidden' id='getdate' value="<?php date('Y/m/d') ?>" />
	</div>

<!--
<div id="oc-posts-top-bar" class="owl-carousel posts-carousel">	
 <div class="oc-item">
	<div class="font-f" id="topbartext">
		<i class="icon icon-bullhorn" aria-hidden="true"></i>
		<span id="nest-last-date"></span> Results of Transforming Education Awards is declared.  <b class="font15b">
			<a data-link="hellobar-lpunest" data-href="https://www.lpu.in/educationawards/account/login" target="_blank" class="applylnk hide-on-lp" style="color:#000000 !important;">
			Click here.</a></b>
		<br>
		  <input type='hidden' id='getdate' value="<?php date('Y/m/d') ?>" />
</div>
</div>	
	
	
	 <div class="oc-item">
	<div class="font-f" id="topbartext">
		<i class="icon icon-bullhorn" aria-hidden="true"></i>
		<span id="nest-last-date"></span>Nominations for Transforming Education Awards 2019 is open.  <b class="font15b">
			<a class="hide-on-lp" href="https://www.lpu.in/educationawards"  style="color:#000000 !important;" target="_blank"> Nominate Now.</a> </b>
		<br>
		  <input type='hidden' id='getdate' value="<?php date('Y/m/d') ?>" />
	</div>
	</div>
	
	
	
		 <div class="oc-item">
	<div class="font-f" id="topbartext">
		<i class="icon icon-bullhorn" aria-hidden="true"></i>
		<span id="nest-last-date"></span>  Applications invited for LPUNEST-2019. <b class="font15b">
			<a data-link="hellobar-lpunest" data-href="//nest.lpu.in/main.aspx" target="_blank" class="applylnk hide-on-lp" style="color:#000000 !important;">
			Apply Now.</a> </b>
		<br>
		  <input type='hidden' id='getdate' value="<?php date('Y/m/d') ?>" />
	</div>
	</div>		
	
	
	
	
	
	</div>-->
	
		
	</div>
	

<!-- Hello Bar End-->

<div id="top-bar" class="ps-top-bar slider-top-link">
			<div class="container-fluid clearfix">
				<div class="col_half nobottommargin mr0">
					<div class="top-links dark">
						<ul>
            <li class="hidden-xs hidden-xxs hidden-sm hidden-md"><a href="https://ums.lpu.in/lpuums" target="_blank">Parent's Login</a></li>
            <li class="hidden-xs hidden-xxs hidden-sm hidden-md"><a href="https://ums.lpu.in/lpuums" target="_blank">UMS</a></li>
			<li class="hidden-xs hidden-xxs hidden-sm hidden-md"><a href="//www.lpu.in/jobs/">Jobs</a></li>
            <!--<li class="hidden-xs hidden-xxs hidden-sm"><a href="//www.lpu.in/about_lpu/tour_lpu.php">Campus Visit</a></li> -->
		
			<li class="hidden-xs hidden-xxs hidden-sm"><a href="http://happenings.lpu.in/" target="_blank">Happenings</a></li>
			<li class="hidden-xs hidden-xxs hidden-sm"><a href="https://www.lpu.in/disha/" target="_blank"> Career Guidance </a> </li>
			<li class="hidden-xs hidden-xxs hidden-sm"><a href="//conferences.lpu.in/" target="_blank"> Conferences </a> </li>
				<li ><a href="//www.lpu.in/studygrant" target="_blank" >Study Grant</a></li>
			<li ><a data-link="topbar-lpunest" data-href="//nest.lpu.in/main.aspx" target="_blank" class="nest-result applylnk">LPUNEST</a></li>
			<!--<li class="hidden-xs hidden-xxs hidden-sm"><a href="//nest.lpu.in/main.aspx" target="_blank" >LPUNEST</a></li>-->
			<li class="hidden-xs hidden-xxs hidden-sm"><a href="//admission.lpu.in/">Result </a></li>
			<li class="hidden-xs hidden-xxs hidden-sm"><a href="//www.lpu.in/international/" target="_blank">International Admissions </a></li>
			<li ><a href="//www.lpu.in/contact_us/contact-us.php">Contact Us</a></li>     
		    

			<!--<li><a id="educationawards" href="#" data-toggle="modal" data-target="#myLargeModal">Education Awards</a></li>			 -->
          </ul>
					</div>
				</div>
				<div class="col_half fright nobottommargin mr0 top-ts">				
					<div id="top-social">
						<ul>
						   
						   <li class="d-one"><a  data-toggle="tooltip" data-placement="bottom" title="" href="https://api.whatsapp.com/send?phone=+91-9876022222&text=Hi%2C%20I%20need%20assistance%20for%20Admissions%202018." target="_blank" class="si-whatsapp"><span class="ts-icon"><i style="font-size: 14px; font-weight: bold; padding-top: 11px;" class="fa fa-whatsapp"></i></span></a></li>
							
							<li><a href="https://www.facebook.com/LPUUniversity" target="_blank" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span></a></li>
							<li><a href="https://twitter.com/lpuuniversity" target="_blank" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span></a></li>
							<li><a href="https://plus.google.com/u/0/102445329734305802454/posts" target="_blank" class="si-gplus"><span class="ts-icon"><i class="icon-gplus"></i></span></a></li>
							<li><a href="https://www.linkedin.com/company/lovely-professional-university" target="_blank" class="si-linkedin"><span class="ts-icon"><i class="icon-linkedin"></i></span></a></li>
							<li><a href="https://www.youtube.com/user/LPUuniversity" target="_blank" class="si-youtube"><span class="ts-icon"><i class="icon-youtube"></i></span></a></li>
							<li><a href="" class="si-call ppwnd"><span class="ts-icon"><i class="icon-call"></i></span></a></li>
							<li><a href="mailto:admissions@lpu.co.in" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span></a></li>
							 <li><a href="//www.lpu.in/about_lpu/tour_lpu.php" target="_blank" class="si-call"><span class="ts-icon"><i class="icon-globe"></i></span><span class="ts-text">360<sup>0</sup> View</span></a>
							</li>
						  </ul>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">

						$(document).ready(function() {
							 $("#oc-posts-top-bar").owlCarousel({
								margin: 20,
								autoplayTimeout:5000,								
								loop:true,
								nav: false,
								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								autoplay: true,
								autoplayHoverPause: true,
								dots: false,
								responsive:{
									0:{ items:1 },
									600:{ items:1 },
									1000:{ items:1 },
									1200:{ items:1 }
								}
							});

						});

					</script>
					
								
		