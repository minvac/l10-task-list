<h1>
    Hello Im a blade template!
</h1>

<div>
    @if (count($tasks))
        @foreach ($tasks as $task)
            <div>{{ $task->title }}</div>
        @endforeach
    @else
        <div>There are no tasks</div>
    @endif
</div>
