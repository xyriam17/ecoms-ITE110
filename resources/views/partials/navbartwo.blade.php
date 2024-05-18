<style>
    @media only screen and (max-width: 500px) {
        .and {
            font-size: 30px;
        }

    }
</style>

<div class="container">
    <header class="blog-header py-3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="blog-header-logo text-dark"><span class="and">Sweet <span style="color: #ff4321;">Serenity</span> Cake</span></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('products.productshop')}}">Products</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('cart.show')}}">Your Cart</a>
            </li>
        </ul>

       
        &nbsp;
        <form class="form-inline my-2 my-lg-0">
            @auth()
                <a class="btn btn-sm btn-outline-secondary" href="#">Profile({{optional(auth()->user())->name}})</a>
                &nbsp;
                <a class="btn btn-sm btn-outline-secondary" href="{{route('logout')}}">Log Out</a>

            @endauth
            @guest()
                <a class="btn btn-sm btn-outline-secondary" href="{{route('registerClick')}}">Sign up</a>
                    &nbsp;
                    <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">Log In</a>
            @endguest
        </form>
    </div>
</nav>
    </header>
</div>
    <br>
