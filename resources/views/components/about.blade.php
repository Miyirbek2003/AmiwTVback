@extends('layouts.app')

@push('body')
    <style>
        .form-hand {
            display: flex !important;
            gap: 15px !important;
        }
    </style>
@endpush

@section('content')
    <h4 class="py-3 m-0"> О нас</h4>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header p-0 col-lg">
                    <div class="nav-align-top">
                       
                    </div>
                </div>
                <div class="card-body">

                    <form class="browser-default-validation needs-validation row form-hand" method="POST"
                        action="{{ route('about')}}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="tab-content col-xl-12">
                            <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div>
                                            <textarea class="ckeditor form-control" id="post_content" cols='30' name='body' placeholder="Kontent"
                                                rows="10"> {{$body[0]?->body}} </textarea>
                                            
                                            <label for="basic-default-bio">Kontent</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Сохранить</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection


@push('body')
    <script>
        $('.slide2').addClass('active');
    </script>
@endpush


@push('script')
@endpush
