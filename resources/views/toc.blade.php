@extends('layout.master')

@section('content')

  	<!-- section begin -->
    <section id="section-about">
        <div class="container">
    			<h1>Terms and conditions ─</h1>
    			<div class="spacer-double"></div>
      			<div class="row">
      				 @include('page_content.warranty')
      			</div>
        </div>
    </section>
    <!-- section close -->
@endsection
