<?php
// index.php
// ... (Phần include data và định nghĩa $page_title)

// 2. Tải header
include 'includes/header.php'; 
?>

<section class="py-16">
    <div class="container mx-auto px-4">
        <?php include 'components/brand_products.php'; ?>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php include 'components/category_products.php'; ?>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <?php include 'components/product_section.php'; ?>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php include 'components/article_section.php'; ?>
    </div>
</section>

<?php
// 3. Tải footer
include 'includes/footer.php';
?>