@php
    $bgClass = 'bg-secondary';
    switch($task->status) {
        case 'active':
            $bgClass = 'bg-primary';
            break;
        case 'pending':
            $bgClass = 'bg-info';
            break;
        case 'done':
            $bgClass = 'bg-success';
        default:
            break;
    }
@endphp
<div class="my-2">
    <span class=" text-white rounded-4 px-4 py-1 text-capitalize">
        {{ $task->status }}
    </span>
</div>