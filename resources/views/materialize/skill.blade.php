@extends('layouts.materialize')
@section('title', 'Skill')

@section('content')
	<div class="container">
		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			</li>
		</ul>
	</div>
@endsection

@section('customJS')
	<script>
		$(document).ready(function(){
			$('.collapsible').collapsible({
				accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		});
	</script>
@endsection