<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
{{--    <div class="sidebar-heading">--}}
{{--        Interface--}}
{{--    </div>--}}

    <!-- Category Section -->
    <li class="nav-item {{ request()->routeIs('admin.category.create', 'admin.category.manage') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-cog"></i>
            <span>Category</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category Management:</h6>
                <a class="collapse-item" href="{{ route('admin.category.create') }}">
                    <i class="fas fa-plus"></i> Create Category
                </a>
                <a class="collapse-item" href="{{ route('admin.category.manage') }}">
                    <i class="fas fa-list"></i> Manage Categories
                </a>
            </div>
        </div>
    </li>

    <!-- Sub Category Section -->
    <li class="nav-item {{ request()->routeIs('admin.sub.category.create', 'admin.sub.category.manage') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubCategory"
           aria-expanded="false" aria-controls="collapseSubCategory">
            <i class="fas fa-fw fa-cog"></i>
            <span>Sub Category</span>
        </a>
        <div id="collapseSubCategory" class="collapse" aria-labelledby="headingSubCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sub Category Management:</h6>
                <a class="collapse-item" href="{{ route('admin.sub.category.create') }}">
                    <i class="fas fa-plus"></i> Create Sub Category
                </a>
                <a class="collapse-item" href="{{ route('admin.sub.category.manage') }}">
                    <i class="fas fa-list"></i> Manage Sub Categories
                </a>
            </div>
        </div>
    </li>


{{--    product--}}
    <li class="nav-item {{ request()->routeIs('admin.product.manage', 'admin.product.review.manage') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproduct"
           aria-expanded="false" aria-controls="collapseproduct">
            <i class="fas fa-fw fa-cube"></i>

            <span>Product</span>
        </a>
        <div id="collapseproduct" class="collapse" aria-labelledby="headingSubCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Manage:</h6>
                <a class="collapse-item" href="{{ route('admin.product.manage') }}">
                    <i class="fas fa-tools"></i>
                    product Manage
                </a>
                <a class="collapse-item" href="{{ route('admin.product.review.manage') }}">
                    <i class="fas fa-star"></i>
                    Product Review
                </a>
            </div>
        </div>
    </li>

{{--    ProductAttrubute--}}
    <li class="nav-item {{ request()->routeIs('admin.product.attrubute.create', 'admin.sub.category.manage') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseattrubute"
           aria-expanded="false" aria-controls="collapseattrubute">
            <i class="fas fa-fw fa-box"></i>
            <span>Product Attrubute</span>
        </a>
        <div id="collapseattrubute" class="collapse" aria-labelledby="headingSubCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Attrubute:</h6>
                <a class="collapse-item" href="{{ route('admin.product.attrubute.create') }}">
                    <i class="fas fa-plus"></i> Product Attrubute
                </a>
                <a class="collapse-item" href="{{ route('admin.product.attrubute.manage') }}">
                    <i class="fas fa-list"></i> product manage
                </a>
            </div>
        </div>
    </li>

{{--    discount--}}
    <li class="nav-item {{ request()->routeIs('admin.discount.create', 'admin.discount.manage') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsediscount"
           aria-expanded="false" aria-controls="collapsediscount">
            <i class="fas fa-percent"></i>
            <span>Discount</span>
        </a>
        <div id="collapsediscount" class="collapse" aria-labelledby="headingSubCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Attrubute:</h6>
                <a class="collapse-item" href="{{ route('admin.discount.create') }}">
                    <i class="fas fa-plus"></i> Discount Create
                </a>
                <a class="collapse-item" href="{{ route('admin.discount.manage') }}">
                    <i class="fas fa-list"></i> Discount manage
                </a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->
