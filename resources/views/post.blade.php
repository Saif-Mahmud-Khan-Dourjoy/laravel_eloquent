<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Show User's Number</title>
  </head>
  <body>

    @php
    $user=App\user::all();
    @endphp
    <ol>

      @foreach($user as $row)
     <li>
       {{ $row->name }}
     </li>
      @endforeach
     </ol> 
   <table class="table table-bordered">
    <tr>
     <th>SL</th>
     <th>User Name</th>
     <th>Category</th>
     <th>Post Title</th>
     <th>Details</th>
     <th>Action</th>
    </tr> 
    <tr>
      @foreach($post as $row)
     <td>{{$row->id}}</td>
     <td>{{$row->user->name}}</td>
     <td>{{$row->cat->category_name}}</td>
     <td>{{$row->title}}</td>
     <td>{{$row->detail}}</td>
     <td><a href="{{url('single_post/'.$row->user_id)}}" class="btn-sm btn-warning">{{$row->user->name.'S All Post'}}</a></td>
    </tr> 
    @endforeach
   </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>