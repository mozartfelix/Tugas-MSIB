<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @if (Session::has('error'))
        <div class="mx-auto my-lg-3" style="width: 400px;">
            <div class="rounded bg-danger p-2">
                <p class="text-white fw-bold">{{ Session::get('error') }}</p>
            </div>
        </div>
    @endif
    <form action="{{ route('update_product', ['id' => $product->id]) }}" method="POST">
        @csrf()
        @method('PATCH')
        <div class="mx-auto my-lg-3" style="width: 400px;">
            <div class="rounded bg-info pt-2 pb-3">
                <h5 class="text-center fw-bold mt-2">Edit Data Produk {{ $product->id }}</h5>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Gambar Produk</label>
                    <input type="text" class="form-control" name="gambar" placeholder="Masukkan gambar produk" value="{{ $product->gambar }}">
                </div>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama produk" value="{{ $product->nama }}">
                </div>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Berat</label>
                    <input type="number" class="form-control" name="berat" placeholder="Masukkan berat produk" value="{{ $product->berat }}">
                </div>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Masukkan harga produk" value="{{ $product->harga }}">
                </div>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Stok</label>
                    <input type="number" class="form-control" name="stok" placeholder="Masukkan stok produk" value="{{ $product->stok }}">
                </div>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Kondisi</label>
                    <select class="form-select" name="kondisi" id="">
                        <option value="0" selected>Pilih Kondisi Barang</option>
                        <option value="Baru" {{ $product->kondisi == 'Baru' ? 'selected' : '' }}>Baru</option>
                        <option value="Bekas" {{ $product->kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                    </select>
                </div>
                <div class="mx-3 mb-3">
                    <label for="" class="fw-semibold form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Tuliskan deskripsi produk yang akan dijual" id="" cols="30" rows="3">{{ $product->deskripsi }}</textarea>
                </div>
                <div class="mx-3 text-center">
                    <button type="submit" class="btn btn-dark d-grid mx-auto">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
