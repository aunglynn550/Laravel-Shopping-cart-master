<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shopping Cart </title>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>
<h1 class="quote text-center m-3">Alone, we can do so little. Together we can do so much!</h1>
<a href="{{ route('logout') }}">Logout</a>
<div class="main-container">
    <div class="side-bar">
        <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
            <li class="nav-item">                
                <a class="nav-link" href="{{ route('admin.users') }}">
                <i class='menu-icon bx bx-user-circle'></i>
                    Users
                </a>
                <ul>
                    <li>
                    <a class="nav-link" href="{{ route('admin.approve-user') }}">
                        <span>Approved Request</span>
                    </a>
                    </li>
                    <li>
                    <a class="nav-link" href="{{ route('admin.users') }}">
                        <span>Users Lists</span>
                    </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">                
                <a class="nav-link" href="{{ route('admin.products.index') }}">
                <i class='menu-icon bx bxs-package'></i>
                    Products
                </a>
                <ul>
                    <li>
                    <a class="nav-link" href="{{ route('admin.users') }}">
                        <span>Products Lists</span>
                    </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">                
                <a class="nav-link" href="{{ route('admin.orders') }}">
                <i class='menu-icon bx bxs-phone-call' ></i>
                    Orders
                </a>
                <ul>
                    <li>
                    <a class="nav-link" href="{{ route('admin.users') }}">
                        <span>Orders Lists</span>
                    </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">                
                <a class="nav-link" href="{{ route('blogs.index') }}">
                <i class='menu-icon bx bx-edit' ></i>
                    Blogs
                </a>
            </li>
            

        </ul>
    </div>
        
            @yield('content')



