@if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- タスク詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{!! $task->content !!}</td>
                    <td>{!! $task->status !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
        {{--タスク作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}

    