@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{ trans('makbash/channels::general.title') }} ::
@parent
@stop

{{-- Queue Assets --}}
{{ Asset::queue('makbash-channels', 'makbash/channels::css/style.css', 'bootstrap') }}
{{ Asset::queue('makbash-channels', 'makbash/channels::js/script.js', 'jquery') }}

{{-- Partial Assets --}}
@section('assets')
@parent
@stop

{{-- Inline Styles --}}
@section('styles')
@parent
@stop

{{-- Inline Scripts --}}
@section('scripts')
@parent
<script>
jQuery(document).ready(function($) {

});
</script>
@stop

{{-- Page content --}}
@section('content')
<section id="makbash-channels">

	<header class="clearfix">
		<h1>{{ trans('makbash/channels::general.title') }}</h1>

		<nav class="tertiary-navigation pull-right">
			@widget('platform/menus::nav.show', array(2, 1, 'nav nav-pills', admin_uri()))
		</nav>
	</header>

	<hr>

	<section class="content">

		<h3>{{ trans('makbash/channels::general.byline') }}</h3>

	</section>

</section>
@stop

