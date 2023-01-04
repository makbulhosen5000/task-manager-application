@php
    
    $bgClass = 'bg-secondary';
    switch($task->status){
        case 'active';
        $bgClass = 'bg-primary';
        break;
        case 'pending';
        $bgClass = 'bg-info';
        break;
        case 'done';
        $bgClass = 'bg-success';
        break;
        default:
        break;
    }
@endphp
<div class="my-2">
    <span class="{{  $bgClass }}  text-white rounded-4 px-3 py-1 text-capitalize" style="font-size: 10px !important">
        {{ $task->status }}
    </span>
</div>