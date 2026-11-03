<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Barang</title>
</head>
<body>
    <h2> formulir tambah barang inventaris kantor</h2>

    {{--Panggil kondisi bawaan laravel jika data berhasil disimpan muncul pesan success--}}
    @if (session('success'))
         <div>{{session('success')}}</div>
    @endif

    {{--formulir mengarah ke route store milik item--}}
    <form action="{{ route ('items.store') }}" method="POST">
    @csrf {{-- wajib ada diform laravel--}}
    <label>Kode Barang:</label>
    <input type="text" name="code" required placeholder="contoh: inv-001"><br>

    <label> Nama Barang:</label>
    <input type="text" name="item_name" required placeholder="contoh: Laptop"><br>

    <label> Kategori:</label>
    <input type="text" name="category" required placeholder="contoh: Elektronik"><br>

    <label> Stok:</label>
    <input type="number" name="stock" required value="1"><br>

    <label> Kondisi:</label>
    <select name="condition">
        <option value="baik">Baik</option>
        <option value="rusak_ringan">Rusak_Ringan</option>
        <option value="rusak_parah">Rusak_Parah</option>
    </select>
    <br>

    <label> Lokasi Ruangan:</label>
    <input type="text" name="room_location" required placeholder="contoh: Ruang IT Lt 3"><br>
    
    <button type="submit">Simpan Barang</button>
    <br>
</form>
    
</body>
</html>