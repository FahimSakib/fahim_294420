<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Create a new Product
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('name') is-invalid @enderror" id="inputName"
                                        name="name" value="{{old('name')}}" type="text" />
                                    <label for="inputName">Name</label>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('category_name') is-invalid @enderror" id="inputCategoryName"
                                        name="category_name" value="{{old('category_name')}}" type="text" />
                                    <label for="inputCategoryName">Category Name</label>
                                    @error('category_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('brand_name') is-invalid @enderror" id="inputBrandName"
                                        name="brand_name" value="{{old('brand_name')}}" type="text" />
                                    <label for="inputBrandName">Brand Name</label>
                                    @error('brand_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescription" name="description" value="{{old('description')}}" type="text" />
                                    <label for="inputDescription">Description</label>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputImage" name="image" type="file" />
                                    <label for="inputImage">Image</label>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-outline-primary btn-block" type="submit">Create a
                                    Product</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
