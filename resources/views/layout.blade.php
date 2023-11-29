<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('messages.ubwiki')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Include Bootstrap CSS -->
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Include stylesheet -->
{{--    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">--}}

    <!-- Include the Quill library -->
{{--    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>--}}

    <?php

    $html_head_template_quill = FALSE;
    $html_head_template_quill_sim = FALSE;

    if ($html_head_template_quill == TRUE) {
        echo "
            <script type='text/javascript'>
	  	        var formatWhitelist_verbete = ['italic', 'script', 'link', 'blockquote', 'list', 'header', 'image', 'indent', 'bold'];
	  	        var formatWhitelist_modelo = ['italic', 'list', 'bold'];
	  	        var formatWhitelist_modelo_directions = formatWhitelist_modelo;
	  	        var formatWhitelist_anotacoes = ['italic', 'script', 'link', 'blockquote', 'list', 'checkbox', 'header', 'image', 'bold', 'background', 'color', 'strike', 'underline', 'align', 'link', 'video', 'image', 'indent'];
                var toolbarOptions_verbete = [
                    [{'header': [2, 3, false]}],
                    ['bold'],
                    ['italic'],
                    [{'script': 'super'}],
                    ['blockquote'],
                    [{'list': 'ordered'}, {'list': 'bullet'}],
                    [{'indent': '-1'}, { 'indent': '+1' }],
                    ['image'],
                ];
                var toolbarOptions_modelo = [
                    ['bold'],
                    ['italic'],
                    [{'list': 'ordered'}, {'list': 'bullet'}],
                ];
                var toolbarOptions_modelo_directions = toolbarOptions_modelo;
                var toolbarOptions_anotacoes = [
                    [{'header': [2, 3, false]}],
                    ['bold'],
                    ['italic'],
                    ['underline'],
                    ['strike'],
                    [{'color': [false, 'red', 'orange', 'yellow', 'green', 'blue', 'purple']}],
                    [{'background': [false, 'red', 'orange', 'yellow', 'green', 'blue', 'purple']}],
                    [{'script': 'super'}],
                    ['blockquote'],
                    [{'list': 'ordered'}, {'list': 'bullet'}, {'list': 'check'}],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    [{'align': []}],
                    ['link'],
                    ['video'],
                ];
                var BackgroundClass = Quill.import('attributors/class/background');
                var ColorClass = Quill.import('attributors/class/color');
				Quill.register(BackgroundClass, true);
				Quill.register(ColorClass, true);
            </script>";
    }

    if ($html_head_template_quill_sim == TRUE) {
        echo "
		        <script type='text/javascript'>
		        var formatWhitelist_simulados = ['italic', 'bold', 'underline', 'script', 'list', 'indent', 'image'];
                var toolbarOptions_simulados = [
                    ['bold'],
                    ['italic'],
                    ['underline'],
                    [{'script': 'super'}],
                    [{'list': 'ordered'}, {'list': 'bullet'}],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    ['image'],
                ];
		        </script>
		    ";
    }

    ?>

</head>
<body class="bg-light">

    @yield('content')

<!-- Include Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b8e073920a.js" crossorigin="anonymous"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'  // or 'bubble'
    });
</script>

</body>
</html>
