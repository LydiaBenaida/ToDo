@extends('base')
@section('content')


    <div class="row">

        <div class="card-bo col-7 " style="
            background-color: #EDE7E7!important;
            margin-top: 3%;
            margin-left: 3%;
            margin-right: 2%;
                ">
            <div class="row " style="width: 100%">
                <h2  class=" card-h2 bold"
                    style="position: relative;
                    top: 10px;
                    margin-bottom: 3%;
                    font-weight: bold;
                    text-align: center;
                    width: 100%;
                    color: saddlebrown;
                    text-decoration: underline;">
                    My ToDo List
                </h2>

                <table class="table table-bordered"
                       style="
                       background-color: white;
                       width: 100%;
                       margin-left: 2%;
                        ">
                    <thead>
                    <tr>

                        <th scope="col " style="text-align: center">ToDo</th>
                        <th scope="col"  style="text-align: center">Date</th>
                        <th scope="col"  style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($task as $task)
                        @if(auth()->user()->id == $task->user_id)
                    <tr>

                        <td style="width: 50%">{{$task->title}}</td>
                        <td style="width: 30%">{{$task->date}}</td>

                        <td style="width: 20% ">
                            <form action="{{ route('home.destroy', $task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" style="position: relative;left: 25%;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class=" card-add col-4" style="
            background-color: #EDE7E7!important;
            margin-top: 3%;

            margin-right: 3%;
                ">
            <h2  class="bold" style="position: relative;
                top: 10px;
                margin-bottom: 6%;
                font-weight: bold;
                text-align: center;
                width: 100%;
                color: saddlebrown;
                text-decoration: underline;">
                Add To List <img src=".././img/add-property.png" style="width: 30px;" >
            </h2>

            <div class="form-group" style="   width: 100%;">
                <form method="post"  action="{{route('home.store')}}">

                    @csrf
                    <textarea required name ="task" placeholder="A new Task Here!" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <br>
                    <input required type="date" name="date" min="1000-01-01"
                           max="3000-12-31" class="form-control">
                    <br>
                    <button class="btn btn-success center" type="submit" style="position: relative;left: 40%;">
                        Add Task

                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
