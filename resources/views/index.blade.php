@extends('template')
@section('index')
  
 <!--about us start-->
  <section class="aboutus" id="aboutus">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
      	<div class="heading">
        <h2>About me</h2>
        <h3>A small introduction about my self</h3>        
      </div>
      </div> 
       </div> 
      <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="images/ebel.jpg" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
        	<h5>Nabila Wardhani</h5>
            <h4>Webdesigner &amp; from Indonesia oh, i'm still learning too.</h4>
            <p>Annyeong, welcome to my Web. I'm still learning about how to make a web too and yup i am ARMY! Do you know BTS? if yes then we can talk alot about them. And if you want to know more about me like my skill, or my education you can click the button in home. Hopefully we can connected. </p>
<p>Hey Army, let's do a fanchart with me please? " KIM NAMJOON, KIM SEOKJIN, MIN YOONGI, JUNG HOSEOK, PARK JIMIN, KIM TAEHYUNG, JEON JUNGKOOK... BTS!" yeayyy. HAHAHA love you guys. </p>
        </div>
      	
      </div>     
    </div>    
  </section>
  <!--about us end--> 
  <!--Skillset start -->
  <section id="skillset" class="skillset">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
               <div class="heading">
                <h2>Skills &amp; Expertice</h2>
                <h3>I can say i’m quite good at</h3>        
              </div>
            </div>
            <div class="col-md-12">
            <p><h2>Here we areeeeee. in my skill and lil expertice. Sometimes we could think that we are good at something right?</h2></p>
            	<div class="col-md-6 col-sm-12 media">
                	
                </div> <p>
                @foreach($manages as $s)
            <div class="col-md-6 mb-4">
                <div class="service d-flex h-100">
                <div class="service-about">
                   
                    
                        <h3> <span><i class="{{$s->icon}} my-3"></i></span>{{$s->title}}</h3>
                        <p>{{$s->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
              </p>
            </div>
        </div>
    </div>
  </section>
  <!--Skillset end -->
  <!--Education & diploma start -->
  <section id="education" class="educationdiploma">
  	<div class="container">
        <div class="heading">
        <h2>Education &amp; Diplomas</h2>
        <h3>I can say i’m quite good at</h3>        
      </div>
        
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	2004 - 2010
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>SD Islam PB Soedirman</h4>
                <h5>Elementary School</h5>
                <p>SD ISLAM PB.SOEDIRMAN merupakan Sekolah Koalisi Regional SEAMEO (South East Asia Minister of Education Organisation) sehingga memiliki jaringan kerjasama dan sister school dengan sekolah sekolah di Asia. BerAlamat di Jl.Raya Bogor Km.24 Cijantung, Jakarta Timur, DKI Jakarta, Indonesia</p>
            </div>
        </div>
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	2010 - 2013
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>Smp 230 Jakarta</h4>
                <h5>Junior HighSchool</h5>
                <p>Beralamatkan di Jalan TPU Pondok Ranggon, RT.1/RW.2, Pondok Ranggon, Cipayung, RT.1/RW.2, Pd. Ranggon, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13860.</p>
            </div>
        </div>
        <div class="row media">
        	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            	<div class="expertiesico">
                	2013 - 2016
                </div>
            </div>
        	<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
            	<h4>SMA Islam PB Soedirman</h4>
                <h5>Senior High School</h5>
                <p>Beralamatkan di Jl.Raya Bogor Km.24 Cijantung, Jakarta Timur, DKI Jakarta, Indonesia </p>
            </div>
        </div>
        <div class="row media">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="expertiesico">
                  2016 - Sekarang
                </div>
            </div>
          <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
              <h4>Universitas Gunadarma</h4>
                <h5>University</h5>
                <p>Beralamatkan di Jl. Margonda Raya No.100, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
            </div>
        </div>
    </div>
  </section>
  <!--Education & diploma end -->   
  
  <!--contact start-->
  <section class="contact" id="contact">
    </div>
  </section>
  <section class="contactDetails">
    <div class="container"> 
    <div class="heading">
        <h2>Drop a email</h2>
        <h3>Please feel free if you would like to have a chat.</h3>       
      </div>
      <!--contact form start-->
      <div class="row media">      	 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 conForm text-center">
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" placeholder="Your name" >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 noMarr" placeholder="Your email" >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" placeholder="Your message"></textarea>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="submit" id="submit" name="send" class="submitBnt" value="Send message"></div>
          <div id="simple-msg"></div>
        </form>
      </div>
      </div>
      <!--contact form end--> 
    </div>
  </section>  
  <!--contact end-->
 @endsection  
