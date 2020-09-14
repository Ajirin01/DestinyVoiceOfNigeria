tinymce.init({
	selector: '#myTextArea' ,
    plugins: 'image imagetools textcolor colorpicker textpattern table print preview',
    toolbar1:'insertfole undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist nullist outdent indent | image ',
    toolbar2:'print preview media | forecolor backcolor fontselect',
    indent_use_margin: true,
    height: '400',
    images_upload_url: config.routes.tiny_url,
    images_upload_handler: function(blobInfo, success, failure){
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', config.routes.tiny_url);

        xhr.onload = function(){
            var json;

            if(xhr.status != 200){
                failure('HTTP Error:' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);

            if(!json || typeof json.location != 'string'){
                failure('Invalid Json:' + xhr.responseText);
                return;
            }

            success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    }
    
});