<header>
        <nav>
            <a href="#home" class="logo">
                <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <!-- Hexagon background -->
                    <polygon points="50,5 85,25 85,65 50,85 15,65 15,25"
                             fill="none"
                             stroke="url(#gradientStroke)"
                             stroke-width="2"/>

                    <!-- Neural network nodes -->
                    <circle cx="50" cy="30" r="4" fill="#00ffff"/>
                    <circle cx="35" cy="45" r="4" fill="#ff00ff"/>
                    <circle cx="65" cy="45" r="4" fill="#ff00ff"/>
                    <circle cx="35" cy="65" r="4" fill="#00ffff"/>
                    <circle cx="65" cy="65" r="4" fill="#00ffff"/>
                    <circle cx="50" cy="55" r="5" fill="#7c3aed"/>

                    <!-- Connection lines -->
                    <line x1="50" y1="30" x2="35" y2="45" stroke="#00ffff" stroke-width="1" opacity="0.5"/>
                    <line x1="50" y1="30" x2="65" y2="45" stroke="#00ffff" stroke-width="1" opacity="0.5"/>
                    <line x1="35" y1="45" x2="50" y2="55" stroke="#ff00ff" stroke-width="1" opacity="0.5"/>
                    <line x1="65" y1="45" x2="50" y2="55" stroke="#ff00ff" stroke-width="1" opacity="0.5"/>
                    <line x1="50" y1="55" x2="35" y2="65" stroke="#7c3aed" stroke-width="1" opacity="0.5"/>
                    <line x1="50" y1="55" x2="65" y2="65" stroke="#7c3aed" stroke-width="1" opacity="0.5"/>

                    <!-- Gradient definitions -->
                    <defs>
                        <linearGradient id="gradientStroke" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#00ffff;stop-opacity:1" />
                            <stop offset="50%" style="stop-color:#ff00ff;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#7c3aed;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="logo-text">Chain Summit</span>
            </a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="#schedule">Schedule</a></li>
                <li><a href="#sponsors">Sponsors</a></li>
                <li><a href="#register">Register</a></li>
            </ul>
            <div class="mobile-menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <!-- Mobile Navigation Menu -->
        <div class="mobile-nav" id="mobileNav">
            <a href="#about" onclick="closeMenu()">About</a>
            <a href="#speakers" onclick="closeMenu()">Speakers</a>
            <a href="#schedule" onclick="closeMenu()">Schedule</a>
            <a href="#sponsors" onclick="closeMenu()">Sponsors</a>
            <a href="#register" onclick="closeMenu()">Register</a>
        </div>
    </header>