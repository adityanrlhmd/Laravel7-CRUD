 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>
         Material Dashboard Dark Edition by Creative Tim
     </title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
         name='viewport' />
     @include('include.admin.style')
 </head>

 <body class="dark-edition">
     <div class="wrapper ">
         @include('include.admin.sidebar')
         <div class="main-panel">
             <!-- Navbar -->
             @include('include.admin.navbar')
             <!-- End Navbar -->
             @yield('content')
             @include('include.admin.footer')
             <script>
                 const x = new Date().getFullYear();
                 let date = document.getElementById('date');
                 date.innerHTML = '&copy; ' + x + date.innerHTML;

             </script>
         </div>
     </div>
     @include('include.admin.plugin')

     @include('include.admin.script')
 </body>

 </html>
