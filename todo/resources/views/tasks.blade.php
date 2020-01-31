@extends('layout')
@section('content')
  <h1>Task List</h1>

  <form class="form-horizontal" action="/tasks" method="POST">
    {{ csrf_field() }}
    <!--Task Name-->
    <div class="form-group">
      <label for="task"class="col-sm-3 control-label">Task</label>
      <div class="col-sm-6">
        <input type="text" name="name" id="task-name"class="form-control">
      </div>
    </div>
    <!--add task button-->
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6" >
        <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i>Add Task
        </button>
      </div>
    </div>
  </form>
  <!--current tasks-->

  <h2>Current Tasks</h2>

  <table class="table table-striped task-table">
    <thead>
      <th>Task</th><th>&nbsp;</th>
    </thead>
    <tbody>
      @foreach($tasks as $task)
        <tr>
          <!--Task Name-->
          <td>
            <div class="">
              {{ $task->name }}
            </div>
          </td>
          <td>
              <form class="" action="/tasks/{{ $task->id}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button>Delete Task</button>
              </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection