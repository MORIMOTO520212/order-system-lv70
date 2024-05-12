@extends('layouts.app')

@section('content')

@include('common.title', ['title' => '注文詳細'])

<div class="mx-5 my-5">
  <table class="border-collapse">
    <tr class="border-b border-slate-500">
      <th>注文ID</th>
      <td>{{ $order->id }}</td>
    </tr>
    <tr class="border-b border-slate-500">
      <th>顧客</th>
      <td>{{ $order->customer_id }}：{{ $order->customer->name }}</td>
    </tr>
    <tr class="border-b border-slate-500">
      <th>商品</th>
      <td>{{ $order->product_id }}：{{ $order->product->name }}</td>
    </tr>
    <tr class="border-b border-slate-500">
      <th>注文数</th>
      <td>{{ $order->quantity }}個</td>
    </tr>
    <tr class="border-b border-slate-500">
      <th>購入単位</th>
      <td>{{ $order->unit_price }}円</td>
    </tr>
    <tr class="border-b border-slate-500">
      <th>注文合計金額</th>
      <td>{{ $order->unit_price * $order->quantity }}円</td>
    </tr>
    <tr class="border-b border-slate-500">
      <th>注文日</th>
      <td>{{ date_format(new Datetime($order->created_at), 'Y年m月d日') }}</td>
    </tr>
    <tr>
      <th>発送日</th>
      <td>{{ date_format(new Datetime($order->shipped_on), 'Y年m月d日') }}</td>
    </tr>
  </table>
</div>

<a href={{ route('orders.edit', $order->id) }}>編集</a>

<div class="mx-5 my-5">
  <form id="delete" action={{ route('orders.destroy', $order->id) }} method="POST">
    @csrf
    @method('delete')
    <button type="submit">注文を削除</button>
  </form>

  <script>
    let del = document.getElementById('delete');
    del.addEventListener('submit', (event)=>{
      event.preventDefault();
      if(window.confirm("注文を削除しますか？")){
        document.getElementById('delete').submit();
      }
    });
  </script>
</div>

<style scoped>
  th,
  td {
    padding: 10px 15px;
  }
</style>

@endsection