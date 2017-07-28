<script type="text/javascript" src="{{ config('tinymce.cdn') }}"></script>
<script type="text/javascript">

    @if(isset($els))
    @foreach($els as $el)
    tinymce.init(
            {!! json_encode(config('tinymce.'.$el)) !!}
    );
    @endforeach
    @else
    tinymce.init(
            {!! json_encode(config('tinymce.default')) !!}
    );
    @endif

</script>
