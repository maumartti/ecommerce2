@extends('layouts.app')

@section('content')

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Configuraciones generales</h3>
        </div>
    </div>

    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Rotor de imágenes</h6>
            </div>
            <div class="card-body pt-0">
            <div class="card-body d-flex flex-column">
                <form action="{{ route('saveData') }}" method="POST" class="quick-post-form php-email-form">
                    <label></label>
                    <div class="form-group row">
                        <div class="slim col-12 "
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="17:6"
                            data-fetcher="/slim-cropper-uploading/server/fetch.php"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1800,500">
                            <input type="file" id="imageRotor1" name="imageRotor1"/>
                            @if($web->imageRotor1)
                            <img src="/assets/images/{{$web->imageRotor1}}" />
                            @endif
                        </div>
                        <div class="slim col-12 mt-1"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="17:6"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1800,500">
                            <input type="file" id="imageRotor2" name="imageRotor2"/>
                            @if($web->imageRotor2)
                            <img src="/assets/images/{{$web->imageRotor2}}" />
                            @endif
                        </div>
                        <div class="slim col-12 mt-1"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="17:6"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1800,500">
                            <input type="file" id="imageRotor3" name="imageRotor3"/>
                            @if($web->imageRotor3)
                            <img src="/assets/images/{{$web->imageRotor3}}" />
                            @endif
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-block btn-accent">Guardar Imágenes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
            <h6 class="m-0">Logo Web</h6>
            </div>
            <div class="card-body d-flex flex-column">
                <form action="{{ route('saveData') }}" method="POST" class="quick-post-form php-email-form">
                    <div class="form-group">
                        <div class="slim"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="10:2"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                            data-size="330,60">
                            @if($web->imageLogo)
                            <img src="/assets/images/{{$web->imageLogo}}" />
                            @endif
                            <input type="file" name="imageLogo" required/>
                        </div>
                    </div>
                    <h6 class="mb-5">Banner promocional</h6>
                    <div class="form-group">
                        <div class="slim"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="86:3"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                            data-size="1900,66">
                            @if($web->imageLogo)
                            <img src="/assets/images/{{$web->imageLogo}}" />
                            @endif
                            <input type="file" name="imageBanner1" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group" style="height: 120px;">
                            <h6>Color institucional</h6>
                            <input type="color" class="form-control form-control-rounded" style="width: 100%; height: 100%;" value="#DE2423" autocomplete="off">
                            <div class="input-group-append" style="top: -85px;position: relative;left: 130px;">
                            <span class="input-group-text" style="background: transparent; border: none;">
                                <i class='material-icons touch' style='font-size:40px;'>touch_app</i>
                            </span>
                            </div>
                        </div>
                    </div>

                    <div class="py-5 px-0 col-12">
                        <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                    </div>

                </form>
            </div>
            </div>

            </div>
        </div>
        </div>
        <!-- End Users By Device Stats -->
        <!-- New Draft Component -->
        <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
        <!-- Quick Post -->
        <div class="card card-small h-100">

        </div>
        <!-- End Quick Post -->
        </div>
        <!-- End New Draft Component -->
        <!-- Discussions Component -->
        <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
        <div class="card card-small blog-comments">
            <div class="card-header border-bottom">
            <h6 class="m-0">Discussions</h6>
            </div>
            <div class="card-body p-0">
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 3 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 4 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 5 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 5 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 5 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="card-footer border-top">
            <div class="row">
                <div class="col text-center view-report">
                <button type="submit" class="btn btn-white">View All Comments</button>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- End Discussions Component -->
        <!-- Top Referrals Component -->
        <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Top Referrals</h6>
            </div>
            <div class="card-body p-0">
            <ul class="list-group list-group-small list-group-flush">
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">GitHub</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Hacker News</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Reddit</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">The Next Web</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">YouTube</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Adobe</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!-- End Top Referrals Component -->
    </div>
</div>

@endsection

@section('script')	
		<script>
			$(document).ready(function(){
				//si borramos imagen exsistente para saber que exsistia y ya no
                $('.slim-btn-remove').click(function(){
                    var secondParent = $(this).parent().parent();
                    var hiddenInput = secondParent.find('input[type="hidden"]');
                    if (hiddenInput.length > 0) {
                        hiddenInput.val("empty");//en el input hidden le ponemos = empty
                    }
                });
            });


		    //input number solo numeros inputNumber
		   $('.inputNumber').bind('keypress', function(e) { 
		        return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
		    });
</script>

@endsection