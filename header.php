<?php
// includes/header.php

// HÀM FORMAT_CURRENCY ĐÃ ĐƯỢC XÓA Ở ĐÂY. 
// Giả định nó được load từ data/products_data.php hoặc một file utilities.php 
// được include trước header.php trong file chính (ví dụ: index.php)

// Sử dụng biến $page_title nếu nó được định nghĩa
$page_title = $page_title ?? 'TechZ - Cửa hàng công nghệ';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
   @custom-variant dark (&:is(.dark *));

:root {
  --font-size: 16px;
  --background: #ffffff;
  --foreground: oklch(0.145 0 0);
  --card: #ffffff;
  --card-foreground: oklch(0.145 0 0);
  --popover: oklch(1 0 0);
  --popover-foreground: oklch(0.145 0 0);
  --primary: #030213;
  --primary-foreground: oklch(1 0 0);
  --secondary: oklch(0.95 0.0058 264.53);
  --secondary-foreground: #030213;
  --muted: #ececf0;
  --muted-foreground: #717182;
  --accent: #e9ebef;
  --accent-foreground: #030213;
  --destructive: #d4183d;
  --destructive-foreground: #ffffff;
  --border: rgba(0, 0, 0, 0.1);
  --input: transparent;
  --input-background: #f3f3f5;
  --switch-background: #cbced4;
  --font-weight-medium: 500;
  --font-weight-normal: 400;
  --ring: oklch(0.708 0 0);
  --chart-1: oklch(0.485 0.16 283.56);
  --chart-2: oklch(0.669 0.19 135.25);
  --chart-3: oklch(0.537 0.14 77.2);
  --chart-4: oklch(0.641 0.15 330.17);
  --chart-5: oklch(0.404 0.1 230.18);
  --sidebar-background: var(--background);
  --sidebar-foreground: var(--foreground);
  --sidebar-accent: oklch(0.95 0.0058 264.53);
  --sidebar-accent-foreground: var(--foreground);
  --sidebar-border: var(--border);
  --color-sidebar-ring: var(--sidebar-ring);

  /* Tailwind config values - text sizes and weights */
  --text-sm: 0.875rem;
  --text-base: 1rem;
  --text-lg: 1.125rem;
  --text-xl: 1.25rem;
  --text-2xl: 1.5rem;
  --text-3xl: 1.875rem;
  --text-4xl: 2.25rem;
  --text-5xl: 3rem;
}

@layer base {
  * {
    @apply border-border outline-ring/50;
  }

  body {
    @apply bg-background text-foreground;
  }
}

/**
 * Base typography. This is not applied to elements which have an ancestor with a Tailwind text class.
 */
