<!DOCTYPE html>
<head>
    <x-templates.cmp_frw_bootstrap/>
    <title>Hello World</title>
</head>
<body>
    <x-templates.cmp_header/>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg">
    </div>
    <br>
    @yield('content') 
</body>
<style type="text/css">
    body{
        background-color: #F5F5F5;
    }
</style>
    
   

