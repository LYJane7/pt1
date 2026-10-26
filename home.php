<?php
ob_start();
?>

<div class="card border-0 bg-white shadow-sm rounded-4 p-4 p-md-5 mb-4 text-center">
    <div class="py-3">
        <span class="badge bg-light text-dark border rounded-pill px-3 py-2 mb-3 fw-normal">
            <i class="bi bi-sparkles text-warning me-1"></i> Natural Wellness & Skincare
        </span>
        <h1 class="display-6 fw-bold text-dark mb-2">Dry Body Brushes</h1>
        <p class="lead text-muted mb-4 mx-auto" style="max-width: 600px;">
            Welcome to the Dry Body Brush Management System. Easily manage dry body brush inventory, customer records, staff profiles, and orders.
        </p>
    </div>
</div>

<div class="row g-3">
    <div class="col-6 col-md-3">
        <div class="card border-0 bg-white shadow-sm rounded-4 text-center p-3 h-100">
            <div class="card-body p-2 d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-box-seam text-primary fs-2 mb-2"></i>
                <h6 class="fw-bold text-dark mb-1">Products</h6>
                <small class="text-muted mb-3 d-block">20 Brush Items</small>
                <a href="products.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 mt-auto">Open</a>
            </div>
        </div>
    </div>
    
    <div class="col-6 col-md-3">
        <div class="card border-0 bg-white shadow-sm rounded-4 text-center p-3 h-100">
            <div class="card-body p-2 d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-people text-success fs-2 mb-2"></i>
                <h6 class="fw-bold text-dark mb-1">Customers</h6>
                <small class="text-muted mb-3 d-block">Customer Profiles</small>
                <a href="customers.php" class="btn btn-sm btn-outline-success rounded-pill px-3 mt-auto">Open</a>
            </div>
        </div>
    </div>
    
    <div class="col-6 col-md-3">
        <div class="card border-0 bg-white shadow-sm rounded-4 text-center p-3 h-100">
            <div class="card-body p-2 d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-person-badge text-warning fs-2 mb-2"></i>
                <h6 class="fw-bold text-dark mb-1">Staffs</h6>
                <small class="text-muted mb-3 d-block">Staff Directory</small>
                <a href="staffs.php" class="btn btn-sm btn-outline-warning rounded-pill px-3 mt-auto">Open</a>
            </div>
        </div>
    </div>
    
    <div class="col-6 col-md-3">
        <div class="card border-0 bg-white shadow-sm rounded-4 text-center p-3 h-100">
            <div class="card-body p-2 d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-cart-check text-info fs-2 mb-2"></i>
                <h6 class="fw-bold text-dark mb-1">Orders</h6>
                <small class="text-muted mb-3 d-block">Invoices & Details</small>
                <a href="orders.php" class="btn btn-sm btn-outline-info rounded-pill px-3 mt-auto">Open</a>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 bg-white shadow-sm rounded-4 p-4 p-md-5 mt-4">
    <!-- 上半部分：左右 7:5 栅格拉满左右两侧 -->
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
            <span class="badge bg-light text-dark border rounded-pill px-3 py-2 mb-3 fw-normal">
                <i class="bi bi-info-circle text-primary me-1"></i> About Our Products
            </span>
            <h3 class="fw-bold text-dark mb-3">Why Dry Body Brushing?</h3>
            <p class="text-muted mb-0" style="line-height: 1.8;">
                Dry body brushing is a daily wellness ritual that gently exfoliates dead skin, stimulates lymphatic drainage, and invigorates blood circulation. Our catalog features 100% natural brushes crafted from boar bristles, cactus fibers, and sustainable bamboo handles.
            </p>
        </div>
      </div>

    <hr class="my-4 text-secondary opacity-25">

    <div class="row g-3">
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-3 d-flex align-items-center h-100">
                <i class="bi bi-check-circle-fill text-success fs-3 me-3"></i>
                <div>
                    <strong class="d-block text-dark">100% Natural Bristles</strong>
                    <small class="text-muted">Boar & Cactus Fibers</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-3 d-flex align-items-center h-100">
                <i class="bi bi-check-circle-fill text-success fs-3 me-3"></i>
                <div>
                    <strong class="d-block text-dark">Eco-Friendly Bamboo</strong>
                    <small class="text-muted">Sustainable Handles</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-3 d-flex align-items-center h-100">
                <i class="bi bi-check-circle-fill text-success fs-3 me-3"></i>
                <div>
                    <strong class="d-block text-dark">Lymphatic Wellness</strong>
                    <small class="text-muted">Gentle Skin Detox</small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>