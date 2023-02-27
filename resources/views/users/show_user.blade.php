@extends('layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('user.delete', $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$user->id}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Фамилия</td>
                                        <td>{{$user->surname}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Имя</td>
                                        <td>{{$user->name}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Отчество</td>
                                        <td>{{$user->patronymic}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Возраст</td>
                                        <td>{{$user->age}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Пол</td>
                                        <td>{{$user->genderTitle}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Адрес</td>
                                        <td>{{$user->address}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Телефон</td>
                                        <td>{{$user->telephone}}</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
