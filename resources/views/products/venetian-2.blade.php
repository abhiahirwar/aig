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
                <div class="product-ranges">
                    <ul class="range_nav">
                        <li class="active"><span><a href="#">TP20VMB</a></span>
                            <div class="h-border"></div>
                        </li>
                        <li class="" ><span><a href="#">TP22VMB</a></span>
                            <div class="h-border"></div>
                        </li>
                        <li class="" ><span><a href="#">TP27VMB</a></span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    @include('partial.slider')
    <section id="product-specs">
        <div class="container">
            <div class="row">
                <div class="col-md-4 spec">

                    <h3><span class="title-no">01</span>Battery actuator</h3>
                    <p>
                        Rechargeable lithium battery actuator with electronics for blind movement operation and endblocks Management of fast automatic function until endblocks or to the desired level and slow manual function for slow movement. Software system with tamperproof function and motor power supply protection, red LED when battery is flat, green LED when charging and functioning. Safety management in case of accidental blockage of blind.
                    </p>

                    <p>
                        Also available in the version with radio receiver and with battery pack recharge aid through a photovoltaic panel.
                    </p>
                </div>
                <div class="col-md-4 spec">
                    <h3><span class="title-no">02</span>Wiring with magnetic connector</h3>
                    <p>
                        Plate with two cables and Amp connector for connection to blind and magnetic connector, easy to apply to window or to frame. Connector dimensions 25 x 30 x 5mm high with two tapered holes for fixing to frame and specific biadhesive for sticking to glass.
                    </p>

                </div>
                <div class="col-md-4 spec">
                    <h3><span class="title-no">03</span>Reduction gear</h3>
                    <p>
                        Micro-reduction gear with diam. 18mm, placed in a special plastic support inside the aluminium profile. This micro-reduction gear is controlled by a special 12V motor, controlled by the actuator. Transmission ratio R=231. Slow shaft speed -30/40RPM. Max. current absorbed 1A Precise broached steel body (degree 7) M0.40 high precision gears, in treated steel, mechanically machined. Slow shaft supported by 2 ball bearings diam. 8/16 H5.
                    </p>

                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="row">
                <div class="col-md-4 spec">

                    <h3><span class="title-no">04</span>Plissé fabric</h3>
                    <p>
                        Polyester with 16mm pleat, not flameproof, colours available: 5.
                    </p>
                </div>
                <div class="col-md-4 spec">
                    <h3><span class="title-no">05</span>Wiring with magnetic connector</h3>
                    <p>
                        The extruded profiles are made from aluminium alloy EN AW 6060 with a chemical composition defined by standard EN 573-3, created to the design and according to an innovative project by the SunBell technical department. The metallurgical state of supply is T5 unless otherwise specified, according to the standard UNI EN 5415, with mechanical characteristics according to standard UNI EN-755-2. Chemical silver oxidised box and back.
                    </p>
                    <p>
                        Dimensions of box: 22 x 44.90mm <br>
                        (part with flap)/42.90 (part without flap)
                    </p>

                    <p>
                        Dimension of back: 16 x 12.60mm
                    </p>
                </div>
                <div class="col-md-4 spec">
                    <h3><span class="title-no">06</span>Reduction gear</h3>
                    <p>
                        Made from 100% polyester with 100% 280/2 x 3 entwined polyester core.
                    </p>
                    <p class="font-bold">
                        Entwinding: 16 ends<br>
                        Diameter: 1mm<br>
                        Traction resistance: 120-200N<br>
                        Treatment: stabilised<br>
                        Colour tests: Xenon test 6<br>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h3>Feasibility table</h3>

                    <p>
                        First patented system of plissé blinds in double glazing with magnetic transmission wireless actuator. This extremely innovative system works through a battery actuator which can be recharged using the special battery charger.
                    </p>
                    <p>
                        No electrical wiring required. By placing this actuator on the respective magnetic connector fixed to the window or frame, the up or down impulse can be transmitted in the fast automatic function or in the slow manual function pressing the arrow buttons on it.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 offset-md-5">
                    <img src="{{ asset('images/product/chart.png') }}">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h3>Colour specifications</h3>

                    <p>
                        First patented system of plissé blinds in double glazing with magnetic transmission wireless actuator. This extremely innovative system works through a battery actuator which can be recharged using the special battery charger.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-002"><span class="color-name">002</span></div>

                </div>
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-028"><span class="color-name">028</span></div>
                </div>
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-029"><span class="color-name">029</span></div>
                </div>
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-053"><span class="color-name">053</span></div>
                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-002"><span class="color-name">002</span></div>

                </div>
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-028"><span class="color-name">028</span></div>
                </div>
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-029"><span class="color-name">029</span></div>
                </div>
                <div class="col-md-3">
                    <div class="color-circle-big bg-color-053"><span class="color-name">053</span></div>
                </div>
            </div>
            <div class="spacer-double"></div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 height-250">
                    <img src="{{ asset('images/product/spec-footer.png') }}" />
                </div>
                <div class="col-md-4 light-blue-bg">
                    <div class="card height-250 padding50">
                        <div class="card-heading ">
                            <h2 class="medium-text">Download</h2>
                        </div>
                        <div class="card-content">
                            <a herf="#" class="link-download">Technical specifcations (3.2mb PDF)<i class="fa fa-download"></i></a>
                            <hr class="white">
                            <a herf="#" class="link-download">Colour specifications (4.2mb PDF)<i class="fa fa-download"></i></a>

                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
