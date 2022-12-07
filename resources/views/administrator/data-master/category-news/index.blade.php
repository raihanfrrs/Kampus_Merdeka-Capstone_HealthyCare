@extends('layouts.main')

@section('admin-section')
<div class="card mb-4">
    <div class="card-header">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="me-1">
            <path fill="currentColor" d="M5,4H19A2,2 0 0,1 21,6V18A2,2 0 0,1 19,20H5A2,2 0 0,1 3,18V6A2,2 0 0,1 5,4M5,8V12H11V8H5M13,8V12H19V8H13M5,14V18H11V14H5M13,14V18H19V14H13Z" />
        </svg>
        Master Category News
        <a href="/category-news/create" class="btn btn-secondary btn-sm float-end">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="me-1">
                <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
            </svg>
            Category
        </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->category }}</td>
                    <td>
                        <form action="/category-news/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/category-news/{{ $item->id }}/edit" class="btn btn-warning btn-sm text-white">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                </svg>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm text-white">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection