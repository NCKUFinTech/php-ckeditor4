<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 原本官網上使用的來源為<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>，
    但是發現該版本paste from word不能使用，後來參考內容：https://ckeditor.com/docs/ckeditor4/latest/examples/classic.html 的來源才解決這個問題 -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
</head>
<body>
<a href="home">home</a>
<a href="editor">editor</a>