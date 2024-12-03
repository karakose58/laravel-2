<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Ekleme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Ürün Ekleme Paneli</h2>
    
    <!-- Veri ekleme formu -->
    <div class="card mt-4">
        <div class="card-header">
            <h4>Ekle</h4>
        </div>
        <div class="card-body">
            <form id="addUserForm" method="POST" action="{{ route('store.product')}}">
                @csrf <!-- CSRF koruması ekleyin -->
                <div class="mb-3">
                    <label class="form-label">Ürün Adı</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ürün adı" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ürün Fiyatı</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Fiyat" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ürün Açıklaması</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Açıklama" required>
                </div>
                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>