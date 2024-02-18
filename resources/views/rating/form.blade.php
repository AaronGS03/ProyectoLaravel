<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('character_id') }}
            {{ Form::select('character_id',$character, $rating->character_id, ['class' => 'form-control' . ($errors->has('character_id') ? ' is-invalid' : ''), 'placeholder' => 'Character Id']) }}
            {!! $errors->first('character_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('divertido') }}
            {{ Form::text('divertido', $rating->divertido, ['class' => 'form-control' . ($errors->has('divertido') ? ' is-invalid' : ''), 'placeholder' => 'Divertido']) }}
            {!! $errors->first('divertido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_gusta') }}
            {{ Form::text('no_gusta', $rating->no_gusta, ['class' => 'form-control' . ($errors->has('no_gusta') ? ' is-invalid' : ''), 'placeholder' => 'No Gusta']) }}
            {!! $errors->first('no_gusta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>