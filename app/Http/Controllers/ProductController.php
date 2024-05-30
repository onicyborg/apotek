<?php

namespace App\Http\Controllers;

use App\Models\ListProductNota;
use App\Models\NotaPenjualan;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function display()
    {
        $products = Products::all();

        return view('produk', ['products' => $products]);
    }

    public function index()
    {
        $products = Products::all();

        return view('dashboard.data-obat', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'harga_jual' => 'required|numeric|min:0',
            'harga_beli' => 'required|numeric|min:0',
            'type' => 'required|in:Tablet,Kapsul,Sirup,Suspensi,Pil,Krim,Salep,Gel,Plester,Inhaler,Nebulizer,Injeksi,Oftalmik,Otik,Nasal,Oil',
            'deskripsi' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk file gambar
        ]);

        // Generate unique filename using UUID
        $filename = Str::uuid() . '.' . $request->image->extension();

        $obat = new Products();

        // Simpan gambar ke dalam storage dengan nama yang unik
        $request->image->storeAs('public/images', $filename);

        $obat->nama_obat = $request->nama_obat;
        $obat->harga_jual = $request->harga_jual;
        $obat->harga_beli = $request->harga_beli;
        $obat->type = $request->type;
        $obat->deskripsi = $request->deskripsi;
        $obat->quantity = $request->quantity;
        $obat->img = $filename; // Simpan nama file gambar ke dalam database

        if ($obat->save()) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'harga_jual' => 'required|numeric|min:0',
            'harga_beli' => 'required|numeric|min:0',
            'type' => 'required|in:Tablet,Kapsul,Sirup,Suspensi,Pil,Krim,Salep,Gel,Plester,Inhaler,Nebulizer,Injeksi,Oftalmik,Otik,Nasal,Oil',
            'deskripsi' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk file gambar
        ]);

        $obat = Products::find($id);

        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage
            Storage::delete('public/images/' . $obat->img);

            // Generate unique filename using UUID
            $filename = Str::uuid() . '.' . $request->image->extension();

            // Simpan gambar baru ke dalam storage dengan nama yang unik
            $request->image->storeAs('public/images', $filename);
            $obat->img = $filename; // Simpan nama file gambar baru ke dalam database
        }

        $obat->nama_obat = $request->nama_obat;
        $obat->harga_jual = $request->harga_jual;
        $obat->harga_beli = $request->harga_beli;
        $obat->type = $request->type;
        $obat->deskripsi = $request->deskripsi;
        $obat->quantity = $request->quantity;

        if ($obat->save()) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $obat = Products::find($id);

        Storage::delete('public/images/' . $obat->img);

        $obat->delete();

        return redirect()->back();
    }

    public function index_pembelian()
    {
        $obat = Products::all();

        return view('kasir.pembelian', ['products' => $obat]);
    }

    public function pembelian(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:15',
            'products' => 'required|array',
            'products.*' => 'exists:products,id',
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:1',
        ]);

        // Hitung total harga
        $totalAllPrice = 0;
        $productDetails = [];
        foreach ($validatedData['products'] as $index => $productId) {
            $product = Products::findOrFail($productId);
            $quantity = $validatedData['quantities'][$index];
            $totalPrice = $product->harga_jual * $quantity;
            $totalAllPrice += $totalPrice;
            $product->quantity -= $quantity;
            $product->save();

            $productDetails[] = [
                'product_id' => $productId,
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ];
        }

        // Simpan ke NotaPenjualan
        $notaPenjualan = new NotaPenjualan();
        $notaPenjualan->total_all_price = $totalAllPrice;
        $notaPenjualan->nama_customer = $validatedData['customer_name'];
        $notaPenjualan->no_handphone_customer = $validatedData['customer_phone'];
        $notaPenjualan->save();

        // Simpan ke ListProductNota
        foreach ($productDetails as $productDetail) {
            $listProductNota = new ListProductNota();
            $listProductNota->product_id = $productDetail['product_id'];
            $listProductNota->nota_id = $notaPenjualan->id;
            $listProductNota->quantity = $productDetail['quantity'];
            $listProductNota->total_price = $productDetail['total_price'];
            $listProductNota->save();
        }

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        return redirect()->back();
    }

}
