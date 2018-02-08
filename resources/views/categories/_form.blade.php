<script>
    $(document).ready(function($){
        $('#dimensionSelector').change(function(){
            $.get("{{ url('api/dropdown/groups')}}",
                    { id:$(this).val() },
                    function(data) {
                        $('#groupSelector').empty();
                        $('#groupSelector').append("<option value='" + 0 +"'> Seleccione un grupo </option>");
                        $.each(data, function(key, element) {
                            $('#groupSelector').append("<option value='" + key +"'>" + element + "</option>");
                        });
                    });
        });
    });
</script>

<div class="form-group">
	{!! Form::label('name','Nombre:') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('dimension_id','Dimension:') !!}<br />
	{!! Form::select('dimension_id',
	(['0' => 'Seleccione una Categoria']+$dimensions->toArray()),
	null,
	['class' => 'form-control', 'id'=>'dimensionSelector']) !!}
    <label for="groupSelector">Grupo:</label><br/>
    <select name="group_id" id="groupSelector" class="form-control">
        <option value='0'> Seleccione un grupo </option>
    </select>
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>