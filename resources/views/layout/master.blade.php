@include('layout.head')
<body id="homepage">

    <div id="wrapper">

       @include('layout.header')

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            @include('partial.slider')

            @yield('content')
          

@include('layout.footer')