<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['name'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/w.css" rel="stylesheet" />
</head>
<body>


<style>
    .a{
        font-size:20px;
        border-bottom:solid 1px black;
    }
</style>


    <div class="container urun_tablo_show">
    <h1>Ürün Detayı</h1>

    <p class="a" ><strong>Ürün Adı:</strong> {{ $product['name'] }}</p>
    <p class="a" ><strong>Açıklama:</strong> {{ $product['description'] }}</p>
    <p class="a"><strong>Fiyat:</strong> {{ $product['price'] }}</p>
    
    <form  method="GET" action="{{ route('home') }}" style="display: inline;">
                @csrf
                <button class="btnnn " type="submit">anasayfaya dön</button>
            </form>
    </div>







</body>
</html>





