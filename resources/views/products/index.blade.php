@extends('layouts.app')

@section('content')

@include('common.title', ['title' => '商品検索画面'])

<div class="container">
  <form action="#" method="get">
    値段範囲：<br>
    最安値：<input type="number" name="min_price" class="border border-slate-500" value={{ request()->query('min_price') ??
    old('min_price', 100) }}>
    最高値：<input type="number" name="max_price" class="border border-slate-500" value={{ request()->query('max_price') ??
    old('max_price', 990) }}>
    <br>
    <button type="submit" class="my-5">検索する</button>
  </form>
</div>

<div class="container">
  <table class="table-auto border-collapse border border-slate-500">
    <tr>
      <th class="bg-slate-300 border border-slate-500">ID</th>
      <th class="bg-slate-300 border border-slate-500">商品名</th>
      <th class="bg-slate-300 border border-slate-500">値段</th>
    </tr>
    @foreach ($products as $product)
    <tr>
      <td class="border border-slate-500">{{ $product->id }}</td>
      <td class="border border-slate-500">{{ $product->name }}</td>
      <td class="border border-slate-500">{{ $product->price }}</td>
    </tr>
    @endforeach
  </table>
</div>

<div class="container w-[800px]">
  {{ $products->appends(Request::all())->links() }}
</div>

<style scoped>
  th,
  td {
    padding: 10px 15px;
  }
</style>

@endsection