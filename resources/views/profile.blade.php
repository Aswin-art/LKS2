@include('partials.header')

{{-- @dump($orderDetails) --}}
<div>
  <h1>Shopping History</h1>
  @foreach ($orderDetails as $orderDetail)    
    @foreach ($orderDetail as $order)
      
        <div class="order">
          <p>Tanggal Pesan: {{ $order->order->orderDate }}</p>
          <p>Paket Kirim: {{ $order->order->kirim->namaPaket }}</p>
          <p>Ongkos Kirim: {{ $order->order->kirim->hargaPaket }}</p>
        </div>

        <div class="orderDetail">
          <h1>Order Detail</h1>
          <ul>
            <li>Id Produk: {{ $order->produk->id }}</li>
            <li>Nama Produk: {{ $order->produk->namaProduk }}</li>
            <li>Jumlah Produk: {{ $order->jumlahBarang }}</li>
            <li>Nama Produk: {{ $order->produk->hargaProduk }}</li>
          </ul>

          <h1>Total Harga: {{ $order->totalHarga + $order->order->kirim->hargaPaket }}</h1>
        </div>
    @endforeach
  @endforeach

  <a href="{{ route('shop') }}">Kembali Belanja</a>
</div>

@include('partials.footer')

{{-- @dump($orderDetails) --}}