<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teachers)
            <tr>
                <td>{{ $teachers->FirstName }}</td>
            <td>{{ $teachers->MiddleName }}</td>
            <td>{{ $teachers->LastName }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['teachers.destroy', $teachers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teachers->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', [$teachers->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
