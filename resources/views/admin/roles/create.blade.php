<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-5">
                    <x-message/>
                    <a href="{{url('role')}}" class="btn btn-primary">Roles list</a>
         <!-- <a href="{{url()->previous()}}" class="btn btn-primary">Create Users</a> -->
                    <form action="{{url('role')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>      
                        <div class="row">
                            @foreach($PermissionGroups as $PermissionGroup) 
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <h4>{{$PermissionGroup->name}}</h4>
                                        @foreach($PermissionGroup->Permissions as $permission) 
                                            <input class="form-check-input" name="permission_ids[]" type="checkbox" value="{{$permission->id}}">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$permission->name}}
                                            </label> <br>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach 
                        </div>  
                        <button type="submit" class="btn btn-primary">Create Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</x-app-layout>
