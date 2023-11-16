<h1> all the shoes </h1>

<table> 
	<tr>
		<th> Nom</th>
		<th> Prix </th>
	</tr>
	@foreach($shoes as $shoe)
	<tr>
		<td>{{ $shoe['name']}} </td>
		<td>{{ $shoe['price']}} </td>
	</tr>
	@endforeach



</table>