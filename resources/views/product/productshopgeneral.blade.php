@extends('master')
@section('contents')
    @include('partials.header')
    @stop

@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');

        :root{
            --white-light: rgba(255, 255, 255, 0.5);
            --alice-blue: #f8f9fa;
            --carribean-green: #40c9a2;
            --gray: #ededed;
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Quicksand', sans-serif;
        }

        /* Utility stylings */
        img{
            width: 100%;
            display: block;
        }
        .container{
            width: 88vw;
            margin: 0 auto;
        }
        .lg-title,
        .md-title,
        .sm-title{
            font-family: 'Roboto', sans-serif;
            padding: 0.6rem 0;
            text-transform: capitalize;
        }
        .lg-title{
            font-size: 2.5rem;
            font-weight: 500;
            text-align: center;
            padding: 1.3rem 0;
            opacity: 0.9;
        }
        .md-title{
            font-size: 2rem;
            font-family: 'Roboto', sans-serif;
        }
        .sm-title{
            font-weight: 300;
            font-size: 1rem;
            text-transform: uppercase;
        }
        .text-light{
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            opacity: 0.5;
            margin: 0.4rem 0;
        }

        /* product section */
        .products{
            background: var(--alice-blue);
            padding: 3.2rem 0;
        }
        .products .text-light{
            text-align: center;
            width: 70%;
            margin: 0.9rem auto;
        }
        .product{
            margin: 2rem;
            position: relative;
        }
        .product-content{
            background: var(--gray);
            padding: 3rem 0.5rem 2rem 0.5rem;
            cursor: pointer;
        }
        .product-img{
            background: var(--white-light);
            box-shadow: 0 0 20px 10px var(--white-light);
            width: 300px;
            height: 400px;
            margin: 0 auto;
            border-radius: 50%;
            transition: background 2.5s ease;
        }
        .product-btns{
            display: flex;
            justify-content: center;
            margin-top: 1.4rem;
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        .btn-cart, .btn-buy{
            background: transparent;
            border: 1px solid black;
            padding: 0.8rem 0;
            width: 125px;
            font-family: inherit;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            transition: all 0.6s ease;
        }
        .btn-cart{
            background: black;
            color: white;
        }
        .btn-cart:hover{
            background: var(--carribean-green);
        }
        .btn-buy{
            background: white;
        }
        .btn-buy:hover{
            background: var(--carribean-green);
            color: #fff;
        }
        .product-info{
            background: white;
            padding: 2rem;
        }
        .product-info-top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .rating span{
            color: var(--carribean-green);
        }
        .product-name{
            color: black;
            display: block;
            text-decoration: none;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
        }
        .product-price{
            padding-top: 0.6rem;
            padding-right: 0.6rem;
            display: inline-block;
        }
        .product-price:first-of-type{
            text-decoration: line-through;
            color: var(--carribean-green);
        }
        .product-img img{
            transition: transform 0.6s ease;
        }
        .product:hover .product-img img{
            transform: scale(1.1);
        }
        /*.product:hover .product-img{*/
        /*    background: var(--carribean-green);*/
        /*}*/
        .product:hover .product-btns{
            opacity: 1;
        }
        .off-info .sm-title{
            background: var(--carribean-green);
            color: white;
            display: inline-block;
            padding: 0.5rem;
            position: absolute;
            top: 0;
            left: 0;
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            z-index: 1;
            letter-spacing: 3px;
            cursor: pointer;
        }

        /* product collection */
        /*.product-collection{*/
        /*    padding: 3.2rem 0;*/
        /*}*/
        /*.product-collection-wrapper{*/
        /*    padding: 3.2rem 0;*/
        /*}*/
        /*.product-col-left{*/
        /*    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-1.jpg") center/cover no-repeat;*/
        /*}*/
        /*.product-col-r-top{*/
        /*    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-2.png") center/cover no-repeat;*/
        /*}*/
        /*.flex{*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: flex-end;*/
        /*    height: 50vh;*/
        /*    padding: 2rem 1.5rem 3.2rem;*/
        /*    margin: 5px;*/
        /*}*/
        /*.product-col-r-bottom > div:first-child{*/
        /*    background: #eaa001;*/
        /*}*/
        /*.product-col-r-bottom > div:last-child{*/
        /*    background: #0090ff;*/
        /*}*/
        /*.product-col-content{*/
        /*    text-align: center;*/
        /*    color: white;*/
        /*}*/
        /*.product-collection .text-light{*/
        /*    opacity: 1;*/
        /*    font-size: 0.8;*/
        /*    font-weight: 400;*/
        /*    line-height: 1.7;*/
        /*}*/
        /*.btn-dark{*/
        /*    background: black;*/
        /*    color: white;*/
        /*    outline: 0;*/
        /*    border-radius: 25px;*/
        /*    padding: 0.7rem 1rem;*/
        /*    border: 0;*/
        /*    margin-top: 1rem;*/
        /*    cursor: pointer;*/
        /*    transition: all 0.6s ease;*/
        /*    font-size: 1rem;*/
        /*    font-family: inherit;*/
        /*}*/
        /*.btn-dark:hover{*/
        /*    background: var(--carribean-green);*/
        /*}*/







        /* Media Queries */
        @media screen and (min-width: 992px){
            .product-items{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
            .product-col-r-bottom{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media screen and (min-width: 1200px){
            .product-items{
                grid-template-columns: repeat(3, 1fr);
            }
            .product{
                margin-right: 1rem;
                margin-left: 1rem;
            }
            .products .text-light{
                width: 50%;
            }
        }

        @media screen and (min-width: 1336px){
            .product-items{
                grid-template-columns: repeat(2, 1fr);
            }
            .product-collection-wrapper{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
            .flex{
                height: 60vh;
            }
            .product-col-left{
                height: 121.5vh;
            }
        }
    </style>

   


    <div class = "products">
        <div class = "container">
            <h1 class = "lg-title"><i>Your delicious experience starts here</i></h1>
{{--            <p class = "text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium. Temporibus, quis cum.</p>--}}

            <div class = "product-items">
                <!-- single product -->
               
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/a.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Kit Kat Cake</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/b.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Pineapple Cake</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/c.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Eggless Cakes</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/d.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Chocolate Rose</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/i.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">White Forest Cream</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/j.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Creamy Drip Chocolate</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/f.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Chocolaty Rolls</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                       
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/g.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Death By Chocolate</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src="uploads/h.webp" width="280px" height="370px" alt="product image">
                        </div>
                        <div class = "product-btns">
                            <form method="POST" action="http://127.0.0.1:8000/cart" 
                            @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            </form>
                            <form method="POST" action="http://127.0.0.1:8000/cart/buynow">
                                @csrf
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>                                <input type="hidden" name="product_id" value="1">
                            <button type = "submit" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                            </form>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">Pink Strawberry Cream</h2>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        
                                                    <p class = "product-price">PHP 1291.00</p>
                            <p class = "product-price">PHP 90.00</p>
                                            </div>

                    
                </div>
            
                <!-- end of single product -->
                
        </div>
    </div>


    </div>

@stop

