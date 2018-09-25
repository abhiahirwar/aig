<!-- small button begin -->
<span id="menu-btn"></span>
<!-- small button close -->
<!-- mainmenu begin -->
<nav>
    <ul id="mainmenu">
        <li><a href="/">Home</a>
            
        </li>
        <li ><a class="{{ Request::path() == 'about' ? 'active' : '' }}" href="{{ url('about') }}">About IG Blinds</a>
            
        </li>
        <li><a class="{{ Request::path() == 'products' ? 'active' : '' }}" href="{{ url('products') }}">Product Range</a>
            
        </li>
        <li><a class="{{ Request::path() == 'spec' ? 'active' : '' }}" href="{{ url('spec') }}">Color and Specification</a>
            
        </li>
        <li><a class="{{ Request::path() == 'glass-options' ? 'active' : '' }}" href="{{ url('glass-options') }}">Glass Option</a>
            
        </li>
        <li><a class="{{ Request::path() == 'warranty' ? 'active' : '' }}" href="{{ url('warranty') }}">Warranty</a></li>
        <li><a class="{{ Request::path() == 'contact' ? 'active' : '' }}" href="{{ url('contact') }}">Contact us</a></li>
    </ul>
</nav>