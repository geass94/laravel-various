@extends('layout')
@section('content')
<main class="index-main">
            <a href="/addresource" id="upload-button">რესურსის დამატება</a>
<!--            <div class="error-message"><?php
//if(!empty(Gallery::$form_submission_errors)) {echo implode("<br>", Gallery::$form_submission_errors);}
?></div>-->
<!--            <form method="POST" action="index.php" enctype="multipart/form-data" id="index-upload-form">-->
<!--                <input type="file" name="file[]" class="hidden" id="upload-input" multiple accept="image/png, image/gif, image/jpeg, image/jpg"><br>-->
<!--                <input type="submit" class="hidden">-->
<!--            </form>-->
</main>
@endsection