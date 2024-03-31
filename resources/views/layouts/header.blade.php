<header id="header" class="header-area style-01 layout-03">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Organic@company.com</a>
                    </li>
                    <li><a href="#">Free Shipping for all Order of $99</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="horizontal-menu">
                    <li class="horz-menu-item currency">
                        <select name="currency">
                            <option value="eur">€ EUR (Euro)</option>
                            <option value="usd" selected>$ USD (Dollar)</option>
                            <option value="usd">£ GBP (Pound)</option>
                            <option value="usd">¥ JPY (Yen)</option>
                        </select>
                    </li>
                    <li class="horz-menu-item lang">
                        <select name="language">
                            <option value="fr">French (EUR)</option>
                            <option value="en" selected>English (USD)</option>
                            <option value="ger">Germany (GBP)</option>
                            <option value="jp">Japan (JPY)</option>
                        </select>
                    </li>
                    <li><a href="{{ route('login') }}" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                    <a href="{{ route('famille.index') }}" class="biolife-logo"><img src="assets/images/organic-3.png" alt="biolife logo" width="135" height="34"></a>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                            <li class="menu-item"><a href="{{ route('famille.index') }}">Home</a></li>
                            <li class="menu-item menu-item-has-children has-megamenu">
                                <a href="#" class="menu-name" data-title="Shop">Shop</a>
                                <div class="wrap-megamenu lg-width-900 md-width-750">
                                    <div class="mega-content">
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu">
                                                <h4 class="menu-title">Fresh Berries</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Fruit & Nut Gifts</a></li>
                                                    <li><a href="#">Mixed Fruits</a></li>
                                                    <li><a href="#">Oranges</a></li>
                                                    <li><a href="#">Bananas & Plantains</a></li>
                                                    <li><a href="#">Fresh Gala Apples</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu">
                                                <h4 class="menu-title">Vegetables</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Berries</a></li>
                                                    <li><a href="#">Pears</a></li>
                                                    <li><a href="#">Chili Peppers</a></li>
                                                    <li><a href="#">Fresh Avocado</a></li>
                                                    <li><a href="#">Grapes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu ">
                                                <h4 class="menu-title">Fresh Fruits</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Basket of apples</a></li>
                                                    <li><a href="#">Strawberry</a></li>
                                                    <li><a href="#">Blueberry</a></li>
                                                    <li><a href="#">Orange</a></li>
                                                    <li><a href="#">Pineapple</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu">
                                                <h4 class="menu-title">Featured Products</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Coffee Creamers</a></li>
                                                    <li><a href="#">Mayonnaise</a></li>
                                                    <li><a href="#">Almond Milk</a></li>
                                                    <li><a href="#">Fruit Jam</a></li>
                                                    <li><a href="#">Beverages</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children has-child">
                                <a href="#" class="menu-name" data-title="Products">Products</a>
                                <ul class="sub-menu">
                                    @foreach($familles as $famille)
                                    <li class="menu-item"><a href="{{ $famille->libelle }}">{{ $famille->libelle }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                    <div class="biolife-cart-info">
                        <div class="mobile-search">
                            <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                            <div class="mobile-search-content">
                                <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                    <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                    <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                    <select name="category">
                                        <option value="-1" selected>All Categories</option>
                                        @foreach($familles as $famille)
                                        <option value="{{ $famille->libelle }}">{{ $famille->libelle }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn-submit">go</button>
                                </form>
                            </div>
                        </div>
                        <div class="wishlist-block hidden-sm hidden-xs">
                            <a href="#" class="link-to">
                                <span class="icon-qty-combine">
                                    <i class="icon-heart-bold biolife-icon"></i>
                                    <span class="qty">4</span>
                                </span>
                            </a>
                        </div>
                        <div class="minicart-block">
                            <div class="minicart-contain">
                                <a href="javascript:void(0)" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-cart-mini biolife-icon"></i>
                                        <span class="qty">8</span>
                                    </span>
                                    <span class="title">My Cart -</span>
                                    <span class="sub-total">$0.00</span>
                                </a>
                                <div class="cart-content">
                                    <div class="cart-inner">
                                        <ul class="products">
                                            <li>
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src="assets/images/minicart/pr-01.jpg" width="90" height="90" alt="National Fresh"></a>
                                                    </div>
                                                    <div class="left-info">
                                                        <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id123][qty]">Qty:</label>
                                                            <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]" value="1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src="assets/images/minicart/pr-02.jpg" width="90" height="90" alt="National Fresh"></a>
                                                    </div>
                                                    <div class="left-info">
                                                        <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id124][qty]">Qty:</label>
                                                            <input type="number" class="input-qty" name="cart[id124][qty]" id="cart[id124][qty]" value="1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src="assets/images/minicart/pr-03.jpg" width="90" height="90" alt="National Fresh"></a>
                                                    </div>
                                                    <div class="left-info">
                                                        <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id125][qty]">Qty:</label>
                                                            <input type="number" class="input-qty" name="cart[id125][qty]" id="cart[id125][qty]" value="1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src="assets/images/minicart/pr-04.jpg" width="90" height="90" alt="National Fresh"></a>
                                                    </div>
                                                    <div class="left-info">
                                                        <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id126][qty]">Qty:</label>
                                                            <input type="number" class="input-qty" name="cart[id126][qty]" id="cart[id126][qty]" value="1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="minicart-item">
                                                    <div class="thumb">
                                                        <a href="#"><img src="assets/images/minicart/pr-05.jpg" width="90" height="90" alt="National Fresh"></a>
                                                    </div>
                                                    <div class="left-info">
                                                        <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                        <div class="price">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="qty">
                                                            <label for="cart[id127][qty]">Qty:</label>
                                                            <input type="number" class="input-qty" name="cart[id127][qty]" id="cart[id127][qty]" value="1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="btn-control">
                                            <a href="#" class="btn view-cart">view cart</a>
                                            <a href="#" class="btn">checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="vertical-menu vertical-category-block">
                        <div class="block-title">
                            <span class="menu-icon">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                            <span class="menu-title">All departments</span>
                            <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                        </div>
                        <div class="wrap-menu">
                            <ul class="menu clone-main-menu">
                                @foreach($familles as $famille)
                                <li class="menu-item"><a href="{{ $famille->libelle }}" class="menu-title"><i class="biolife-icon icon-fast-food"></i>{{ $famille->libelle }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 padding-top-2px">
                    <div class="header-search-bar layout-01">
                        <form action="#" class="form-search" name="desktop-seacrh" method="get">
                            <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                            <select name="category">
                                <option value="-1" selected>All Categories</option>
                                @foreach($familles as $famille)
                                <option value="{{ $famille->libelle }}">{{ $famille->libelle }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                        </form>
                    </div>
                    <div class="live-info">
                        <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+900) 123 456 7892</b></p>
                        <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>