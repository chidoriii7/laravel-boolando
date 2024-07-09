<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
<head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="top-page">
            <div class="topitems">
               <div class="white-text targets">
                   <a href="#">Donna</a>
                   <a href="#">Uomo</a>
                   <a href="#">Bambini</a>
               </div>
               <div class="booleanlogo ">
                    <img src="img/boolean-logo.png" alt="">
               </div>
               <div class="buttons white-text">
                   <div class="user">U</div>
                   <div class="favourite">H</div>
                   <div class="cart">C</div>
               </div>
            </div>
        </header>

        <main class="cardlist">
            
            <div class="container">

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/1.webp') }}" alt="">
                    <div class="label">
                        <span class="discount">-50%</span>
                        <span class="greenflag">Sostenibilità</span>                        
                    </div>
                    <div class="heart">
                        <span>&hearts;</span>
                    </div>
                    <div class="description">
                        <span class="marca">Levi's</span> <br>
                        <span class="item">RELAXED FIT TEE UNISEX</span> <br>
                        <span class="price">13,99€</span> 
                        <span class="oldprice">24,99€</span>
                        
                    </div>
                </div>

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/2.webp') }}" alt="">
                    <div class="label">
                        <span class="discount">-30%</span>
                    </div>
                    <div class="heart">
                        <span>&hearts;</span>
                    </div>
                    <div class="description">
                        <span class="marca">Guess</span> <br>
                        <span class="item">ROSES TEE</span> <br>
                        <span class="price">20,99€</span> 
                        <span class="oldprice">29,99€</span>
                        
                    </div>
                </div>

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/3.webp') }}" alt="">
                   <div class="label">
                       <span class="discount">-30%</span>
                   </div>
                   <div class="heart">
                    <span>&hearts;</span>
                    </div>
                    <div class="description">
                        <span class="marca">Come zucchero filato</span> <br>
                        <span class="item">VOGLIA DI COLORI PASTELLO</span> <br>
                        <span class="price">129,99€</span> 
                        <span class="oldprice">184,99€</span>
                        
                    </div>
                </div>

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/4.webp') }}" alt="">
                    <div class="label">
                        <span class="discount">-50%</span>
                        <span class="greenflag">Sostenibilità</span>
                    </div>
                    <div class="heart">
                        <span>&hearts;</span>
                    </div>
                    <div class="description">
                        <span class="marca">Levi's</span> <br>
                        <span class="item">TEE UNISEX</span> <br>
                        <span class="price">14,99€</span> 
                        <span class="oldprice">29,99€</span>
                        
                    </div>
                </div>
                
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/5.webp') }}" alt="">
                    <div class="heart">
                        <span>&hearts;</span>
                    </div>
                    <div class="description">
                        <span class="marca">Maya Deluxe</span> <br>
                        <span class="item">STRIPE BODICE</span> <br>
                        <span class="price">99,99€</span> 
                        
                        
                    </div>
                </div>
                

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/6.webp') }}" alt="">
                    <div class="label">
                        <span></span>
                        <span class="greenflag">Sostenibilità</span>
                    </div>
                    <div class="heart">
                        <span>&hearts;</span>
                    </div>
                    <div class="description">
                        <span class="marca">Esprit</span> <br>
                        <span class="item">MAGLIONE - BLACK</span> <br>
                        <span class="price">29,99€</span> 
                    </div>
                </div>
            </div>
        </main>

        <footer class="bottom-side white-text">
            <div class="company">
                <span>Boolando s.r.l</span>
                <span>Trovaci anche su</span>
            </div>
            <div class="informations">
                <div>
                    <span>informazioni legali</span>
                    <span>informazioni sulla privacy</span>
                    <span>informazioni Diritto di recesso</span>
                </div>
                <div>
                    <a href="">T</a>
                    <a href="">F</a>
                    <a href="">I</a>
                    <a href="">P</a>
                    <a href="">Y</a>
                </div>
            </div>

        </footer>
</body>
</html>