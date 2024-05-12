@extends('layouts.app')
@section('content')
<h1>顧客管理</h1>

<table class="table-auto border-collapse">
  <thead>
    <tr>
      <th class="bg-slate-300 border border-slate-500">顧客ID</th>
      <th class="bg-slate-300 border border-slate-500">顧客名</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer)
    <tr>
      <td class="border border-slate-500">{{ $customer->id }}</td>
      <td class="border border-slate-500">{{ $customer->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection