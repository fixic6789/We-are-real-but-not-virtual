<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <div class="welcome">

        <div class="welcome-text">
            <p>Photo project</p>
            <h1>We are real</h1>
            <h2>but not virtual</h2>
        </div>
        <button class="order-photo btn-1">
            <svg class="order-arrow" width="31" height="12" viewBox="0 0 31 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.5303 6.53033C30.8232 6.23744 30.8232 5.76256 30.5303 5.46967L25.7574 0.696699C25.4645 0.403806 24.9896 0.403806 24.6967 0.696699C24.4038 0.989593 24.4038 1.46447 24.6967 1.75736L28.9393 6L24.6967 10.2426C24.4038 10.5355 24.4038 11.0104 24.6967 11.3033C24.9896 11.5962 25.4645 11.5962 25.7574 11.3033L30.5303 6.53033ZM0 6.75H30V5.25H0V6.75Z" fill="black"/>
                </svg>
                order a <br>photo story
        </button>
        <button class="live-chat">Live chat</button>



        <button type="button" class="live-chat" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Live chat</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">



            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body" style="width: 100%; height: 100%; padding:0%">

                        <div class="modal-header" style="position: absolute;
                       display:flex;
                        width: 100%;
                        height: 56px;
                        left: 0px;
                        top: 0px;
                        background: #FFE8E8;">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.2" d="M20.4925 10.012C20.8295 10.9717 21.0011 11.9818 21 12.999V12.999C21 15.386 20.0518 17.6751 18.364 19.363C16.6762 21.0508 14.387 21.999 12 21.999H11.5123V21.9994C12.1333 23.7541 13.283 25.2732 14.803 26.3477C16.323 27.4221 18.1386 27.999 20 27.999H28.25C28.4489 27.999 28.6397 27.92 28.7803 27.7793C28.921 27.6387 29 27.4479 29 27.249V18.999C29 16.6972 28.118 14.4828 26.5355 12.8113C24.953 11.1397 22.7902 10.1381 20.4918 10.0122L20.4925 10.012Z" fill="black"/>
                            <path d="M12 21.999H3.75C3.55109 21.999 3.36032 21.92 3.21967 21.7794C3.07902 21.6387 3 21.4479 3 21.249V12.999C3 10.6121 3.94821 8.32288 5.63604 6.63505C7.32386 4.94723 9.61304 3.99902 12 3.99902H12C14.3869 3.99902 16.6761 4.94724 18.364 6.63506C20.0518 8.32289 21 10.6121 21 12.999V12.999C21 15.386 20.0518 17.6752 18.364 19.363C16.6761 21.0508 14.387 21.999 12 21.999V21.999Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5123 21.9994C12.1333 23.7541 13.283 25.2732 14.803 26.3477C16.323 27.4221 18.1386 27.999 20 27.999H28.25C28.4489 27.999 28.6397 27.92 28.7803 27.7793C28.921 27.6387 29 27.4479 29 27.249V18.999C29 16.6972 28.118 14.4828 26.5355 12.8113C24.953 11.1398 22.7902 10.1381 20.4918 10.0122" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        <div class="text" style="align:center;">Live chat</div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="align:right; "></button></div>




                        <div class="container"
                        style="width: 100%;
                                height: 500px;
                                left: 0px;
                                top: 0px;
                                background: #FEFAF7;
                                /* box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15); */
                                padding:0%;"
                                >
                                 {{-- <div class="row chat-row" style="margin: 10px"> --}}
                                    <div class="chat-content" style="
                                    margin-top: 20%;
                                    margin-left: 5%;
                                    width: 90%;
                                    height: 30%;
                                    left: 24px;
                                    top: 94px;

                                    background: #FFE8E8;
                                    border-radius: 50px;">
                                            <ul style="list-style: none,">

                                            </ul>
                                    </div>
                                    {{-- <label for="name">Имя</label> --}}

                                    {{-- <div class="chat-section">
                                        <div class="chat-box"> --}}

                                            {{-- <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control" style="margin-top: 5%">
                                            <br> --}}

                                            <div class="chat-input bg-primary" id="chatInput" contenteditable="" style=" border: 1px solid lightgray;
                                                background-color: white !important;
                                                 padding: 18px 10px;
                                                 color: black;
                                                position: absolute;
                                                width: 90%;
                                                height: 40%;
                                                left: 24px;
                                                top: 55%;">

                                            </div>

                                        {{-- </div>

                                    </div> --}}

                                {{-- </div> --}}

                        </div>

                    </div>
                    {{-- <input type="submit" value="Отправить" style="background: #FFE8E8;"> --}}
                </div>
            </div>
        </div>













        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>




    </div>
    <script src="https://cdn.socket.io/4.2.0/socket.io.min.js" integrity="sha384-PiBR5S00EtOj2Lto9Uu81cmoyZqR57XcOna1oAuVuIEjzj0wpqDVfD0JA9eXlRsj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            let ip_address = '127.0.0.1';
            let socket_port = '3000';
            let socket = io(ip_address + ':' + socket_port);




            let chatInput = $('#chatInput');

            chatInput.keypress(function(e){
                let message = $(this).html();
                console.log(message);
                if (e.which === 13 && !e.shiftKey){
                    socket.emit('sendChatToServer', message);
                    chatInput.html('');
                    return false;
                }
            });

            socket.on('sendChatToClient', (message) => {
                $('.chat-content ul').append(`<li>${message}</li>`);
            });


        });
    </script>
</body>
</html>
