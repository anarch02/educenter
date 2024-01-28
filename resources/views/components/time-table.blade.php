<div class="table-responsive">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">{{ __('app.lesson') }}</th>
                @foreach ($days_of_week as $day)
                <th scope="col">{{ __('app.'. $day->day) }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <th scope="row"> {{ $lesson->name }} </th>
                    @foreach ($days_of_week as $day)
                        <td>
                            @foreach ($object as $item)
                                @if ($item->days_of_week_id == $day->id && $item->lesson_id == $lesson->id)
                                    <a href="{{ route('groups.show', $item->group_id) }}" class="btn btn-warning">
                                        {{ $item->group->name }}
                                    </a>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>