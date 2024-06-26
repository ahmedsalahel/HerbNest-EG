@extends('layouts.dashLayout.app')

@section('page_content')

<div class="card col-12">
    <div class="card-body pa-0">
        <div class="table-wrap">
            <a href="{{ route('dashboard.products.create') }}" class="btn btn-info">add new</a>
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="postsTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Img</th>
                            <th>multi Img</th>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <th>name{{ $localeCode }}</th>
                            <th>Description {{ $localeCode }}</th>
                            @endforeach
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $product )
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>

                            <td><img width="150" height="150"
                                src="{{  $product->getFirstMediaUrl('main_image')  }}" alt=""
                                srcset="">
                            </td>
                            <td>
                            @foreach($product->getMedia('multi_image')->take(3) as $image)
                                <img width="150" height="150" src="{{ $image->getUrl() }}" alt="" srcset="">
                            @endforeach
</td>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @php
                            $translations = $product->getTranslationsArray()[ $localeCode];
                            @endphp
                            <td>{{ $translations['name'] }}</td>
                            <td>{{ $translations['description'] }}</td>
                            @endforeach
                            <td>
                                <a href="{{ route('dashboard.products.edit' , $product->id ) }}"
                                    class="btn btn-icon btn-secondary btn-icon-style-1"><span
                                        class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></a>
                                <form
                                    action="{{ route('dashboard.products.destroy', $product->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection