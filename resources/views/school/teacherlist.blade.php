@extends('layouts.master')


@section('content')


<section class="content">
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     <th>S/N</th>
      <th scope="col">Teacher Code</th>
      <th scope="col">Teaching Subject</th>
      <th scope="col">Experience</th>
       <th scope="col">Education Level</th>
      
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    @foreach($teacherslists as  $data)
    <tr>
    
    <td>{{$i++}}</td>
      <td>{{$data->tcode}}</td>
      <td>{{$data->tsubject}}</td>
      <td>{{$data->experience}}</td>
      <td>{{$data->e_level}}</td>
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

