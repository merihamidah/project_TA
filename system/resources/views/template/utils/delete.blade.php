<form action="{{$url}}" method="post" onsubmit="return confirm('yakin Ingin Menghapus Data Ini')">
    @csrf
    @method("delete")
    <button class="btn btn-danger "><i class="fa fa-trash"></i></button>
    
</form>