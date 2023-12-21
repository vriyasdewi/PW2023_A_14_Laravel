@extends('dashboard')
@section('content')

<style>
    img {
        height: 200px;
    }
    section {
        background-image: url('images/hero_3.jpg'); /* Replace 'your-image-url.jpg' with the actual path to your background image */
        background-size: cover; /* This will cover the entire section */
        background-repeat: no-repeat; /* This prevents the background from repeating */
        background-position: center center; /* Center the background image horizontally and vertically */
    }
    .transparent-container {
        background-color: rgba(255, 255, 255, 0.1); /* Adjust the alpha value (0.7) to control transparency */
    }
</style>
<section>
    <br>
    <br>
    <br>
    <div class="container transparent-container">
        <h1 class="text-center mt-5" style="color: white;">Menu</h1>
        <hr>
        <div class="row">
            <!-- Card 1 -->
            <div class="col col-md-4 mb-4">
                <div class="card card-sm">
                    <img src="{{ asset('img/food/nasgor.jpg') }}" class="card-img-top" alt="Nasi Goreng">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text">Delicious fried rice with a variety of flavors.</p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add to Cart</button>
                            </div>
                        </div>
                        <p class="card-text">Price: Rp. 30,000</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col col-md-4 mb-4">
                <div class="card card-sm">
                    <img src="{{ asset('img/food/bbq.jpg') }}" class="card-img-top" alt="Barbeque">
                    <div class="card-body">
                        <h5 class="card-title">Barbeque</h5>
                        <p class="card-text">Tender and flavorful barbecue dishes for your cravings.</p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add to Cart</button>
                            </div>
                        </div>
                        <p class="card-text">Price: Rp. 300,000</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col col-md-4 mb-4">
                <div class="card card-sm">
                    <img src="{{ asset('img/food/burger.jpg') }}" class="card-img-top" alt="Burger">
                    <div class="card-body">
                        <h5 class="card-title">Burger</h5>
                        <p class="card-text">Juicy and satisfying burgers with various toppings.</p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add to Cart</button>
                            </div>
                        </div>
                        <p class="card-text">Price: Rp. 50,000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Card 4 -->
            <div class="col col-md-4 mb-4">
                <div class="card card-sm">
                    <img src="{{ asset('img/food/cocktail.jpg') }}" class="card-img-top" alt="Cocktail">
                    <div class="card-body">
                        <h5 class="card-title">Cocktail</h5>
                        <p class="card-text">Refreshing cocktails to quench your thirst.</p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add to Cart</button>
                            </div>
                        </div>
                        <p class="card-text">Price: Rp. 70,000</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col col-md-4 mb-4">
                <div class="card card-sm">
                    <img src="{{ asset('img/food/mocktail.jpg') }}" class="card-img-top" alt="Mocktail">
                    <div class="card-body">
                        <h5 class="card-title">Mocktail</h5>
                        <p class="card-text">Non-alcoholic and flavorful mocktails for everyone.</p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add to Cart</button>
                            </div>
                        </div>
                        <p class="card-text">Price: Rp. 25,000</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col col-md-4 mb-4">
                <div class="card card-sm">
                    <img src="{{ asset('img/food/jus.jpg') }}" class="card-img-top" alt="Jus">
                    <div class="card-body">
                        <h5 class="card-title">Jus</h5>
                        <p class="card-text">Fresh and natural fruit juices to revitalize your day.</p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add to Cart</button>
                            </div>
                        </div>
                        <p class="card-text">Price: Rp. 20,000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
    <div class="col-md-4 offset-md-4 d-flex justify-content-center">
        <button class="btn btn-primary" type="button" id="button-confirm-order">Confirm Order</button>
    </div>
</div>
    </div>
    
    <hr>
    <div class="container">
        <div class="shopping-cart" style="color: white;">
            
            <h3>Shopping Cart</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>

                </thead>
                <tbody id="shopping-cart-body">
                    <!-- Items will be added here -->
                </tbody>
            </table>
            <p>Total: Rp.<span id="total-price">0</span></p>
            <button class="btn btn-primary" id="checkout-btn">Checkout</button>
            
        </div>
    </div>
<br>
</section>


<script type="text/javascript">
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
            nav.classList.add('shadow');
        } else {
            nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
            nav.classList.add('shadow');
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Mock product data
    const products = [{
            name: 'Burger',
            quantity: 1,
            price: 50000
        },
        {
            name: 'Barbeque',
            quantity: 2,
            price: 300000
        },
        {
            name: 'Nasigoreng',
            quantity: 3,
            price: 30000
        },
    ];

    // Function to populate the table with dummy data
    function populateTable() {
        const tbody = document.getElementById('shopping-cart-body');
        let totalPrice = 0;

        products.forEach(product => {
            const tr = document.createElement('tr');

            Object.values(product).forEach(value => {
                const td = document.createElement('td');
                td.textContent = value;
                tr.appendChild(td);
            });

            tbody.appendChild(tr);
            totalPrice += product.quantity * product.price;
        });

        document.getElementById('total-price').textContent = totalPrice;
    }

    // Call the function to populate the table
    populateTable();
</script>
@endsection