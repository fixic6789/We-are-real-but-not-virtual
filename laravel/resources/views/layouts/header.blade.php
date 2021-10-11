<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
</head>
<body>
    <div class="fixed-background"></div>    
    <header>
        <nav class="menu">
            <div class="logo">
                @if (Request::is('/'))
                    <img  src="/storage/img/logo.png" alt="">
                @else
                    <a href="/">
                        <img  src="/storage/img/logo.png" alt="">
                    </a>
                @endif
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="#">Photo</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="nav-buttons">
                <ul>
                    <li>
                        <a href="tel:" class="call-us">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3532 1.49988C17.0542 1.91088 19.9782 4.83088 20.3932 8.53188" stroke="#130F26" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.3532 5.04272C15.1242 5.38672 16.5082 6.77172 16.8532 8.54272" stroke="#130F26" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0316 11.4723C14.0206 15.4602 14.9256 10.8466 17.4654 13.3847C19.9139 15.8326 21.3223 16.3231 18.2189 19.4246C17.8303 19.7369 15.3614 23.4941 6.68458 14.8195C-1.99329 6.14388 1.76168 3.67232 2.07406 3.28383C5.18388 0.173724 5.66694 1.58926 8.11551 4.03721C10.6542 6.57637 6.04265 7.48429 10.0316 11.4723Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                
                              call us
                        </a>
                        
                    </li>
                    <li>
                        <svg width="31" height="12" viewBox="0 0 31 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.5303 6.53033C30.8232 6.23744 30.8232 5.76256 30.5303 5.46967L25.7574 0.696699C25.4645 0.403806 24.9896 0.403806 24.6967 0.696699C24.4038 0.989593 24.4038 1.46447 24.6967 1.75736L28.9393 6L24.6967 10.2426C24.4038 10.5355 24.4038 11.0104 24.6967 11.3033C24.9896 11.5962 25.4645 11.5962 25.7574 11.3033L30.5303 6.53033ZM0 6.75H30V5.25H0V6.75Z" fill="black"/>
                            </svg>
                    </li>
                    <li>
                        <button class="get-in-touche">
                            get in touch 
                        </button>                           
                    </li>
                </ul>
            </div>
        
            </nav>

            

            <div class="side-socials">
                <svg width="1" height="80" viewBox="0 0 1 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.5" y1="2.18557e-08" x2="0.499997" y2="80" stroke="black"/>
                </svg>

               <div class="socials">
                   <img src="/img/instagram.png" alt="">
                   <img src="/img/facebook.png" alt="">
                   <img src="/img/twiter.png" alt="">
                </div>

                <svg width="1" height="80" viewBox="0 0 1 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.5" y1="2.18557e-08" x2="0.499997" y2="80" stroke="black"/>
                </svg>
            </div>
    </header>
    


</body>
</html>