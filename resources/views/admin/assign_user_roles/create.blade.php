<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Role To User') }}
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-5">
                    <x-message/>
                    <a href="{{url('assign')}}" class="btn btn-primary mb-3">User Role List</a> 
                   
         <!-- <a href="{{url()->previous()}}" class="btn btn-primary">Create Users</a> -->
                    <form action="{{url('assign')}}" method="post">
                        @csrf
                        <div class="form-floating">
  {{-- <label for="userSelect">Select The User</label> --}}
  <select name="user_id" class="form-select" id="userSelect" aria-label="Floating label select example">
    <option selected>Select The User</option>
    @if ($users->count() > 0)
      @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->email }}</option>
      @endforeach
    @endif
  </select>
<br>
  <select  name="role_names[]" multiple class="form-select" id="roleSelect" >
    <option selected>Select Role</option>
    @if ($roles->count() > 0)
      @foreach ($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
      @endforeach
    @endif
  </select>
</div>
 
                        <button type="submit" class="btn btn-primary mt-3">Assign Role To User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</x-app-layout>
