@extends('layouts.app')

@section('content')

@include('common.title', ['title' => '注文登録'])

<div class="mx-5 my-5">
  <form action="{{ route('orders.store') }}" method="post">
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
      <select name="product_id">

      </select>
    </div>
  </form>
</div>


@endsection