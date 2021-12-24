tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange export formatpainter link linkchecker autolink lists advlist checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments link casechange checklist code export formatpainter pageembed permanentpen table numlist bullist ',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
});