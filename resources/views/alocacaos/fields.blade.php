<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Projectos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projectos_id', 'Projectos Id:') !!}
    {!! Form::number('projectos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Trabalhadores Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trabalhadores_id', 'Trabalhadores Id:') !!}
    {!! Form::number('trabalhadores_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
                <label>Multiple</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
                <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;">
                	<span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Alaska"><span class="select2-selection__choice__remove" role="presentation">×</span>Alaska</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span>
               </span>

              </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alocacaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
