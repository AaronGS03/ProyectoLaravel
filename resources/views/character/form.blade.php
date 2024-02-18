<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $character->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apodos') }}
            {{ Form::text('apodos', $character->apodos, ['class' => 'form-control' . ($errors->has('apodos') ? ' is-invalid' : ''), 'placeholder' => 'Apodos']) }}
            {!! $errors->first('apodos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('franquicia') }}
            {{ Form::text('franquicia', $character->franquicia, ['class' => 'form-control' . ($errors->has('franquicia') ? ' is-invalid' : ''), 'placeholder' => 'Franquicia']) }}
            {!! $errors->first('franquicia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $character->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $character->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::text('logo', $character->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primera_aparicion') }}
            {{ Form::text('primera_aparicion', $character->primera_aparicion, ['class' => 'form-control' . ($errors->has('primera_aparicion') ? ' is-invalid' : ''), 'placeholder' => 'Primera Aparicion']) }}
            {!! $errors->first('primera_aparicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rating_oficial') }}
            {{ Form::text('rating_oficial', $character->rating_oficial, ['class' => 'form-control' . ($errors->has('rating_oficial') ? ' is-invalid' : ''), 'placeholder' => 'Rating Oficial']) }}
            {!! $errors->first('rating_oficial', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>