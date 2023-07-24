<div>
    @can('Country Create')
        <button class="btn btn-primary">Country Create</button>
    @endcan
    @can('Country List')
        <button class="btn btn-primary">Country List</button>
    @endcan
    @can('Country Edit')
        <button class="btn btn-primary">Country Edit</button>
    @endcan
    @can('Country Delete')
        <button class="btn btn-primary">Country Delete</button>
    @endcan

    {{-- <button class="btn btn-primary">Country List</button>
    <button class="btn btn-primary">Country Edit</button>
    <button class="btn btn-primary">Country Delete</button> --}}
@can('State Create')
        <button class="btn btn-primary">State Create</button>
    @endcan
    @can('State List')
        <button class="btn btn-primary">State List</button>
    @endcan
    @can('State Edit')
        <button class="btn btn-primary">State Edit</button>
    @endcan
    @can('State Delete')
        <button class="btn btn-primary">State Delete</button>
    @endcan

    {{-- <button class="btn btn-primary">State Create</button>
    <button class="btn btn-primary">State List</button>
    <button class="btn btn-primary">State Edit</button>
    <button class="btn btn-primary">State Delete</button> --}}
</div>