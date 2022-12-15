<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="cell-5">
                <ul>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@it-rays.com</a></li>
                    <li><span><i class="fa fa-phone"></i> Call Us: +1 (888) 000-0000</span></li>
                </ul>
            </div>
            <div class="cell-7 right-bar">
                <ul class="right">
                    <!-- <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>0 item(s) - $0.00</a></li>
                    <li><a href="siteMap.html"><i class="fa fa-sitemap"></i>Site Map</a></li> -->
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                 </form>
                </ul>
            </div>
        </div>
    </div>
</div>
