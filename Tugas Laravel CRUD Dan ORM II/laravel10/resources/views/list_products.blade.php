<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="mx-lg-5 mt-lg-3 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <div class="row justify-content-between">
                <div class="col">
                    <h2 class="fs-3 fw-semibold ms-3">List Product</h2>
                </div>
                <div class="col text-end me-3">
                    <a href="{{ route('form') }}" type="submit" class="btn btn-dark px-2 py-1">Tambah Produk</a>
                    <a href="{{ route('index') }}" type="submit" class="btn btn-secondary px-2 py-1">Kembali ke produk</a>
                </div>
            </div>
            <div class="mx-3 mt-4">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Kondisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration + $products->firstItem() - 1 }}</td>
                                <td>{{ $product->nama }}</td>
                                <td>{{ $product->stok }}</td>
                                <td>{{ $product->berat }}</td>
                                <td>{{ $product->harga }}</td>
                                <td>
                                    @if ($product->kondisi == 'Baru')
                                        <span class="badge bg-success" style="min-width: 80px;">{{ $product->kondisi }}</span>
                                    @elseif ($product->kondisi == 'Bekas')
                                        <span class="badge bg-dark" style="min-width: 80px;">{{ $product->kondisi }}</span>
                                    @else
                                        <span>{{ $product->kondisi }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('update_form', $product->id) }}" class="btn btn-warning">Update</a>
                                    <form action="{{ route('delete', $product->id) }}"  method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>