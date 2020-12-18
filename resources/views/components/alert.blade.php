<div class="alert alert-danger">
{{ $slot }}
</div>

@extends('layouts.app')

@component("alert")
<b>Tulisan ini akan menjadi variabel $slot</b>
@endcomponent