@layer base {
  :where(:not(:has([class*=' text-']), :not(:has([class^='text-'])))) {
    h1 {
      font-size: var(--text-2xl);
      font-weight: var(--font-weight-medium);
      line-height: 1.5;
    }

    h2 {
      font-size: var(--text-xl);
      font-weight: var(--font-weight-medium);
      line-height: 1.5;
    }

    h3 {
      font-size: var(--text-lg);
      font-weight: var(--font-weight-medium);
      line-height: 1.5;
    }

    h4 {
      font-size: var(--text-base);
      font-weight: var(--font-weight-medium);
      line-height: 1.5;
    }

    p {
      font-size: var(--text-base);
      font-weight: var(--font-weight-normal);
      line-height: 1.5;
    }

    label {
      font-size: var(--text-sm);
      font-weight: var(--font-weight-medium);
      line-height: 1.5;
    }

    a {
      text-decoration: none;
    }

    ul, ol, li {
        list-style: none;
    }
  }
}
</style>
</head>
<body class="bg-gray-50">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="bg-blue-600 text-white">
            <div class="container mx-auto px-4 py-2">
                <div class="flex justify-between items-center">
                    <p class="text-sm">🎉 Miễn phí vận chuyển cho đơn hàng trên 5 triệu</p>
                    <div class="hidden md:flex gap-6 text-sm">
                        <a href="#" class="hover:text-blue-200">Hỗ trợ</a>
                        <a href="#" class="hover:text-blue-200">Theo dõi đơn hàng</a>
                        <a href="#" class="hover:text-blue-200">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between gap-4">
                <a href="index.php" class="flex items-center gap-2 flex-shrink-0">
                    <div class="bg-gradient-to-br from-blue-600 to-blue-800 text-white p-2 rounded-lg">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                           <path d="M20 3H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h3l-1 1v2h12v-2l-1-1h3c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 13H4V5h16v11z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">TechZ</span>
                </a>

                <div class="hidden md:block flex-grow max-w-xl">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Tìm kiếm sản phẩm, thương hiệu..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition-all"
                        />
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
                
                <div class="flex items-center gap-4 flex-shrink-0">
                    <div id="account-button" class="hidden md:block">
                        <a href="auth.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-all">
                            <i class="fas fa-user w-6 h-6"></i>
                            <span class="hidden lg:block">Tài khoản</span>
                        </a>
                    </div>

                    <a href="cart.php" class="relative flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-all">
                        <i class="fas fa-shopping-cart w-6 h-6"></i>
                        <span class="hidden lg:block">Giỏ hàng</span>
                        <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full">
                            0
                        </span>
                    </a>
                    
                    <label for="mobile-menu-toggle" class="md:hidden text-gray-700 hover:text-blue-600 transition-all cursor-pointer">
                        <i class="fas fa-bars w-6 h-6"></i>
                    </label>
                </div>
            </div>
        </div>

        <nav class="hidden md:block border-t border-gray-100">
            <div class="container mx-auto px-4">
                <ul class="flex justify-start gap-8 font-medium text-gray-700">
                    <li><a href="index.php#featured-products" class="block py-3 hover:text-blue-600 transition-colors">Laptop</a></li>
                    <li><a href="#" class="block py-3 hover:text-blue-600 transition-colors">PC & Workstation</a></li>
                    <li><a href="#" class="block py-3 hover:text-blue-600 transition-colors">Gaming</a></li>
                    <li><a href="#" class="block py-3 hover:text-blue-600 transition-colors">Phụ kiện</a></li>
                    <li><a href="#" class="block py-3 hover:text-blue-600 transition-colors">Linh kiện</a></li>
                    <li><a href="#" class="block py-3 text-orange-600 hover:text-orange-700 transition-colors">🔥 Khuyến mãi</a></li>
                </ul>
            </div>
        </nav>

        <input type="checkbox" id="mobile-menu-toggle" class="hidden">
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 bg-white">
          <div class="container mx-auto px-4 py-4">
            <ul class="space-y-3">
              <li><a href="index.php#featured-products" class="block py-2 hover:text-blue-600">Laptop</a></li>
              <li><a href="#" class="block py-2 hover:text-blue-600">PC & Workstation</a></li>
              <li><a href="#" class="block py-2 hover:text-blue-600">Gaming</a></li>
              <li><a href="#" class="block py-2 hover:text-blue-600">Phụ kiện</a></li>
              <li><a href="#" class="block py-2 hover:text-blue-600">Linh kiện</a></li>
              <li><a href="#" class="block py-2 text-orange-600">🔥 Khuyến mãi</a></li>
              <li class="pt-3 border-t border-gray-200">
                <a href="auth.php" class="flex items-center gap-2 py-2 text-gray-700 hover:text-blue-600">
                    <i class="fas fa-user w-5 h-5"></i>
                    Đăng nhập / Đăng ký
                </a>
              </li>
              <li class="border-t border-gray-200 pt-3">
                <a href="#" class="block py-1 text-sm text-gray-500 hover:text-blue-600">Hỗ trợ</a>
                <a href="#" class="block py-1 text-sm text-gray-500 hover:text-blue-600">Theo dõi đơn hàng</a>
                <a href="#" class="block py-1 text-sm text-gray-500 hover:text-blue-600">Liên hệ</a>
              </li>
            </ul>
          </div>
        </div>

    </header>

    <main>