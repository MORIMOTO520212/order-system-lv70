@extends('layouts.app')

@section('content')

@include('common.title', ['title' => '注文管理'])

<div class="mx-5 my-5">
  <table class="border-collapse border border-slate-500">
    <thead>
      <tr>
        <th class="bg-slate-300 border border-slate-500">詳細</th>
        <th class="bg-slate-300 border border-slate-500">注文ID</th>
        <th class="bg-slate-300 border border-slate-500">注文日</th>
        <th class="bg-slate-300 border border-slate-500">顧客名</th>
        <th class="bg-slate-300 border border-slate-500">商品名</th>
        <th class="bg-slate-300 border border-slate-500">注文数</th>
        <th class="bg-slate-300 border border-slate-500">注文合計金額</th>
        <th class="bg-slate-300 border border-slate-500">発送日</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td class="border border-slate-500"><a href={{ route('orders.show', $order->id) }}>詳細</a></td>
        <td class="border border-slate-500">{{ $order->id }}</td>
        <td class="border border-slate-500">{{ date_format(new Datetime($order->created_at), 'Y年m月d日') }}</td>
        <td class="border border-slate-500">{{ $order->customer->name }}</td>
        <td class="border border-slate-500">{{ $order->product->name }}</td>
        <td class="border border-slate-500">{{ $order->quantity }}</td>
        <td class="border border-slate-500">{{ $order->unit_price * $order->quantity }} 円</td>
        <td class="border border-slate-500">{{ date_format(new Datetime($order->shipped_on), 'Y年m月d日') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<style scoped>
  th,
  td {
    padding: 10px 15px;
  }
</style>

@endsection