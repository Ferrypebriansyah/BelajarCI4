//Use Layout
<?= $this->extend('layouts/mainlayout') ?>

//content
<?= $this->section('content') ?>
<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-primary">All Menu</h2>
        <div class="d-flex align-items-center">
            <!-- Filter Icon -->
            <button class="btn btn-outline-secondary me-2">
                <i class="bi bi-funnel"></i>
            </button>
            <!-- Search Bar -->
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Search">
            </div>
            <!-- Cart Icon -->
            <button class="btn btn-outline-secondary ms-2">
                <i class="bi bi-cart"></i>
            </button>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>