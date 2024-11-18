{{$worker['name']}}

{{$worker['age']}}

{{$worker['wage']}}
{{$worker['rank']}}
<form action="{{route('workers.destroy',['id'=>$worker->id])}}" method="POST">
@csrf
@method("DELETE")
<input type="submit" value="DELETE">
</form>