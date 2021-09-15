<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">  
</head>
<body>
    <div class="modal-windows">
        <div class="feedback">
            <div class="form-head">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2" d="M20.4925 10.012C20.8295 10.9717 21.0011 11.9818 21 12.999V12.999C21 15.386 20.0518 17.6751 18.364 19.363C16.6762 21.0508 14.387 21.999 12 21.999H11.5123V21.9994C12.1333 23.7541 13.283 25.2732 14.803 26.3477C16.323 27.4221 18.1386 27.999 20 27.999H28.25C28.4489 27.999 28.6397 27.92 28.7803 27.7793C28.921 27.6387 29 27.4479 29 27.249V18.999C29 16.6972 28.118 14.4828 26.5355 12.8113C24.953 11.1397 22.7902 10.1381 20.4918 10.0122L20.4925 10.012Z" fill="black"/>
                    <path d="M12 21.999H3.75C3.55109 21.999 3.36032 21.92 3.21967 21.7794C3.07902 21.6387 3 21.4479 3 21.249V12.999C3 10.6121 3.94821 8.32288 5.63604 6.63505C7.32386 4.94723 9.61304 3.99902 12 3.99902H12C14.3869 3.99902 16.6761 4.94724 18.364 6.63506C20.0518 8.32289 21 10.6121 21 12.999V12.999C21 15.386 20.0518 17.6752 18.364 19.363C16.6761 21.0508 14.387 21.999 12 21.999V21.999Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.5123 21.9994C12.1333 23.7541 13.283 25.2732 14.803 26.3477C16.323 27.4221 18.1386 27.999 20 27.999H28.25C28.4489 27.999 28.6397 27.92 28.7803 27.7793C28.921 27.6387 29 27.4479 29 27.249V18.999C29 16.6972 28.118 14.4828 26.5355 12.8113C24.953 11.1398 22.7902 10.1381 20.4918 10.0122" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                <h3>Feedback</h3>
                    <button class="close-window">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.81456 6.81447C6.42404 7.205 6.42404 7.83816 6.81456 8.22869L10.5858 11.9999L6.81448 15.7712C6.42395 16.1617 6.42395 16.7949 6.81448 17.1854C7.205 17.576 7.83817 17.576 8.22869 17.1854L12 13.4141L15.7712 17.1854C16.1618 17.5759 16.7949 17.5759 17.1855 17.1854C17.576 16.7948 17.576 16.1617 17.1855 15.7712L13.4142 11.9999L17.1854 8.22875C17.5759 7.83823 17.5759 7.20506 17.1854 6.81454C16.7948 6.42401 16.1617 6.42401 15.7712 6.81454L12 10.5857L8.22878 6.81447C7.83825 6.42395 7.20509 6.42395 6.81456 6.81447Z" fill="black"/>
                            <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.81456 6.81447C6.42404 7.205 6.42404 7.83816 6.81456 8.22869L10.5858 11.9999L6.81448 15.7712C6.42395 16.1617 6.42395 16.7949 6.81448 17.1854C7.205 17.576 7.83817 17.576 8.22869 17.1854L12 13.4141L15.7712 17.1854C16.1618 17.5759 16.7949 17.5759 17.1855 17.1854C17.576 16.7948 17.576 16.1617 17.1855 15.7712L13.4142 11.9999L17.1854 8.22875C17.5759 7.83823 17.5759 7.20506 17.1854 6.81454C16.7948 6.42401 16.1617 6.42401 15.7712 6.81454L12 10.5857L8.22878 6.81447C7.83825 6.42395 7.20509 6.42395 6.81456 6.81447Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask0)">
                            </g>
                            </svg>
                    </button>
            </div>
    
            <div class="form-body">
                <form action="POST">
                    <input type="text" class="form-contact-info" placeholder="Enter the contact information..." required>
                    <textarea class="form-message" placeholder="Enter your message..." required></textarea>
                    <input type="submit" class="form-submit" value="Send">
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/forms.js')}}"></script>
</body>
</html>