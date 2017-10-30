<!DOCTYPE html>
<html lang="th-TH">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style>
        html, body {
            font-family: 'Lato', Arial;
        }
        body {
            padding-top: 30px;
        }
        li.active {
            color: #666663!important;
            border-color: #E8E8E8!important;
            background-color: #fffff6!important;
            text-align: center;
            font-weight: bold;
            font-style: italic;
        }
    </style>

    <title>TODO - List</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-12">
            <form action="/{project}/store-task" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="project" value="{{ $project }}">
              <input type="hidden" name="status" value="0">
                <div class="alert alert-info" role="alert">
                  <h2>RFID Med - Todo List</h2>
                    <div class="text-center">
                        <input type="text" name="note" class="form-control input-lg" placeholder="type your Task then press ENTER">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">

              <ul class="list-group">
                  <li class="list-group-item active">Todo Tasks</li>
                  @foreach($tasks as $task)
                    @if($task->status == 0)
                    <a href="/{project}/edit-task?id={{ $task->id }}" type="button" class="list-group-item list-group-item-warning">
                    <span class="badge">{{ $task->created_at->diffForHumans() }}</span>
                    {{ $task->note }}
                    </a>
                    @endif
                  @endforeach
              </ul>
        </div>
        <div class="col-sm-6">
            <ul class="list-group">
                <li class="list-group-item active">Completed Tasks</li>
                @foreach($tasks as $task)
                  @if($task->status == 1)
                  <li class="list-group-item list-group-item-success">
                  <span class="badge">{{ $task->updated_at->diffForHumans($task->created_at) }}</span>
                  <s>{{ $task->note }}</s>
                  </li>
                  @endif
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
