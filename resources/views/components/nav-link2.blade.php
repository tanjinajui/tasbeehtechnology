@props(['active' => false, 'type' => 'a'])
<a class="{{$active ? 'bg-gray-900 text-white px-3 py-2':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2'}}px-3 py-2 text-sm font-medium rounded-md" aria-current="{{$active ? 'page': 'false'}}"{{$attributes}}>{{$slot}}</a>
{{-- button a active menu  --}}
{{-- <{{$type}} class="{{$active ? 'bg-gray-900 text-white px-3 py-2':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2'}}px-3 py-2 text-sm font-medium rounded-md" aria-current="{{$active ? 'page': 'false'}}"{{$attributes}}>{{$slot}}</{{$type}}> --}}