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
                        <div class="col-12 p-0">
                            <h4>Rotor 1</h4>  
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="pretitle">Pre-título imagen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="pretitleRotor1" name="pretitleRotor1" maxlength="36" placeholder="Pre-title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorPretitleRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor1 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontPretitleRotor1" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Título imágen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="titleRotor1" name="titleRotor1" maxlength="36" placeholder="Title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color"name="colorTitleRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor1 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontTitleRotor1" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check mr-4">
                                        <input type="radio" class="form-check-input" name="useBtnRotor1" value="1" id="conBoton" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                        <label class="form-check-label" for="conBoton">Con Botón</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="useBtnRotor1" value="0" id="sinBoton" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                        <label class="form-check-label" for="sinBoton">Sin Botón</label>
                                    </div>
                                </div>
                                <div class="form-group p-2" id="buttonFields" style="@if($web->useBtnRotor1 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                    <div class="row">
                                        <div class="col-md-5 pr-0">
                                            <label for="btntext">Texto del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnTextRotor1" name="btnTextRotor1" maxlength="22" placeholder="Texto del botón">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorBtnTextRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor1 ?? '#FFFFFF' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontBtnTextRotor1" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <label for="btntext">Color de botón</label>
                                            <div class="input-group">
                                                <div class="input-group-append m-auto" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="backgroundBtnTextRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor1 ?? '#DE2423' }}" autocomplete="off">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="btnurl">URL del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnUrlRotor1" name="btnUrlRotor1" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="slim col-12 "
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="19:9"
                            data-fetcher="/slim-cropper-uploading/server/fetch.php"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1920,930">
                            <input type="file" id="imageRotor1" name="imageRotor1"/>
                            @if($web->imageRotor1)
                            <img src="/assets/images/{{$web->imageRotor1}}" />
                            @endif
                        </div>
                        <!-- segundo slider -->
                        <div class="col-12 p-0 mt-4">
                            <hr>
                            <h4>Rotor 2</h4>  
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="pretitle">Pre-título imagen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="pretitleRotor2" name="pretitleRotor2" maxlength="36" placeholder="Pre-title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorTitleRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor2 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontPretitleRotor2" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Título imágen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="titleRotor2" name="titleRotor2" maxlength="36" placeholder="Title">
                                                <div class="input-group-append" style="padding: 0px; ">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color"name="colorPretitleRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor2 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontTitleRotor2" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check mr-4">
                                        <input type="radio" class="form-check-input" name="useBtnRotor2" value="1" id="conBoton2" autocomplete="off" @if ($web->useBtnRotor2 == 1) checked @endif>
                                        <label class="form-check-label" for="conBoton2">Con Botón</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="useBtnRotor2" value="0" id="sinBoton2" autocomplete="off" @if ($web->useBtnRotor2 == 0) checked @endif>
                                        <label class="form-check-label" for="sinBoton2">Sin Botón</label>
                                    </div>
                                </div>
                                <div class="form-group p-2" id="buttonFields2" style="@if($web->useBtnRotor2 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                    <div class="row">
                                        <div class="col-md-5 pr-0">
                                            <label for="btntext">Texto del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnTextRotor2" name="btnTextRotor2" maxlength="22" placeholder="Texto del botón">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorBtnTextRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor2 ?? '#FFFFFF' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontBtnTextRotor2" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <label for="btntext">Color de botón</label>
                                            <div class="input-group">
                                                <div class="input-group-append m-auto" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="backgroundBtnTextRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor2 ?? '#DE2423' }}" autocomplete="off">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="btnurl">URL del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnUrlRotor2" name="btnUrlRotor2" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="slim col-12 mt-1"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="19:9"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1920,930">
                            <input type="file" id="imageRotor2" name="imageRotor2"/>
                            @if($web->imageRotor2)
                            <img src="/assets/images/{{$web->imageRotor2}}" />
                            @endif
                        </div>
                        <!-- tercer slider -->
                        <div class="col-12 p-0 mt-4">
                            <hr>
                            <h4>Rotor 3</h4>  
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="pretitle">Pre-título imagen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="pretitleRotor3" name="pretitleRotor3" maxlength="36" placeholder="Pre-title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorTitleRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor3 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontPretitleRotor3" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Título imágen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="titleRotor3" name="titleRotor3" maxlength="36" placeholder="Title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color"name="colorPretitleRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor3 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontTitleRotor3" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check mr-4">
                                        <input type="radio" class="form-check-input" name="useBtnRotor3" value="1" id="conBoton3" autocomplete="off" @if ($web->useBtnRotor3 == 1) checked @endif>
                                        <label class="form-check-label" for="conBoton3">Con Botón</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="useBtnRotor3" value="0" id="sinBoton3" autocomplete="off" @if ($web->useBtnRotor3 == 0) checked @endif>
                                        <label class="form-check-label" for="sinBoton3">Sin Botón</label>
                                    </div>
                                </div>
                                <div class="form-group p-2" id="buttonFields3" style="@if($web->useBtnRotor3 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                    <div class="row">
                                        <div class="col-md-5 pr-0">
                                            <label for="btntext">Texto del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnTextRotor3" name="btnTextRotor3" maxlength="22" placeholder="Texto del botón">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorBtnTextRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor3 ?? '#FFFFFF' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontBtnTextRotor3" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial">Arial</option>
                                                            <option value="Helvetica">Helvetica</option>
                                                            <option value="Times New Roman">Times New Roman</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Courier New">Courier New</option>
                                                            <option value="Verdana">Verdana</option>
                                                            <option value="Tahoma">Tahoma</option>
                                                            <option value="Trebuchet MS">Trebuchet MS</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Comic Sans MS">Comic Sans MS</option>
                                                            <option value="Arial Black">Arial Black</option>
                                                            <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype">Palatino Linotype</option>
                                                            <option value="Book Antiqua">Book Antiqua</option>
                                                            <option value="Palatino">Palatino</option>
                                                            <option value="Century Gothic">Century Gothic</option>
                                                            <option value="Lucida Console">Lucida Console</option>
                                                            <option value="Garamond">Garamond</option>
                                                            <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                            <option value="Copperplate">Copperplate</option>
                                                            <option value="Arial Narrow">Arial Narrow</option>
                                                            <option value="Rockwell">Rockwell</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                            <option value="Baskerville">Baskerville</option>
                                                            <option value="Cambria">Cambria</option>
                                                            <option value="Geneva">Geneva</option>
                                                            <option value="Century Schoolbook">Century Schoolbook</option>
                                                            <option value="Avant Garde">Avant Garde</option>
                                                            <option value="Didot">Didot</option>
                                                            <option value="Futura">Futura</option>
                                                            <option value="Brush Script MT">Brush Script MT</option>
                                                            <option value="Helvetica Neue">Helvetica Neue</option>
                                                            <option value="Cursive">Cursive</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Consolas">Consolas</option>
                                                            <option value="Courier">Courier</option>
                                                            <option value="Bookman">Bookman</option>
                                                            <option value="Cooper Black">Cooper Black</option>
                                                            <option value="Impact">Impact</option>
                                                            <option value="Wide Latin">Wide Latin</option>
                                                            <option value="Century">Century</option>
                                                            <option value="Trebuchet">Trebuchet</option>
                                                            <option value="Comic Sans">Comic Sans</option>
                                                            <option value="Stencil">Stencil</option>
                                                            <option value="Marker Felt">Marker Felt</option>
                                                            <option value="Optima">Optima</option>
                                                            <option value="Gill Sans">Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <label for="btntext">Color de botón</label>
                                            <div class="input-group">
                                                <div class="input-group-append m-auto" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="backgroundBtnTextRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor3 ?? '#DE2423' }}" autocomplete="off">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="btnurl">URL del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnUrlRotor3" name="btnUrlRotor3" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="slim col-12 mt-1"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="19:9"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1920,930">
                            <input type="file" id="imageRotor3" name="imageRotor3"/>
                            @if($web->imageRotor3)
                            <img src="/assets/images/{{$web->imageRotor3}}" />
                            @endif
                        </div>
                    </div>
                    <div class="row">
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
                    <div class="form-group pb-5 border-bottom">
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
                    <div>
                        <!-- <div class="form-group pb-5 border-bottom">
                            <h6 class="mb-5">Banner promocional</h6>
                            <div class="slim"
                                data-button-edit-title="Editar"
                                data-button-remove-title="Borrar"
                                data-ratio="86:3"
                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                                data-size="1900,66">
                                @if($web->imageLogo)
                                <img src="/assets/images/{{$web->imageLogo}}" />
                                @endif
                                <input type="file" name="imageBanner1" />
                            </div>
                        </div> -->
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

<script>
    $(document).ready(function() {
        // Listen for changes on the radio buttons
        $('input[name="useBtnRotor1"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields').show();
            } else {
                $('#buttonFields').hide();
            }
        });
        $('input[name="useBtnRotor2"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields2').show();
            } else {
                $('#buttonFields2').hide();
            }
        });
        $('input[name="useBtnRotor3"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields3').show();
            } else {
                $('#buttonFields3').hide();
            }
        });
        //aplicamos fuente selecionada a los input text como queda
        $('.font-select').on('change', function() {
            console.log('change font')
            var selectedFont = $(this).val();
            // Aplicar el estilo de fuente a los elementos <input> con la clase ".pretitle-input"
            $(this).parent().parent().parent().find('input[type="text"]').css('font-family', selectedFont);
        });
    });
</script>


@endsection