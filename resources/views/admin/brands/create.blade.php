<x-admin.layouts.admin_master>

        <h1 class="h3 mb-3"> Brands</h1>

        <div class="card-header">
            Create Brands <a class="btn btn-info" href="{{route('brands.index')}}">List</a>

        </div>

        <div class="card-body">
            <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-8">
                        <input type="text"
                               class="form-control"
                               id="inputTitle"
                               name="brand_name"
                               value="">
                        @error('brand_name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputPicture" class="col-sm-3 col-form-label">Picture</label>
                    <div class="col-8">
                        <input type="file"
                               class="form-control"
                               id="inputPicture"
                               name="brand_image"
                               value="">

                    </div>
                </div>

                <div class="mb-3">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>

                </div>

            </form>
        </div>

</x-admin.layouts.admin_master>
