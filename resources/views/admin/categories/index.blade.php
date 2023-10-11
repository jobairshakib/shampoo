<x-admin.layouts.admin_master>

<div class="row">
<div class="col-12 col-lg-12 col-xxl-12 d-flex">
    <div class="card flex-fill">
    <div class="card-header">
        <h2 class="card-title mb-0">Create Category</h2>
        <div class="pull-right">
            <a class=" btn btn-info" href="{{route('categories.create')}}">Back</a>
        </div>
    </div>
<table class="table table-hover my-0">
<thead>
<tr>
    <th>SL</th>
    <th class="d-none d-xl-table-cell">Category Name</th>
    <th class="d-none d-xl-table-cell">Picture</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
@foreach( $categories as $key =>$category)
<tr>
    <td>{{$key+1}}</td>
    <td class="d-none d-xl-table-cell">{{$category->category_name}}</td>

    <td> <img src="{{asset("$category->category_image")}}" style="width: 70px;height: 40px"></td>
    <td>
        <a class="btn btn-info btn-sm" href="{{route('categories.show',['category' =>$category->id])}}">show</a>
        <a class="btn btn-warning btn-sm" href="{{route('categories.edit',['category' =>$category->id])}}">Edit</a>
        <form style="display: inline" action="{{route('categories.destroy',['category'=>$category->id])}}"
        method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure want to delete?')">Delete</button>

        </form>

    </td>

</tr>

@endforeach

</tbody>
</table>
</div>
</div>

    </div>



</x-admin.layouts.admin_master>

