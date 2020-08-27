@extends('emails.template')

@section('content')

<tr>
	<td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
		<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td style="padding: 0 2.5em; text-align: left;">
					<div class="text">
						<h2 style="font-weight:400; line-height:1.8;">{{ ucfirst($username) ?? '' }} Your book is here</h2>
						<h3>Download now for free!</h3>
					</div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<!-- end tr -->
<tr>
	<table class="bg_white" role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td valign="middle" style="text-align:left; padding: 1em 2.5em;">
				<p><a href="#" class="btn btn-primary">Continur your order</a></p>
			</td>
		</tr>
	</table>
</tr>

@endsection
