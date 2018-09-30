@extends('layout.master');

@section('content')
 	@include('partial.slider')
 	<section>
    	<div class="container">
    		<div class="col-md-6">
    			<div class="card height-400 picframe">
	    			<img src="images/product/m_range.png" />
	    		</div>
    		</div>
    		<div class="col-md-6 padding50">
    			<div class="card height-300">
	    			<div class="card-heading">
	    				<h2>Our Range ─</h2>
	    			</div>
					<div class="card-content">
	    				<p>Our range utilises the most advanced glass processing technology and rigorous quality control systems.</p>
	    				<p class="small-text">Recognised as one of the most advanced integrated blind systems available, IG Blinds® offer an extensive range of products, designed to meet every need related to shading, colour selection, screening and advanced operating systems.</p>
	    			</div>
					<div class="card-footer">
	    				<button class="btn-m btn orange-bg">View Full Range<i class="fa fa-arrow-right"></i></button>
	    			</div>
	    		</div>
    		</div>
    	</div>
    </section>
	<!-- section begin -->
	<section>
    	<div class="container">
    		<div class="col-md-6 padding50">
    			<div class="card height-300">
	    			<div class="card-heading">
	    				<h2>Our glass options ─</h2>
	    			</div>
					<div class="card-content">
	    				<p>Our glass specifications can be customised to meet individual design or thermal performance criteria.</p>
	    				<p class="small-text">Recognised as one of the most advanced integrated blind systems available, IG Blinds® offer an extensive range of products, designed to meet every need related to shading, colour selection, screening and advanced operating systems.</p>
	    			</div>
					<div class="card-footer">
	    				<button class="btn-m btn orange-bg">View Glass Options <i class="fa fa-arrow-right"></i></button>
	    			</div>
	    		</div>
    		</div>
    		<div class="col-md-6">
    			<div class="card height-400 picframe">
	    			<img src="images/product/glass-option.png" />
	    		</div>
    		</div>
    	</div>
    </section>

    <!-- section close -->
    <section>
    	<div class="container">
    		<div class="col-md-6 dark-blue-bg white-text padding50">
    			<div class="card height-300">
	    			<div class="card-heading">
	    				<h2 class="sky-blue-text">After-sales service</h2>
	    			</div>
					<div class="card-content margintop20">
	    				<p>IG Blinds is the only Australian company to provide after-sales service and support nationally on every IG Blinds® installation.</p>
	    			</div>
					<div class="card-footer">
	    				<button class="btn-m btn orange-bg">Contact US <i class="fa fa-arrow-right"></i></button>
	    			</div>
	    		</div>
    		</div>
    		<div class="col-md-6 sky-blue-bg padding50">
    			<div class="card height-300">
	    			<div class="card-heading">
	    				<h2>Download our brochure <br>
						to view the full range <br>
						and colours available.</h2>
					</div>
					<div class="card-content">
						&nbsp;
					</div>
					<div class="card-footer">
	    				<button class="btn-m btn orange-bg white-text">Downlaod <i class="fa fa-download"></i> </button>
	    			</div>
	    		</div>
    		</div>
    	</div>
    </section>
    <section class="dark-blue-bg margintop60">
    	<div class="container">
    		<div class="col-md-4">
	    		<h2 class="sky-blue-text">Stay in the loop</h2>
    		</div>
    		<div class="col-md-5">
	    		<h4 class="sky-blue-text">Sign up to our newsletter</h4>
    		</div>
    		<div class="col-md-3">
	    		<div class="widget">
	    			<h3 class="sky-blue-text">or follow us on</h3>
                    <ul>
                        <li><a href="{{ url('about') }}">About IG Blinds</a></li>
                        <li><a href="#">Product range</a></li>
                        <li><a href="#">Colour specifications</a></li>
                        <li><a href="#">Glass options</a></li>
                    </ul>
                </div>
    		</div>
	    </div>
    </section>
@endsection