@extends('layouts.app')

@section('content')

@include('common.title', ['title' => '注文登録'])

@if ($errors->any())
<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<div class="mx-5 my-5">
  <form action="{{ route('orders.store') }}" method="post">
    @csrf
    <div class="my-5">
      <p class="font-bold">顧客名</p>
      <select name="customer_id" class="w-[200px] h-[30px] border border-slate-400">
        @foreach($customers as $customer)
        <option value={{ $customer->id }}>{{ $customer->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="my-5">
      <p class="font-bold">商品を選択</p>
      <select name="product_id" class="w-[200px] h-[30px] border border-slate-400">
        @foreach($products as $product)
        <option value={{ $product->id }}>{{ $product->name }} ({{ $product->category->name }})</option>
        @endforeach
      </select>
    </div>

    <div class="my-5">
      <p class="font-bold">注文数</p>
      <input type="number" name="quantity" class="w-[200px] h-[30px] border border-slate-400" value="1">
      個
    </div>

    <div class="my-5">
      <button type="submit">登録する</button>
    </div>
  </form>
</div>


@endsection