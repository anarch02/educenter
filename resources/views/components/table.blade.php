<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
    <thead>
    <tr>
        @foreach($table as $th)
            <th class="border-bottom-0">{{ $th }}</th>
        @endforeach
        <th class="border-bottom-0">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($array as $item)
        <tr>
            @foreach($table as $td)
                <td>{{ $item->$td  }}</td>
            @endforeach
            <td>
                <a href="{{ route($route .'.show', $item->id) }}" class="btn btn-warning btn-sm">
                    <i class="fa fa-eye"></i>
                </a>

                <a href="{{ route($route .'.edit', $item->id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route($route . '.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
