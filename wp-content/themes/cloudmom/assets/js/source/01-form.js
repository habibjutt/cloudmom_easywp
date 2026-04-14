(function (){
    "use strict";

/*
 * Form / Custom input[type=file]
 */
    document.addEventListener("DOMContentLoaded", function(){
        if ( document.getElementsByClassName('form__file').length>0 ){
            [].forEach.call(document.querySelectorAll('.form__file'), function(file){
                let fileWrapper = document.createElement('label');
                fileWrapper.htmlFor = file.id;
                fileWrapper.classList.add('form__file-wrap');

                file.parentNode.insertBefore(fileWrapper, file);
                fileWrapper.appendChild(file);

                let fileInput = document.createElement('span');
                fileInput.type = 'text';
                fileInput.classList.add('form__file-input');
                fileInput.classList.add('input');
                fileInput.classList.add('placeholder');
                fileInput.innerHTML = 'MAX 6MB';
                let fileInput_val = fileInput.innerHTML;

                fileWrapper.appendChild(fileInput);
                
                let fileButton = document.createElement('span');
                fileButton.classList.add('form__file-button');
                fileButton.classList.add('button');
                fileButton.classList.add('button--file');
                fileButton.innerHTML = 'Choose a file';

                fileWrapper.appendChild(fileButton);

                file.addEventListener('change', function(e){
                    let file_name = '';

                    if( this.files && this.files.length>1 ){
                        file_name = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                    } else {
                        file_name = e.target.value.split( '\\' ).pop();
                    }

                    if( file_name ){
                        fileInput.classList.remove('placeholder');
                        fileInput.innerHTML = file_name;
                    } else {
                        fileInput.classList.add('placeholder');
                        fileInput.innerHTML = fileInput_val;
                    }
                });
            });
        }
    });

})();