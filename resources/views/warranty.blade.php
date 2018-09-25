@extends('layout.master')

@section('content')

  	<!-- section begin -->
    <section id="section-about">
        <div class="container">
  			<h1>{{ strtoupper(Request::path()) }} IG Blinds ─</h1>
  			<div class="spacer-double"></div>
  			<div class="row">
  				 <div class="spacer-double"></div><div class="spacer-double"></div><div class="spacer-double"></div><div class="spacer-double"></div>
  			</div>
  			<div class="spacer-single"></div>
        </div>
    </section>
    <!-- section close -->


	<!-- section begin -->
    <section id="section-testimonial" class="text-light">
        <div class="container">
            
           <div class="spacer-double"></div><div class="spacer-double"></div><div class="spacer-double"></div><div class="spacer-double"></div>
        </div>
    </section>
    <!-- section close -->
@endsection
