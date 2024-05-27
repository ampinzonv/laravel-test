
@props(['type'])

@php
 
 switch ($type) {
    case 'info':
        $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
    case 'danger':
        $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
        break;
    case 'success':
        $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
        break;
    case 'warning':
        $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
        break;
    case 'dark':
    $class = 'text-grey-800 bg-grey-50 dark:bg-gray-800 dark:text-grey-400';
        break;
    
    default:
    $class = 'text-white-800 bg-grey-50 dark:bg-white-800 dark:text-white-400';
        break;
 }

@endphp


<div class="p-4 mb-4 text-sm rounded-lg bg-blue-50 {{ $class }} role="alert">
            <span class="font-medium">{{ $title ?? 'Titulo general'}}</span> {{ $slot }}
    </div>