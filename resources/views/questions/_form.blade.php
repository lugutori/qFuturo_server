<script>
    $(document).ready(function ($) {
        $('#dimensionSelector').change(function () {
            $.get("{{ url('api/dropdown/groups')}}",
                    {id: $(this).val()},
                    function (data) {
                        $('#groupSelector').empty();
                        $('#groupSelector').append("<option value='" + 0 + "'> Seleccione un grupo </option>");
                        $.each(data, function (key, element) {
                            $('#groupSelector').append("<option value='" + key + "'>" + element + "</option>");
                        });
                    });
        });
        $('#groupSelector').change(function () {
            $.get("{{ url('api/dropdown/categories')}}",
                    {id: $(this).val()},
                    function (data) {
                        $('#categorySelector').empty();
                        $('#categorySelector').append("<option value='" + 0 + "'> Seleccione una categoria </option>");
                        $.each(data, function (key, element) {
                            $('#categorySelector').append("<option value='" + key + "'>" + element + "</option>");
                        });
                    });
        });
        $('#questionTypeSelector').change(function () {
            if ($(this).val() == 1) {
                $('#questNumber').empty();
            } else {
                $('#questNumber').append('{!! Form::label('optionNum','Numero de posibles respuestas:') !!}');
                $('#questNumber').append('{!! Form::text('optionNum',null,['class'=>'form-control']) !!}');
            }

        });
    });
</script>

<div class="form-group">
    {!! Form::label('code','Codigo:') !!}
    {!! Form::text('code',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('text','Cuerpo:') !!}
    {!! Form::textarea('text',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('dimension_id','Dimension:') !!}<br/>
    {!! Form::select('dimension_id',
    (['0' => 'Seleccione una Categoria']+$dimensions->toArray()),
    null,
    ['class' => 'form-control', 'id'=>'dimensionSelector']) !!}
    <label for="groupSelector">Grupo:</label><br/>
    <select name="group_id" id="groupSelector" class="form-control">
        <option value='0'> Seleccione un grupo</option>
    </select>
    <label for="categorySelector">Categoria:</label><br/>
    <select name="category_id" id="categorySelector" class="form-control">
        <option value='0'> Seleccione una categoria</option>
    </select>
    <label for="questionTypeSelector">Tipo de pregunta:</label><br/>
    <select name="question_type" id="questionTypeSelector" class="form-control">
        <option value='1'> Likert</option>
        <option value='2'> Test</option>
    </select>
</div>
<div class="form-group" id="questNumber">
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>