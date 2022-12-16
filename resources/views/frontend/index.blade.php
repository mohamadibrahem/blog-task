@extends('frontend.app')

@section('title') 
    {{ __("Index") }} 
@endsection

@section('styles')
@endsection

@section('content')
<div class="row my-2">
    <div class="col-md-12 mb-3">
        <div class="d-flex justify-content-center">
            <div class="spinner-grow" role="status" id="loading">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row" id="html">

        </div>
    </div>
  </div>
@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        $.ajax({
            url: "{{ route('api.blogs.index') }}",
            type: "Get",
            dataType: "json",
            success: function (data) {
                var html = $('#html');
                $.each(data.data,function (i,value) {
                    console.log(value);
                    var content = $("<div>"+value.content+"</div>").text();
                    html.append(
                        `<div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-0">${ value.title }</h3>
                                    <div class="mb-1 text-muted">${ value.publish_date }</div>
                                    <p class="card-text mb-auto">${ content }</p>
                                    <a href="blog/${ value.id }" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto">
                                    <img width="100%" height="250" src="${ value.image.url }" />
                                </div>
                            </div>
                        </div>`
                    );
                });
                $('#loading').hide();
            }
        });
    });
</script> 

@endsection
