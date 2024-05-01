@extends('layouts.admin_layout')
@section('title', 'Добавить статью:')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить статью:</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <form action=" {{ route('post.store' )}} " method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название</label>
                                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Название статьи..." required>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-4 col-form-label text-md-end" for="post-text">Текст статьи:</label>
                                        <div class="col-md-6">
                                            <textarea id="post-text"  name="text" cols="100" rows="4"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Выберите категорию:</label>
                                        <select name="category_id" class="custom-select">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

