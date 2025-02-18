@extends('base')
@section('title','welcome')

welcome

{{ dd($user) }}

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">emailed verified at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $us)
    <th scope="col">{{$us->id}}</th>
      <th scope="col">{{$us->name}}</th>
      <th scope="col">{{$us->email}}</th>
      <th scope="col">{{$us->email_verified_at}}</th>
    @endforeach
  </tbody>
</table>