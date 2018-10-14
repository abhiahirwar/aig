@extends('layout.master')

@section('content')

    <!-- section begin -->
    <section id="section-product">
        <div class="container">
          <span class="sub-heading orange-text font-bold">Product Range -</span>
          <h1>Venetian</h1>
          <div class="spacer-single"></div>
            <div class="row">
              <div class="col-md-6 featured-content">
                <p>
                  The first and only European-patented rechargeable battery-operated system with wireless magnetic actuator and electronics outside the glass unit.
                </p>
                <p>
                  Up & Down is the perfect fusion of design and functionality. Pleasing to the eye, it does not require an electrical system and can be applied to any thickness of glass.
                </p>
                </p>
              </div>
              <div class="col-md-6 featured-content">
                <p>The lithium batteries ensure increased duration compared to those currently available on the market. It is also possible to fit an internal or external photovoltaic panel to the glass to assist with recharging. Exclusively designed to satisfy the needs of the British market, The New 20mm blind is ideal for renovation of existing windows.</p>
              </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section>
      <div class="container">
        <h2>Venetian Range</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="de_tab tab_steps">
                    <ul class="de_nav">
                        <li class="active"><span>TP20VMB</span>
                            <div class="h-border"></div>
                        </li>
                        <li class="" ><span>TP22VMB</span>
                            <div class="h-border"></div>
                        </li>
                        <li class="" ><span>TP27VMB</span>
                            <div class="h-border"></div>
                        </li>
                    </ul>

                    <div class="de_tab_content">

                        <div id="tab1">
                            <h2 class="orange-text">TP20VMB (Double glazing 20mm) Sunlight</h2>
                            <div class="row">
                                <div class="col-md-8 m-t-lg">
                                    <p>
                                        First patented system of plissé blinds in double glazing with magnetic transmission wireless actuator. This extremely innovative system works through a battery actuator which can be recharged using the special battery charger.
                                    </p>
                                    <p>
                                        No electrical wiring required. By placing this actuator on the respective magnetic connector fixed to the window or frame, the up or down impulse can be transmitted in the fast automatic function or in the slow manual function pressing the arrow buttons on it.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-lg pull-right">
                                        <img src="{{asset('images/iso.png') }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Technical specifications</h2>
                                    @include('partial.slider')
                                </div>
                            </div>
                        </div>

                        <div id="tab2">
                            <h2 class="orange-text">TP22VMB (Double glazing 20mm) Sunlight</h2>
                            <div class="row">
                                <div class="col-md-8 m-t-lg">
                                    <p>
                                        First patented system of plissé blinds in double glazing with magnetic transmission wireless actuator. This extremely innovative system works through a battery actuator which can be recharged using the special battery charger.
                                    </p>
                                    <p>
                                        No electrical wiring required. By placing this actuator on the respective magnetic connector fixed to the window or frame, the up or down impulse can be transmitted in the fast automatic function or in the slow manual function pressing the arrow buttons on it.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-lg pull-right">
                                        <img src="{{asset('images/iso.png') }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @include('partial.slider')
                            </div>
                            <div class="row">

                            </div>
                        </div>

                        <div id="tab3">
                            <h2 class="orange-text">TP27VMB (Double glazing 20mm) Sunlight</h2>
                            <div class="row">
                                <div class="col-md-8 m-t-lg">
                                    <p>
                                        First patented system of plissé blinds in double glazing with magnetic transmission wireless actuator. This extremely innovative system works through a battery actuator which can be recharged using the special battery charger.
                                    </p>
                                    <p>
                                        No electrical wiring required. By placing this actuator on the respective magnetic connector fixed to the window or frame, the up or down impulse can be transmitted in the fast automatic function or in the slow manual function pressing the arrow buttons on it.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-lg pull-right">
                                        <img src="{{asset('images/iso.png') }}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </section>
@endsection
